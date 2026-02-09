@extends('layouts.app')

@section('title', 'Temarios 2026 - Colegio Cooperativo César Vallejo')

@section('content')
<!-- Hero Section -->
<section class="hero-section temarios-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="hero-title">Temarios 2026</h1>
                <p class="hero-subtitle">Descarga los temarios oficiales del año académico 2026</p>
                <div class="hero-badge">
                    <span class="badge bg-primary">Año Académico 2026</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hero-image text-center">
                    <i class="bi bi-journal-text hero-icon"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contenido Principal -->
<section class="section-body">
    <div class="container-body">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <!-- Primaria -->
                <div class="nivel-section mb-5">
                    <div class="card border-primary shadow-sm">
                        <div class="card-header bg-primary text-white">
                            <h3 class="mb-0">
                                <i class="bi bi-mortarboard-fill me-2"></i>
                                Temarios Primaria
                            </h3>
                        </div>
                        <div class="card-body">
                            <!-- Temario General Primaria -->
                            <div class="temario-item mb-3">
                                <div class="row align-items-center">
                                    <div class="col-md-10">
                                        <h5 class="temario-title mb-1">
                                            <i class="bi bi-file-earmark-pdf text-danger me-2"></i>
                                            TEMARIO 2° A 6° PRIMARIA
                                        </h5>
                                        <p class="text-muted mb-0">
                                            <small>Temarios para Primaria</small>
                                        </p>
                                    </div>
                                    <div class="col-md-2 text-end">
                                        <a href="{{ asset('files/temarios/TEMARIO-2°-A-6°-PRIMARIA-2026.pdf') }}" 
                                           class="btn btn-primary btn-sm"
                                           download="TEMARIO-2°-A-6°-PRIMARIA-2026.pdf">
                                            <i class="bi bi-download me-1"></i> Descargar
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="temario-item mb-3">
                                <div class="row align-items-center">
                                    <div class="col-md-10">
                                        <h5 class="temario-title mb-1">
                                            <i class="bi bi-file-earmark-pdf text-danger me-2"></i>
                                            2° a 6° GRADO DE PRIMARIA - INGLÉS
                                        </h5>
                                        <p class="text-muted mb-0">
                                            <small>Temarios para Primaria</small>
                                        </p>
                                    </div>
                                    <div class="col-md-2 text-end">
                                        <a href="{{ asset('files/temarios/2°-a-6°-GRADO-DE-PRIMARIA-INGLÉS.pdf') }}" 
                                           class="btn btn-primary btn-sm"
                                           download="2°-a-6°-GRADO-DE-PRIMARIA-INGLÉS">
                                            <i class="bi bi-download me-1"></i> Descargar
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="temario-item mb-3">
                                <div class="row align-items-center">
                                    <div class="col-md-10">
                                        <h5 class="temario-title mb-1">
                                            <i class="bi bi-file-earmark-pdf text-danger me-2"></i>
                                            4°-a-6°-GRADO-DE-PRIMARIA-CHINO-MANDARÍN
                                        </h5>
                                        <p class="text-muted mb-0">
                                            <small>Temarios para Primaria</small>
                                        </p>
                                    </div>
                                    <div class="col-md-2 text-end">
                                        <a href="{{ asset('files/temarios/4°-a-6°-GRADO-DE-PRIMARIA-CHINO-MANDARÍN.pdf') }}" 
                                           class="btn btn-primary btn-sm"
                                           download="4°-a-6°-GRADO-DE-PRIMARIA-CHINO-MANDARÍN">
                                            <i class="bi bi-download me-1"></i> Descargar
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Secundaria -->
                <div class="nivel-section">
                    <div class="card border-success shadow-sm">
                        <div class="card-header bg-success text-white">
                            <h3 class="mb-0">
                                <i class="bi bi-person-badge me-2"></i>
                                Temarios Secundaria
                            </h3>
                        </div>
                        <div class="card-body">
                            <p class="mb-4">Temarios por áreas curriculares para Secundaria (1° a 5° grado):</p>
                            
                            <!-- Lista simple de temarios -->
                            <div class="temarios-list">
                                <!-- Matemática -->
                                <div class="temario-item mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-10">
                                            <h6 class="mb-0">
                                                <i class="bi bi-file-earmark-pdf text-danger me-2"></i>
                                                MATEMÁTICA 1° A 5° SECUNDARIA
                                            </h6>
                                        </div>
                                        <div class="col-md-2 text-end">
                                            <a href="{{ asset('files/temarios/MATEMATICA-1°-A-5°-SECUNDARIA.pdf') }}" 
                                               class="btn btn-outline-success btn-sm"
                                               download="MATEMATICA-1°-A-5°-SECUNDARIA.pdf">
                                                <i class="bi bi-download me-1"></i> Descargar
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Inglés -->
                                <div class="temario-item mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-10">
                                            <h6 class="mb-0">
                                                <i class="bi bi-file-earmark-pdf text-danger me-2"></i>
                                                INGLÉS 1° A 5° SECUNDARIA
                                            </h6>
                                        </div>
                                        <div class="col-md-2 text-end">
                                            <a href="{{ asset('files/temarios/INGLES-1°-A-5°-SECUNDARIA.pdf') }}" 
                                               class="btn btn-outline-success btn-sm"
                                               download="INGLES-1°-A-5°-SECUNDARIA.pdf">
                                                <i class="bi bi-download me-1"></i> Descargar
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Educación Religiosa -->
                                <div class="temario-item mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-10">
                                            <h6 class="mb-0">
                                                <i class="bi bi-file-earmark-pdf text-danger me-2"></i>
                                                EDUCACIÓN RELIGIOSA 1° A 5° SECUNDARIA
                                            </h6>
                                        </div>
                                        <div class="col-md-2 text-end">
                                            <a href="{{ asset('files/temarios/EDUCACION-RELIGIOSA-1°-A-5°-SECUNDARIA.pdf') }}" 
                                               class="btn btn-outline-success btn-sm"
                                               download="EDUCACION-RELIGIOSA-1°-A-5°-SECUNDARIA.pdf">
                                                <i class="bi bi-download me-1"></i> Descargar
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Educación para el Trabajo -->
                                <div class="temario-item mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-10">
                                            <h6 class="mb-0">
                                                <i class="bi bi-file-earmark-pdf text-danger me-2"></i>
                                                EDUCACIÓN PARA EL TRABAJO 1° A 5° SECUNDARIA
                                            </h6>
                                        </div>
                                        <div class="col-md-2 text-end">
                                            <a href="{{ asset('files/temarios/EDUCACION-PARA-EL-TRABAJO-1°-A-5°-SECUNDARIA.pdf') }}" 
                                               class="btn btn-outline-success btn-sm"
                                               download="EDUCACION-PARA-EL-TRABAJO-1°-A-5°-SECUNDARIA.pdf">
                                                <i class="bi bi-download me-1"></i> Descargar
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- DPCC -->
                                <div class="temario-item mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-10">
                                            <h6 class="mb-0">
                                                <i class="bi bi-file-earmark-pdf text-danger me-2"></i>
                                                DPCC 1° A 5° SECUNDARIA
                                            </h6>
                                        </div>
                                        <div class="col-md-2 text-end">
                                            <a href="{{ asset('files/temarios/DPCC-1°-A-5°-SECUNDARIA.pdf') }}" 
                                               class="btn btn-outline-success btn-sm"
                                               download="DPCC-1°-A-5°-SECUNDARIA.pdf">
                                                <i class="bi bi-download me-1"></i> Descargar
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Comunicación -->
                                <div class="temario-item mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-10">
                                            <h6 class="mb-0">
                                                <i class="bi bi-file-earmark-pdf text-danger me-2"></i>
                                                COMUNICACIÓN 1° A 5° SECUNDARIA
                                            </h6>
                                        </div>
                                        <div class="col-md-2 text-end">
                                            <a href="{{ asset('files/temarios/COMUNICACION-1°-A-5°-SECUNDARIA.pdf') }}" 
                                               class="btn btn-outline-success btn-sm"
                                               download="COMUNICACION-1°-A-5°-SECUNDARIA.pdf">
                                                <i class="bi bi-download me-1"></i> Descargar
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ciencias Sociales -->
                                <div class="temario-item mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-10">
                                            <h6 class="mb-0">
                                                <i class="bi bi-file-earmark-pdf text-danger me-2"></i>
                                                CIENCIAS SOCIALES 1° A 5° SECUNDARIA
                                            </h6>
                                        </div>
                                        <div class="col-md-2 text-end">
                                            <a href="{{ asset('files/temarios/CIENCIAS-SOCIALES1°-A-5°-SECUNDARIA.pdf') }}" 
                                               class="btn btn-outline-success btn-sm"
                                               download="CIENCIAS-SOCIALES1°-A-5°-SECUNDARIA.pdf">
                                                <i class="bi bi-download me-1"></i> Descargar
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ciencia y Tecnología -->
                                <div class="temario-item mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-10">
                                            <h6 class="mb-0">
                                                <i class="bi bi-file-earmark-pdf text-danger me-2"></i>
                                                CIENCIA Y TECNOLOGÍA 1° A 5° SECUNDARIA
                                            </h6>
                                        </div>
                                        <div class="col-md-2 text-end">
                                            <a href="{{ asset('files/temarios/CIENCIA-Y-TECNOLOGIA-1°-A-5°-SECUNDARIA.pdf') }}" 
                                               class="btn btn-outline-success btn-sm"
                                               download="CIENCIA-Y-TECNOLOGIA-1°-A-5°-SECUNDARIA.pdf">
                                                <i class="bi bi-download me-1"></i> Descargar
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Chino Mandarín -->
                                <div class="temario-item mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-10">
                                            <h6 class="mb-0">
                                                <i class="bi bi-file-earmark-pdf text-danger me-2"></i>
                                                CHINO MANDARÍN 1° A 5° SECUNDARIA
                                            </h6>
                                        </div>
                                        <div class="col-md-2 text-end">
                                            <a href="{{ asset('files/temarios/CHINO-MANDARIN-1°-A-5°-SECUNDARIA.pdf') }}" 
                                               class="btn btn-outline-success btn-sm"
                                               download="CHINO-MANDARIN-1°-A-5°-SECUNDARIA.pdf">
                                                <i class="bi bi-download me-1"></i> Descargar
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Arte y Cultura -->
                                <div class="temario-item mb-3">
                                    <div class="row align-items-center">
                                        <div class="col-md-10">
                                            <h6 class="mb-0">
                                                <i class="bi bi-file-earmark-pdf text-danger me-2"></i>
                                                ARTE Y CULTURA DE 1° A 5° SECUNDARIA
                                            </h6>
                                        </div>
                                        <div class="col-md-2 text-end">
                                            <a href="{{ asset('files/temarios/ARTE-Y-CULTURA-DE-1°-A-5°-SECUNDARIA.pdf') }}" 
                                               class="btn btn-outline-success btn-sm"
                                               download="ARTE-Y-CULTURA-DE-1°-A-5°-SECUNDARIA.pdf">
                                                <i class="bi bi-download me-1"></i> Descargar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nota importante -->
                <div class="alert alert-info mt-4">
                    <h6 class="alert-heading">
                        <i class="bi bi-info-circle me-2"></i>
                        Nota Importante
                    </h6>
                    <p class="mb-0">
                        Todos los documentos están en formato PDF. Para abrirlos necesitas tener instalado 
                        un lector de PDF como Adobe Acrobat Reader.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CSS específico simplificado -->
<style>
    /* Hero Section */
    .temarios-hero {
        background: linear-gradient(135deg, #2e7d32 0%, #1b5e20 100%);
        color: white;
        padding: 80px 0 60px;
        margin-top: -20px;
    }
    
    .hero-title {
        font-size: 2.8rem;
        font-weight: 700;
        margin-bottom: 10px;
    }
    
    .hero-subtitle {
        font-size: 1.3rem;
        margin-bottom: 20px;
        opacity: 0.9;
    }
    
    .hero-badge .badge {
        font-size: 0.9rem;
        padding: 8px 15px;
        border-radius: 50px;
    }
    
    .hero-icon {
        font-size: 8rem;
        color: rgba(255, 255, 255, 0.2);
    }
    
    /* Temarios */
    .temario-item {
        padding: 15px;
        border-bottom: 1px solid #eee;
        transition: background-color 0.2s ease;
    }
    
    .temario-item:hover {
        background-color: rgba(46, 125, 50, 0.05);
        border-radius: 5px;
    }
    
    .temario-item:last-child {
        border-bottom: none;
    }
    
    .temario-title {
        color: var(--text-color);
        font-weight: 600;
        font-size: 1.1rem;
    }
    
    /* Botones de descarga */
    .btn-outline-success {
        border-color: var(--primary-color);
        color: var(--primary-color);
    }
    
    .btn-outline-success:hover {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
        color: white;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.2rem;
        }
        
        .hero-subtitle {
            font-size: 1.1rem;
        }
        
        .hero-icon {
            font-size: 6rem;
        }
        
        .temario-item .row {
            flex-direction: column;
        }
        
        .temario-item .col-md-10,
        .temario-item .col-md-2 {
            width: 100%;
            text-align: left !important;
        }
        
        .temario-item .col-md-2 {
            margin-top: 10px;
        }
    }
    
    @media (max-width: 576px) {
        .hero-title {
            font-size: 1.8rem;
        }
        
        .temario-item h6 {
            font-size: 0.95rem;
        }
    }
</style>

<!-- JavaScript simple -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mostrar notificación al descargar
        const downloadLinks = document.querySelectorAll('.temario-item a[download]');
        
        downloadLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const fileName = this.getAttribute('download');
                
                // Crear notificación simple
                const notification = document.createElement('div');
                notification.className = 'alert alert-success position-fixed';
                notification.style.cssText = `
                    top: 20px;
                    right: 20px;
                    z-index: 9999;
                    min-width: 250px;
                    animation: fadeIn 0.3s ease;
                `;
                notification.innerHTML = `
                    <i class="bi bi-check-circle me-2"></i>
                    Descargando: ${fileName}
                `;
                
                document.body.appendChild(notification);
                
                // Remover después de 3 segundos
                setTimeout(() => {
                    notification.style.animation = 'fadeOut 0.3s ease';
                    setTimeout(() => notification.remove(), 300);
                }, 3000);
            });
        });
        
        // Añadir animación CSS para notificaciones
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(-20px); }
                to { opacity: 1; transform: translateY(0); }
            }
            @keyframes fadeOut {
                from { opacity: 1; transform: translateY(0); }
                to { opacity: 0; transform: translateY(-20px); }
            }
        `;
        document.head.appendChild(style);
    });
</script>
@endsection