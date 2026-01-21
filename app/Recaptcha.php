<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Recaptcha implements Rule
{
    /**
     * Determine if the validation rule passes.
     */
    public function passes($attribute, $value): bool
    {
        // Verificar si el campo está vacío
        if (empty($value)) {
            return false;
        }

        // Verificar con Google reCAPTCHA
        $secretKey = config('services.recaptcha.secret_key');
        
        if (!$secretKey) {
            // Si no hay clave secreta configurada, permitir en desarrollo
            return app()->environment('local') || app()->environment('testing');
        }

        $response = file_get_contents(
            "https://www.google.com/recaptcha/api/siteverify?secret=" . $secretKey . "&response=" . $value
        );
        
        $responseData = json_decode($response);
        
        return $responseData->success;
    }

    /**
     * Get the validation error message.
     */
    public function message(): string
    {
        return 'La verificación de reCAPTCHA ha fallado. Por favor, inténtelo de nuevo.';
    }
}