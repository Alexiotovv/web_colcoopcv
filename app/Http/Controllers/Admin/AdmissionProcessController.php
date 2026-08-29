<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdmissionProcess;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdmissionProcessController extends Controller
{
    /** Campos de archivo del proceso: nombre del input => reglas y columna en BD */
    private const CAMPOS_ARCHIVO = [
        'anexo_conformidad' => ['mimes' => 'pdf,jpg,jpeg,png,doc,docx', 'columna' => 'anexo_conformidad_url'],
        'ficha_inscripcion' => ['mimes' => 'pdf,jpg,jpeg,png,doc,docx', 'columna' => 'ficha_inscripcion_url'],
        'contrato_prestacion' => ['mimes' => 'pdf,jpg,jpeg,png,doc,docx', 'columna' => 'contrato_prestacion_url'],
        'ficha_postulante' => ['mimes' => 'pdf,jpg,jpeg,png,doc,docx', 'columna' => 'ficha_postulante_url'],
        'disposiciones_pdf' => ['mimes' => 'pdf', 'columna' => 'disposiciones_pdf_url'],
    ];

    public function index()
    {
        $procesos = AdmissionProcess::orderByDesc('year')->get();

        return view('admin.admission.index', compact('procesos'));
    }

    public function create()
    {
        $ultimo = AdmissionProcess::orderByDesc('id')->first();

        $anioSugerido = $ultimo && is_numeric($ultimo->year) ? (string) ((int) $ultimo->year + 1) : '';

        return view('admin.admission.create', [
            'proceso' => $ultimo,
            'esNuevo' => true,
            'anioSugerido' => $anioSugerido,
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validateData($request);
        $data = $this->mergeArchivos($data, $request);

        DB::transaction(function () use ($data) {
            if (! empty($data['active'])) {
                AdmissionProcess::where('active', true)->update(['active' => false]);
            }

            AdmissionProcess::create($data);
        });

        return redirect()->route('admin.admision.index')->with('status', 'Proceso de admisión creado correctamente.');
    }

    public function edit(AdmissionProcess $admision)
    {
        return view('admin.admission.edit', [
            'proceso' => $admision,
            'esNuevo' => false,
            'anioSugerido' => null,
        ]);
    }

    public function update(Request $request, AdmissionProcess $admision)
    {
        $data = $this->validateData($request);
        $data = $this->mergeArchivos($data, $request);

        DB::transaction(function () use ($data, $admision) {
            if (! empty($data['active'])) {
                AdmissionProcess::where('active', true)->where('id', '!=', $admision->id)->update(['active' => false]);
            }

            $admision->update($data);
        });

        return redirect()->route('admin.admision.index')->with('status', 'Proceso de admisión actualizado correctamente.');
    }

    public function destroy(AdmissionProcess $admision)
    {
        $admision->delete();

        return redirect()->route('admin.admision.index')->with('status', 'Proceso de admisión eliminado.');
    }

    public function activate(AdmissionProcess $admision)
    {
        DB::transaction(function () use ($admision) {
            AdmissionProcess::where('active', true)->update(['active' => false]);
            $admision->update(['active' => true]);
        });

        return redirect()->route('admin.admision.index')->with('status', "Proceso {$admision->year} activado.");
    }

    private function validateData(Request $request): array
    {
        $reglasArchivos = [];

        foreach (self::CAMPOS_ARCHIVO as $campo => $config) {
            $reglasArchivos[$campo] = ['nullable', 'file', 'mimes:'.$config['mimes'], 'max:10240'];
        }

        return $request->validate(array_merge([
            'year' => ['required', 'string', 'max:20'],
            'active' => ['nullable', 'boolean'],
            'badge_dates' => ['nullable', 'string', 'max:255'],
        ], $reglasArchivos));
    }

    /** Sube los archivos nuevos y conserva los existentes (vía input oculto *_url) si no se reemplazan. */
    private function mergeArchivos(array $data, Request $request): array
    {
        foreach (self::CAMPOS_ARCHIVO as $campo => $config) {
            $archivo = $request->file($campo);
            $urlActual = $request->input($config['columna']) ?: null;

            $data[$config['columna']] = $this->resolveUrl($urlActual, $archivo);
        }

        return $data;
    }

    /** Sube el archivo nuevo a public/files y devuelve su ruta, o conserva la url existente. */
    private function resolveUrl(?string $urlActual, ?UploadedFile $archivo): ?string
    {
        if (! $archivo) {
            return $urlActual;
        }

        $nombreBase = Str::slug(pathinfo($archivo->getClientOriginalName(), PATHINFO_FILENAME));
        $nombre = time().'_'.$nombreBase.'.'.$archivo->getClientOriginalExtension();

        $archivo->move(public_path('files'), $nombre);

        return 'files/'.$nombre;
    }
}
