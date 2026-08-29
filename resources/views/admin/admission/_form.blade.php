@csrf
@php $esNuevo = $esNuevo ?? false; @endphp

@if ($esNuevo && isset($proceso))
    <div class="alert alert-info">
        <i class="bi bi-info-circle me-1"></i>
        Se precargaron los datos del proceso {{ $proceso->year }}. Verifica el año y los archivos antes de guardar.
    </div>
@endif

<div class="card border-0 shadow-sm mb-4">
    <div class="card-body">
        <h5 class="mb-3">Datos generales</h5>
        <div class="row g-3">
            <div class="col-md-3">
                <label class="form-label">Año <span class="text-danger">*</span></label>
                <input type="text" name="year" class="form-control @error('year') is-invalid @enderror" value="{{ old('year', $esNuevo ? ($anioSugerido ?? '') : ($proceso->year ?? '')) }}" placeholder="2027" required>
                @error('year') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>
            <div class="col-md-9">
                <label class="form-label">Fechas de inscripción (badge)</label>
                <input type="text" name="badge_dates" class="form-control" value="{{ old('badge_dates', $proceso->badge_dates ?? '') }}" placeholder="Del 19/08/26 al 19/09/26">
            </div>

            <div class="col-12">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="active" id="active" value="1" {{ old('active', $esNuevo ? false : ($proceso->active ?? false)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="active">Activar este proceso (se mostrará en la web pública, solo uno puede estar activo)</label>
                </div>
            </div>
        </div>
    </div>
</div>

@php
    $campos = [
        'anexo_conformidad' => ['columna' => 'anexo_conformidad_url', 'titulo' => 'ANEXO CONFORMIDAD ADMISIÓN'],
        'ficha_inscripcion' => ['columna' => 'ficha_inscripcion_url', 'titulo' => 'FICHA DE INSCRIPCIÓN'],
        'contrato_prestacion' => ['columna' => 'contrato_prestacion_url', 'titulo' => 'CONTRATO DE PRESTACIÓN DE SERVICIOS EDUCATIVOS'],
        'ficha_postulante' => ['columna' => 'ficha_postulante_url', 'titulo' => 'FICHA DEL POSTULANTE'],
        'disposiciones_pdf' => ['columna' => 'disposiciones_pdf_url', 'titulo' => 'DISPOSICIONES PARA LA ADMISIÓN (PDF, con vista previa)'],
    ];
@endphp

<div class="card border-0 shadow-sm mb-4">
    <div class="card-body">
        <h5 class="mb-3">Documentos para descargar</h5>
        <div class="row g-3">
            @foreach ($campos as $nombre => $info)
                @php $urlActual = $proceso->{$info['columna']} ?? null; @endphp
                <div class="col-md-6">
                    <label class="form-label">{{ $info['titulo'] }}</label>
                    @if ($urlActual)
                        <div class="d-flex align-items-center gap-2 mb-1" id="archivo-actual-{{ $nombre }}">
                            <a href="{{ asset($urlActual) }}" target="_blank" class="small">
                                <i class="bi bi-file-earmark-arrow-down"></i> Ver archivo actual
                            </a>
                            <button type="button" class="btn btn-sm btn-link text-danger p-0" title="Eliminar archivo actual" onclick="eliminarArchivoActual('{{ $nombre }}')">❌</button>
                        </div>
                    @endif
                    <input type="hidden" id="url-{{ $nombre }}" name="{{ $info['columna'] }}" value="{{ old($info['columna'], $urlActual) }}">
                    <input type="file" name="{{ $nombre }}" class="form-control @error($nombre) is-invalid @enderror">
                    @error($nombre) <div class="invalid-feedback">{{ $message }}</div> @enderror
                    <span class="form-text small">Subir/cambiar archivo (déjalo vacío para mantener el actual)</span>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    function eliminarArchivoActual(nombre) {
        document.getElementById('url-' + nombre).value = '';
        const bloque = document.getElementById('archivo-actual-' + nombre);
        if (bloque) {
            bloque.remove();
        }
    }
</script>


<div class="mb-4">
    <button type="submit" class="btn btn-primary">
        <i class="bi bi-save me-1"></i> Guardar
    </button>
    <a href="{{ route('admin.admision.index') }}" class="btn btn-outline-secondary">Cancelar</a>
</div>
