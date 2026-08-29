@extends('layouts.app')

@section('title', 'Admisión ' . ($proceso->year ?? '') . ' - Colegio Cooperativo César Vallejo')

@section('content')
<!-- Hero Section -->
<section class="hero-section admission-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="hero-title">Admisión {{ $proceso->year ?? '' }}</h1>
                <p class="hero-subtitle">Proceso de admisión para Primaria y Secundaria</p>
                <div class="hero-badge">
                    <span class="badge bg-primary">Inscripciones abiertas</span>
                    @if ($proceso && $proceso->badge_dates)
                        <span class="badge bg-success">{{ $proceso->badge_dates }}</span>
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hero-image text-center">
                    <i class="bi bi-mortarboard-fill hero-icon"></i>
                </div>
            </div>
        </div>
    </div>
</section>

@if (! $proceso)
<section class="section-body">
    <div class="container-body">
        <div class="alert alert-warning text-center">
            No hay un proceso de admisión activo en este momento. Por favor, vuelva a intentarlo más tarde.
        </div>
    </div>
</section>
@else
<!-- Contenido Principal -->
<section class="section-body">
    <div class="container-body">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Disposiciones -->
                <div class="admission-card mb-5">
                    <div class="card-header bg-secondary text-white">
                        <h2 class="mb-0">
                            <i class="bi bi-info-circle me-2"></i>
                            Disposiciones - Admisión {{ $proceso->year }}
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="saludo mb-4">
                            <p class="lead">Señores Padres de Familia y/o Apoderado:</p>
                            <p>Reciba Ud. Un cordial saludo en nombre del Colegio que represento.</p>
                        </div>

                        <div class="informacion mb-4">
                            <p>Antes de preinscribir a su menor hijo(a) como postulante a una vacante en el Colegio Cooperativo "César Vallejo" les informamos que:</p>

                            <div class="alert alert-warning">
                                <ul class="mb-0">
                                    <li>Preinscribir a su menor hijo(a) como postulante a una vacante en el Colegio Cooperativo "César Vallejo", <strong>no le da derecho a una vacante</strong>, le da derecho a participar del proceso de Admisión.</li>
                                    <li>Finalizado el proceso de Admisión y realizadas las llamadas telefónicas dando a conocer los resultados, el Colegio <strong>no brindará información verbal o escrita</strong> al respecto.</li>
                                </ul>
                            </div>

                            <p class="mt-3">Habiendo sido informados de las disposiciones sobre el proceso de Admisión, pueden proceder a preinscribir a su menor hijo(a) en dicho proceso de nuestro colegio.</p>
                        </div>

                        <div class="firma text-end">
                            <p class="mb-0"><strong>Atentamente,</strong></p>
                            <p class="mb-0">La Dirección</p>
                            <p>Colegio Cooperativo "César Vallejo"</p>
                        </div>
                    </div>
                </div>

                <!-- Proceso de Admisión -->
                <div class="admission-card mb-5">
                    <div class="card-header bg-secondary text-white">
                        <h2 class="mb-0">
                            <i class="bi bi-calendar-check me-2"></i>
                            Proceso de Admisión {{ $proceso->year }}
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="mensaje-directiva mb-4">
                            <h4 class="text-success">ESTIMADOS PADRES DE FAMILIA:</h4>
                            <p>Aperturamos el Proceso de Admisión {{ $proceso->year }}, el cual está diseñado con el propósito y la convicción de continuar brindándoles un servicio de calidad con la identidad que nos caracteriza y el ánimo de poder atender la demanda de servicio educativo a las familias que lo requieran.</p>
                            <p>Por este motivo, hemos programado entrevistas que nos permitirán conocerlos y presentarles nuestra propuesta educativa, esperando satisfacer sus expectativas.</p>
                        </div>

                        <!-- Vacantes -->
                        <div class="vacantes mb-5">
                            <h4 class="text-success mb-3">
                                <i class="bi bi-person-badge me-2"></i>
                                Vacantes Disponibles
                            </h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="vacante-card text-center p-4">
                                        <i class="bi bi-people-fill vacante-icon text-primary mb-3"></i>
                                        <h5 class="vacante-title">PRIMARIA</h5>
                                        <p class="vacante-text">1° al 6° grado</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="vacante-card text-center p-4">
                                        <i class="bi bi-person-fill vacante-icon text-success mb-3"></i>
                                        <h5 class="vacante-title">SECUNDARIA</h5>
                                        <p class="vacante-text">1° al 5° grado</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Disposiciones para la Admisión (PDF con vista previa) -->
                @if ($proceso->disposiciones_pdf_url)
                <div class="admission-card mb-5">
                    <div class="card-header bg-secondary text-white">
                        <h2 class="mb-0">
                            <i class="bi bi-file-earmark-pdf me-2"></i>
                            DISPOSICIONES PARA LA ADMISIÓN {{ $proceso->year }}
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="ratio ratio-4x3 mb-3">
                            <iframe src="{{ asset($proceso->disposiciones_pdf_url) }}" title="Disposiciones para la Admisión {{ $proceso->year }}" style="border: 1px solid #dee2e6; border-radius: 8px;"></iframe>
                        </div>
                        <a href="{{ asset($proceso->disposiciones_pdf_url) }}" target="_blank" class="btn btn-primary">
                            <i class="bi bi-download me-1"></i> Descargar Disposiciones
                        </a>
                    </div>
                </div>
                @endif

                <!-- Documentos para Descargar -->
                @php
                    $documentosDescarga = collect([
                        ['label' => 'ANEXO CONFORMIDAD ADMISIÓN '.$proceso->year, 'url' => $proceso->anexo_conformidad_url],
                        ['label' => 'FICHA DE INSCRIPCIÓN', 'url' => $proceso->ficha_inscripcion_url],
                        ['label' => 'CONTRATO DE PRESTACIÓN DE SERVICIOS EDUCATIVOS – '.$proceso->year, 'url' => $proceso->contrato_prestacion_url],
                        ['label' => 'FICHA DEL POSTULANTE-'.$proceso->year, 'url' => $proceso->ficha_postulante_url],
                    ])->filter(fn ($doc) => ! empty($doc['url']))->values();
                    $colores = ['primary', 'success', 'secondary', 'warning'];
                @endphp
                @if ($documentosDescarga->isNotEmpty())
                <div class="documentos-descarga mb-5">
                    <div class="card border-primary">
                        <div class="card-header bg-success text-white">
                            <h4 class="mb-0">
                                <i class="bi bi-cloud-download me-2"></i>
                                Documentos para Descargar
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach ($documentosDescarga as $index => $doc)
                                    @php $color = $colores[$index % count($colores)]; @endphp
                                    <div class="col-md-3 mb-3">
                                        <div class="documento-card text-center p-3 border rounded">
                                            <i class="bi bi-file-earmark-text documento-icon text-{{ $color }} mb-2"></i>
                                            <h6>{{ $doc['label'] }}</h6>
                                            <a target="_blank" href="{{ asset($doc['url']) }}" class="btn btn-sm btn-outline-{{ $color }} mt-2">
                                                <i class="bi bi-download me-1"></i> Descargar
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>
    </div>
</section>
@endif


<!-- Llamado a la Acción -->
<section class="section-body cta-section">
    <div class="container-body">
        <br>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="cta-content p-5 rounded">
                    <h2 class="cta-title mb-3">¿Listo para iniciar el proceso de admisión?</h2>
                    <p class="cta-text mb-4">No pierdas la oportunidad de formar parte de nuestra comunidad educativa. Descarga los documentos necesarios y preséntate en nuestras oficinas.</p>
                    <div class="cta-buttons">
                        <a href="{{ route('inicio') }}" class="btn btn-light btn-lg me-3">
                            <i class="bi bi-house me-2"></i> Volver al Inicio
                        </a>
                        @if ($proceso)
                        <a href="#documentos" class="btn btn-primary btn-lg" onclick="descargarTodos()">
                            <i class="bi bi-download me-2"></i> Descargar Documentos
                        </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CSS específico para esta página -->
<style>
    /* Hero Section */
    .admission-hero {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
        color: white;
        padding: 100px 0 80px;
        margin-top: -20px;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .hero-subtitle {
        font-size: 1.5rem;
        margin-bottom: 25px;
        opacity: 0.9;
    }

    .hero-badge .badge {
        font-size: 1rem;
        padding: 10px 20px;
        margin-right: 10px;
        border-radius: 50px;
    }

    .hero-icon {
        font-size: 10rem;
        color: rgba(255, 255, 255, 0.2);
    }

    /* Admission Cards */
    .admission-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .admission-card:hover {
        transform: translateY(-5px);
    }

    .admission-card .card-header {
        border-bottom: none;
        padding: 25px 30px;
    }

    .admission-card .card-body {
        padding: 30px;
    }

    /* Etapas del Proceso */
    .etapa-card {
        border-radius: 10px;
        overflow: hidden;
    }

    .etapa-header {
        font-weight: 600;
    }

    .etapa-body {
        border-top: none !important;
    }

    /* Vacantes */
    .vacante-card {
        border: 2px solid #e9ecef;
        border-radius: 10px;
        transition: all 0.3s ease;
        height: 100%;
    }

    .vacante-card:hover {
        border-color: var(--primary-color);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .vacante-icon {
        font-size: 3rem;
    }

    .vacante-title {
        color: var(--primary-color);
        font-weight: 600;
    }

    /* Documentos */
    .documento-card {
        height: 100%;
        transition: all 0.3s ease;
    }

    .documento-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .documento-icon {
        font-size: 2.5rem;
    }

    /* CTA Section */
    .cta-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    }

    .cta-content {
        background: white;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
    }

    .cta-title {
        color: var(--primary-color);
        font-weight: 700;
    }

    .cta-text {
        font-size: 1.1rem;
        color: var(--light-text);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }

        .hero-subtitle {
            font-size: 1.2rem;
        }

        .hero-icon {
            font-size: 7rem;
        }

        .admission-card .card-body {
            padding: 20px;
        }

        .cta-content {
            padding: 30px !important;
        }
    }

    @media (max-width: 576px) {
        .hero-title {
            font-size: 2rem;
        }

        .hero-badge .badge {
            display: block;
            margin-bottom: 10px;
            margin-right: 0;
        }

        .vacante-card {
            margin-bottom: 20px;
        }

        .documento-card {
            margin-bottom: 20px;
        }
    }
</style>

<!-- JavaScript para interacción -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.admission-card, .vacante-card, .documento-card');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';

            setTimeout(() => {
                card.style.transition = 'all 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if(targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });

    function descargarTodos() {
        const archivos = [
            @if ($proceso)
                @foreach ($documentosDescarga as $doc)
                    '{{ $doc['url'] }}',
                @endforeach
            @endif
        ];

        archivos.forEach((url, index) => {
            setTimeout(() => {
                const link = document.createElement('a');
                link.href = url;
                link.download = url.split('/').pop();
                link.target = '_blank';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }, index * 300);
        });

        return false;
    }
</script>
@endsection
