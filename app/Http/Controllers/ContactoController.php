<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMensaje;
use Illuminate\Support\Facades\Validator;
use Biscolab\ReCaptcha\Facades\ReCaptcha;

class ContactoController extends Controller
{
    /**
     * Mostrar el formulario de contacto
     */
    public function index()
    {
        return view('contacto');
    }

    /**
     * Procesar el envío del formulario de contacto
     */
    public function enviar(Request $request)
    {
        // PRIMERO validar reCAPTCHA
        $recaptchaResponse = $request->input('g-recaptcha-response');
        
        if (!$recaptchaResponse) {
            return redirect()->route('contacto')
                ->withErrors(['g-recaptcha-response' => 'Por favor complete el reCAPTCHA.'])
                ->withInput();
        }
        
        // Verificar reCAPTCHA con Google
        $secretKey = config('services.recaptcha.secret_key');
        
        // Para desarrollo local, puedes usar claves de prueba
        if (app()->environment('local') && !$secretKey) {
            // Claves de prueba de Google (siempre retornan éxito)
            $secretKey = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';
        }
        
        $verifyResponse = file_get_contents(
            "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}"
        );
        
        $responseData = json_decode($verifyResponse);
        
        if (!$responseData->success) {
            return redirect()->route('contacto')
                ->withErrors(['g-recaptcha-response' => 'Error en la verificación de reCAPTCHA. Por favor, inténtelo de nuevo.'])
                ->withInput();
        }
        
        // LUEGO validar el resto del formulario
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'telefono' => 'nullable|string|max:20',
            'asunto' => 'required|string|max:150',
            'mensaje' => 'required|string|min:10|max:1000',
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico no es válido.',
            'asunto.required' => 'El asunto es obligatorio.',
            'mensaje.required' => 'El mensaje es obligatorio.',
            'mensaje.min' => 'El mensaje debe tener al menos 10 caracteres.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('contacto')
                ->withErrors($validator)
                ->withInput();
        }

        // try {
            // Datos del mensaje
            $datosMensaje = [
                'nombre' => $request->nombre,
                'email' => $request->email,
                'telefono' => $request->telefono,
                'asunto' => $request->asunto,
                'mensaje' => $request->mensaje,
                'fecha' => now()->format('d/m/Y H:i:s'),
                'ip' => $request->ip(),
                'user_agent' => $request->header('User-Agent')
            ];

            // LISTA DE CORREOS DESTINATARIOS CC (Puedes agregar varios)
            $copiar = [
                // 'gpsalexvasquez@gmail.com',// Director
            ];

            $copiaOculta = [
                'gpsalexvasquez@gmail.com'
            ];

            if ($request->has('copia') && filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
                $copiar[] = $request->email;
            }

            // Enviar email al administrador
            Mail::to(['colcoopcesarvallejo@gmail.com'])
                ->cc($copiar)
                ->bcc($copiaOculta)
                ->send(new ContactoMensaje($datosMensaje));


            // Registrar en la base de datos (opcional)
            // Contacto::create($datosMensaje);

            return redirect()->route('contacto')
                ->with('success', '¡Mensaje enviado correctamente! Nos pondremos en contacto contigo pronto.');

        // } catch (\Exception $e) {
        //     \Log::error('Error al enviar mensaje de contacto: ' . $e->getMessage());
            
        //     return redirect()->route('contacto')
        //         ->with('error', 'Hubo un error al enviar el mensaje. Por favor, inténtelo nuevamente más tarde.')
        //         ->withInput();
        // }
    }
}