@extends('layouts.app')

@section('title', 'Admisión 2026 - Colegio Cooperativo César Vallejo')

@section('content')
<!-- Hero Section -->
<section class="hero-section admission-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="hero-title">Admisión 2026</h1>
                <p class="hero-subtitle">Proceso de admisión para Primaria y Secundaria</p>
                <div class="hero-badge">
                    <span class="badge bg-primary">Inscripciones abiertas</span>
                    <span class="badge bg-success">Del 19/08/25 al 19/09/25</span>
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
                            Disposiciones - Admisión 2026
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

                        <div class="anexo mb-4">
                            <div class="alert alert-success">
                                <h5 class="alert-heading">
                                    <i class="bi bi-download me-2"></i>
                                    Documentos Requeridos
                                </h5>
                                <p class="mb-2">Les agradezco firmar el <strong><a target="_blank" href="{{asset('files/ANEXO_CONFORMIDAD_ADMISION_2026.pdf')}}">ANEXO DE CONFORMIDAD DE ADMISIÓN 2026</a></strong> (descargar, leer y llenar) en señal de conformidad y entregar junto con la <strong><a target="_blank" href="{{asset('files/FICHA-DEL-POSTULANTE-2026.pdf')}}">FICHA DE POSTULANTE 2026</a></strong>.</p>
                                <p class="mb-0"><strong>Lugar de entrega:</strong> Oficina de administración (Putumayo #981)</p>
                            </div>
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
                            Proceso de Admisión 2026
                        </h2>
                    </div>
                    <div class="card-body">
                        <div class="fechas-importantes mb-4">
                            <div class="alert alert-info">
                                <h5 class="alert-heading">
                                    <i class="bi bi-calendar-date me-2"></i>
                                    Recepción de Documentos
                                </h5>
                                <p class="mb-2"><strong>Del 1° grado de Primaria al 5° grado de Secundaria</strong></p>
                                <p class="mb-0"><strong>Fecha:</strong> Desde el martes 19/08/25 hasta el viernes 19/09/25</p>
                                <p class="mb-0"><strong>Lugar:</strong> Oficina de administración Putumayo N° 981 (Residencia china)</p>
                            </div>
                        </div>

                        <div class="mensaje-directiva mb-4">
                            <h4 class="text-success">ESTIMADOS PADRES DE FAMILIA:</h4>
                            <p>Aperturamos el Proceso de Admisión 2026, el cual está diseñado con el propósito y la convicción de continuar brindándoles un servicio de calidad con la identidad que nos caracteriza y el ánimo de poder atender la demanda de servicio educativo a las familias que lo requieran.</p>
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

                        <!-- Etapas del Proceso -->
                        <div class="etapas-proceso">
                            <h4 class="text-success mb-4">
                                <i class="bi bi-diagram-3 me-2"></i>
                                Requisitos del Postulante
                            </h4>

                            <!-- Etapa I -->
                            <div class="etapa-card mb-4">
                                <div class="etapa-header bg-secondary text-white p-3 rounded-top">
                                    <h5 class="mb-0">
                                        <i class="bi bi-1-circle me-2"></i>
                                        I ETAPA - PRE INSCRIPCIÓN
                                    </h5>
                                </div>
                                <div class="etapa-body p-4 border">
                                    <h6 class="text-success mb-3">ESTUDIANTES NUEVOS (PROCESO DE PRE INSCRIPCIÓN)</h6>
                                    
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <i class="bi bi-check-circle text-success me-2"></i>
                                            Recepción de documentos de todos los postulantes (1° grado primaria – 6 años cumplidos hasta el 31 de marzo y 5° grado secundaria) del <strong>martes 19/08/25 al viernes 19/09/25</strong> en horario de oficina. 
                                            <span class="text-success fw-bold">(La pre inscripción NO TIENE NINGÚN COSTO)</span>.
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check-circle text-success me-2"></i>
                                            Al padre de familia, se le comunicará vía telefónica, la fecha y hora de la entrevista por la que pasará el postulante.
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check-circle text-success me-2"></i>
                                            Con un plazo máximo de 2 días, se comunicará al Padre de familia vía telefónica, si el postulante reúne los requisitos para su ingreso a la I.E. Colcoop "CV" y se le comunicará la fecha de su entrevista con un miembro directivo. <span class="text-danger fw-bold">(SOLO POSTULANTES APTOS)</span>.
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check-circle text-success me-2"></i>
                                            Si por motivos de fuerza mayor necesitan reprogramar las entrevistas propuestas UD. Señor padre de familia, tiene un plazo de 24 horas después de haber recibido la llamada para reprogramar y comunicar a la I.E.
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check-circle text-success me-2"></i>
                                            La oficina de administración, se comunicará con el padre de familia vía telefónica para indicarle la fecha, hora y los requisitos para inscribir al postulante.
                                        </li>
                                    </ul>

                                    <div class="requisitos mt-4">
                                        <h6 class="text-primary">
                                            <i class="bi bi-folder me-2"></i>
                                            Deben presentar los siguientes documentos en un fólder de manila:
                                        </h6>
                                        <div class="alert alert-light border">
                                            <h6 class="alert-heading text-primary">REQUISITOS DEL POSTULANTE</h6>
                                            <ol class="mb-0">
                                                <li><a target="_blank" href="{{asset('files/ANEXO_CONFORMIDAD_ADMISION_2026.pdf')}}">ANEXO CONFORMIDAD ADMISIÓN 2026</a></li>
                                                <li><a target="_blank" href="{{asset('files/FICHA-DEL-POSTULANTE-2026.pdf')}}" >FICHA DEL POSTULANTE-2026</a> original y copia (descargar, leer y llenar) (ficha de pre inscripción)</li>
                                                <li>Constancia de Matrícula del SIAGIE – 2025</li>
                                                <li>Copia de DNI de los padres (legible o nítido)</li>
                                                <li>Copia de DNI del alumno (legible o nítido)</li>
                                                <li>Constancia de No Adeudo (si procede de un colegio particular)</li>
                                                <li>Copia de libreta de notas del 1° Y 2° Bimestre del presente año 2025</li>
                                            </ol>
                                        </div>
                                    </div>

                                    <div class="nota-importante mt-4">
                                        <div class="alert alert-danger">
                                            <h6 class="alert-heading">
                                                <i class="bi bi-exclamation-triangle me-2"></i>
                                                NOTA IMPORTANTE
                                            </h6>
                                            <ul class="mb-0">
                                                <li>Entregar documentación completa para ser recepcionado (no insistir)</li>
                                                <li>En caso se cubra el número de vacantes establecidas en cada grado, <strong>EL PROCESO DE ADMISIÓN SE CERRARÁ ANTES DE LA FECHA INDICADA</strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Etapa II -->
                            <div class="etapa-card mb-4">
                                <div class="etapa-header bg-secondary text-white p-3 rounded-top">
                                    <h5 class="mb-0">
                                        <i class="bi bi-2-circle me-2"></i>
                                        II ETAPA - INSCRIPCIÓN
                                    </h5>
                                </div>
                                <div class="etapa-body p-4 border">
                                    <p class="fst-italic">(LA FICHA DE INSCRIPCIÓN ESTARÁ DISPONIBLE EN LAS FECHAS INDICADAS)</p>
                                    
                                    <h6 class="text-success mb-3">ESTUDIANTES NUEVOS (PROCESO DE INSCRIPCIÓN)</h6>
                                    
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <i class="bi bi-check-circle text-success me-2"></i>
                                            Recepción de documentos del 1° grado de primaria al 5° grado de secundaria, a partir del <strong>martes 18/08/25 hasta el viernes 19/09/25</strong>.
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check-circle text-success me-2"></i>
                                            Dada las fechas del proceso de Inscripción (se respetará y no habrá prórroga).
                                        </li>
                                    </ul>

                                    <div class="requisitos mt-4">
                                        <h6 class="text-primary">
                                            <i class="bi bi-folder me-2"></i>
                                            Deben presentar los siguientes documentos:
                                        </h6>
                                        <div class="alert alert-light border">
                                            <ol class="mb-0">
                                                <li><a href="{{asset('files/FICHA-DE-INSCRIPCION-2026-1o-PRIM-5o-SEC.pdf')}}">FICHA DE INSCRIPCIÓN</a> original y copia (descargar, leer y llenar)</li>
                                                <li>Si se cuenta con apoderado, éste deberá presentar una Carta Poder debidamente legalizada por el notario</li>
                                                <li>Fólder de plástico tamaño oficio</li>
                                                <li>Costo de Inscripción <span class="badge bg-danger fs-6">S/. 800.00</span></li>
                                            </ol>
                                        </div>
                                        <p class="text-danger fw-bold mt-2">
                                            <i class="bi bi-exclamation-circle me-2"></i>
                                            Entregar documentación completa para ser recepcionado (no insistir).
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Etapa III -->
                            <div class="etapa-card mb-4">
                                <div class="etapa-header bg-secondary text-white p-3 rounded-top">
                                    <h5 class="mb-0">
                                        <i class="bi bi-3-circle me-2"></i>
                                        III ETAPA - MATRÍCULA
                                    </h5>
                                </div>
                                <div class="etapa-body p-4 border">
                                    <h6 class="text-success mb-3">ESTUDIANTES NUEVOS (PROCESO DE MATRÍCULA)</h6>
                                    
                                    <div class="fechas-matricula mb-3">
                                        <h6 class="text-primary">
                                            <i class="bi bi-calendar-week me-2"></i>
                                            1° grado de primaria al 5° grado de secundaria:
                                        </h6>
                                        <p class="fw-bold">(Lunes 12/01/26 al viernes 16/01/26)</p>
                                    </div>

                                    <div class="requisitos mt-4">
                                        <h6 class="text-primary">
                                            <i class="bi bi-folder me-2"></i>
                                            Deben presentar los siguientes documentos:
                                        </h6>
                                        <div class="alert alert-light border">
                                            <ol class="mb-0">
                                                <li><a target="_blank" href="{{asset('files/ContratoPrestaciónServicios2026.pdf')}}">CONTRATO DE PRESTACIÓN DE SERVICIOS EDUCATIVOS – 2026</a> ORIGINAL Y COPIA (descargar, leer y llenar)</li>
                                                <li>Ficha Única de Matrícula actualizada</li>
                                                <li>Copia de Libreta de notas (concluido el año escolar – 2025)</li>
                                                <li>Partida de Nacimiento Original</li>
                                                <li>04 fotos tamaño carné</li>
                                                <li>Costo de matrícula <span class="badge bg-danger fs-6">S/. 290.00</span></li>
                                            </ol>
                                        </div>
                                        <p class="text-danger fw-bold mt-2">
                                            <i class="bi bi-exclamation-circle me-2"></i>
                                            Entregar documentación completa para ser recepcionado (no insistir).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Documentos para Descargar -->
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
                                <div class="col-md-3 mb-3">
                                    <div class="documento-card text-center p-3 border rounded">
                                        <i class="bi bi-file-earmark-text documento-icon text-primary mb-2"></i>
                                        <h6>ANEXO CONFORMIDAD ADMISIÓN 2026</h6>
                                        <a target="_blank" href="{{asset('files/ANEXO_CONFORMIDAD_ADMISION_2026.pdf')}}" class="btn btn-sm btn-outline-primary mt-2">
                                            <i class="bi bi-download me-1"></i> Descargar
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="col-md-3 mb-3">
                                    <div class="documento-card text-center p-3 border rounded">
                                        <i class="bi bi-file-earmark-text documento-icon text-success mb-2"></i>
                                        <h6>FICHA DE POSTULANTE 2026</h6>
                                        <a target="_blank" href="{{asset('files/FICHA-DEL-POSTULANTE-2026.pdf')}}" class="btn btn-sm btn-outline-success mt-2">
                                            <i class="bi bi-download me-1"></i> Descargar
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="documento-card text-center p-3 border rounded">
                                        <i class="bi bi-file-earmark-text documento-icon text-secondary mb-2"></i>
                                        <h6>FICHA DE INSCRIPCIÓN 2026</h6>
                                        <a target="_blank" href="{{asset('files/FICHA-DE-INSCRIPCION-2026-1o-PRIM-5o-SEC.pdf')}}" class="btn btn-sm btn-outline-secondary mt-2">
                                            <i class="bi bi-download me-1"></i> Descargar
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <div class="documento-card text-center p-3 border rounded">
                                        <i class="bi bi-file-earmark-text documento-icon text-warning mb-2"></i>
                                        <h6>CONTRATO DE PRESTACIÓN DE SERVICIOS 2026</h6>
                                        <a target="_blank" href="{{asset('files/ContratoPrestaciónServicios2026.pdf')}}" class="btn btn-sm btn-outline-warning mt-2">
                                            <i class="bi bi-download me-1"></i> Descargar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Información de Contacto -->
                <div class="contacto-info">
                    <div class="card border-success">
                        <div class="card-header bg-success text-white">
                            <h4 class="mb-0">
                                <i class="bi bi-geo-alt me-2"></i>
                                Información de Contacto y Ubicación
                            </h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="text-primary">
                                        <i class="bi bi-clock me-2"></i>
                                        Horario de Atención
                                    </h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-2">
                                            <i class="bi bi-calendar-check text-success me-2"></i>
                                            <strong>Lunes a Viernes:</strong> 7:00 AM - 1:00 PM
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-calendar-x text-danger me-2"></i>
                                            <strong>Sábados y Domingos:</strong> Cerrado
                                        </li>
                                        <li>
                                            <i class="bi bi-telephone text-primary me-2"></i>
                                            <strong>Teléfono:</strong> (01) 456-7890
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="text-primary">
                                        <i class="bi bi-geo-fill me-2"></i>
                                        Ubicación
                                    </h5>
                                    <p>
                                        <i class="bi bi-house-door text-success me-2"></i>
                                        <strong>Oficina de Administración:</strong><br>
                                        Putumayo #981 (Residencia china)<br>
                                        Lima, Perú
                                    </p>
                                    <a href="#" class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-map me-1"></i> Ver en Google Maps
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Llamado a la Acción -->
<section class="section cta-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="cta-content p-5 rounded">
                    <h2 class="cta-title mb-3">¿Listo para iniciar el proceso de admisión?</h2>
                    <p class="cta-text mb-4">No pierdas la oportunidad de formar parte de nuestra comunidad educativa. Descarga los documentos necesarios y preséntate en nuestras oficinas.</p>
                    <div class="cta-buttons">
                        <a href="{{ route('inicio') }}" class="btn btn-light btn-lg me-3">
                            <i class="bi bi-house me-2"></i> Volver al Inicio
                        </a>
                        <a href="#documentos" class="btn btn-primary btn-lg" onclick="descargarTodos()">
                            <i class="bi bi-download me-2"></i> Descargar Documentos
                        </a>
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
        // Animación para las cards
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
        
        // Scroll suave para enlaces internos
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
        // Lista de URLs de tus PDFs
        const archivos = [
            'files/ANEXO_CONFORMIDAD_ADMISION_2026.pdf',
            'files/ContratoPrestaciónServicios2026.pdf', 
            'files/FICHA-DE-INSCRIPCION-2026-1o-PRIM-5o-SEC.pdf',
            'files/FICHA-DEL-POSTULANTE-2026.pdf',
        ];
        
        // Descargar cada archivo
        archivos.forEach((url, index) => {
            setTimeout(() => {
                const link = document.createElement('a');
                link.href = url;
                link.download = url.split('/').pop();
                link.target = '_blank';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }, index * 300); // Pequeño retraso entre descargas
        });
        
        // Prevenir comportamiento por defecto
        return false;
    }
</script>
@endsection