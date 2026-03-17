@extends('layouts.app')

@section('title', 'Horas Libres - Colegio César Vallejo')

@push('styles')
<style>
    .download-hero {
        background: linear-gradient(135deg, #1a4f8c 0%, #23a32a 100%);
        color: white;
        padding: 60px 0;
        text-align: center;
        margin-top: -20px;
    }
    .excel-card {
        background: white;
        border-radius: 15px;
        padding: 30px;
        text-align: center;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        border-top: 5px solid #23a32a;
        height: 100%;
    }
    .excel-card:hover {
        transform: translateY(-5px);
    }
    .excel-icon {
        font-size: 4rem;
        color: #1d6f42; /* Verde Excel */
        margin-bottom: 15px;
    }
    .btn-excel {
        background-color: #1d6f42;
        color: white;
        font-weight: 600;
        width: 100%;
        border-radius: 8px;
        padding: 12px;
    }
    .btn-excel:hover {
        background-color: #155231;
        color: white;
    }
</style>
@endpush

@section('content')
<section class="download-hero">
    <div class="container">
        <h1><i class="bi bi-clock-history"></i> HORAS LIBRES 2026</h1>
        <p class="lead">Descarga los horarios de disponibilidad docente</p>
    </div>
</section>

<section class="section-body py-5">
    <div class="container">
        <div class="row justify-content-center g-4">
            
            <div class="col-md-5 col-lg-4">
                <div class="excel-card">
                    <div class="excel-icon">
                        <i class="bi bi-file-earmark-excel-fill"></i>
                    </div>
                    <h4 class="mb-3">Horas Libres - Primaria</h4>
                    <p class="text-muted">Consulte la disponibilidad de los docentes del nivel primario para el año escolar 2026.</p>
                    <a href="{{ asset('files/horaslibres/HORAS LIBRES DOCENTES PRIMARIA - 2026.xlsx') }}" class="btn btn-excel">
                        <i class="bi bi-download me-2"></i> Descargar Excel
                    </a>
                </div>
            </div>

            <div class="col-md-5 col-lg-4">
                <div class="excel-card">
                    <div class="excel-icon">
                        <i class="bi bi-file-earmark-excel-fill"></i>
                    </div>
                    <h4 class="mb-3">Horas Libres - Secundaria</h4>
                    <p class="text-muted">Consulte la disponibilidad de los docentes del nivel secundario para el año escolar 2026.</p>
                    <a href="{{ asset('files/horaslibres/HORAS LIBRES DOCENTES - NIVEL SECUNDARIA - 2026.xlsx') }}" class="btn btn-excel">
                        <i class="bi bi-download me-2"></i> Descargar Excel
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection