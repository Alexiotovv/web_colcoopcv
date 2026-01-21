@extends('layouts.app')

@section('title', 'Lista de Útiles 2026 - Colegio Cooperativo César Vallejo')

@section('content')
<!-- Hero Section -->
<section class="hero-section utiles-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="hero-title">Lista de Útiles 2026</h1>
                <p class="hero-subtitle">Materiales requeridos para el año académico 2026</p>
                <div class="hero-badge">
                    <span class="badge bg-primary">Primaria y Secundaria</span>
                    <span class="badge bg-success">Año 2026</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hero-image text-center">
                    <i class="bi bi-backpack hero-icon"></i>
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
                                Lista de Útiles Primaria 2026
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- 1° Grado -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="grado-card text-center p-4 border rounded">
                                        <div class="grado-icon mb-3">
                                            <i class="bi bi-1-circle text-primary" style="font-size: 2.5rem;"></i>
                                        </div>
                                        <h5 class="grado-title mb-2">1° GRADO PRIMARIA</h5>
                                        <a href="{{ asset('files/listautiles/1°-GRADO-PRIMARIA.pdf') }}" 
                                           class="btn btn-primary btn-sm"
                                           download="1°-GRADO-PRIMARIA.pdf">
                                            <i class="bi bi-download me-1"></i> Descargar PDF
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- 2° Grado -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="grado-card text-center p-4 border rounded">
                                        <div class="grado-icon mb-3">
                                            <i class="bi bi-2-circle text-primary" style="font-size: 2.5rem;"></i>
                                        </div>
                                        <h5 class="grado-title mb-2">2° GRADO PRIMARIA</h5>
                                        <a href="{{ asset('files/listautiles/2°-GRADO-PRIMARIA.pdf') }}" 
                                           class="btn btn-primary btn-sm"
                                           download="2°-GRADO-PRIMARIA.pdf">
                                            <i class="bi bi-download me-1"></i> Descargar PDF
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- 3° Grado -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="grado-card text-center p-4 border rounded">
                                        <div class="grado-icon mb-3">
                                            <i class="bi bi-3-circle text-primary" style="font-size: 2.5rem;"></i>
                                        </div>
                                        <h5 class="grado-title mb-2">3° GRADO PRIMARIA</h5>
                                        <a href="{{ asset('files/listautiles/3°-GRADO-PRIMARIA.pdf') }}"
                                           class="btn btn-primary btn-sm"
                                           download="3°-GRADO-PRIMARIA.pdf">
                                            <i class="bi bi-download me-1"></i> Descargar PDF
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- 4° Grado -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="grado-card text-center p-4 border rounded">
                                        <div class="grado-icon mb-3">
                                            <i class="bi bi-4-circle text-primary" style="font-size: 2.5rem;"></i>
                                        </div>
                                        <h5 class="grado-title mb-2">4° GRADO PRIMARIA</h5>
                                        <a href="{{ asset('files/listautiles/4°-GRADO-PRIMARIA.pdf') }}"
                                           class="btn btn-primary btn-sm"
                                           download="4°-GRADO-PRIMARIA.pdf">
                                            <i class="bi bi-download me-1"></i> Descargar PDF
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- 5° Grado -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="grado-card text-center p-4 border rounded">
                                        <div class="grado-icon mb-3">
                                            <i class="bi bi-5-circle text-primary" style="font-size: 2.5rem;"></i>
                                        </div>
                                        <h5 class="grado-title mb-2">5° GRADO PRIMARIA</h5>
                                        <a href="{{ asset('files/listautiles/5°-GRADO-PRIMARIA.pdf') }}" 
                                           class="btn btn-primary btn-sm"
                                           download="5°-GRADO-PRIMARIA.pdf">
                                            <i class="bi bi-download me-1"></i> Descargar PDF
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- 6° Grado -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="grado-card text-center p-4 border rounded">
                                        <div class="grado-icon mb-3">
                                            <i class="bi bi-6-circle text-primary" style="font-size: 2.5rem;"></i>
                                        </div>
                                        <h5 class="grado-title mb-2">6° GRADO PRIMARIA</h5>
                                        <a href="{{ asset('files/listautiles/6°-GRADO-PRIMARIA.pdf') }}" 
                                           class="btn btn-primary btn-sm"
                                           download="6°-GRADO-PRIMARIA.pdf">
                                            <i class="bi bi-download me-1"></i> Descargar PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Secundaria -->
                <div class="nivel-section mb-5">
                    <div class="card border-success shadow-sm">
                        <div class="card-header bg-success text-white">
                            <h3 class="mb-0">
                                <i class="bi bi-person-badge me-2"></i>
                                Lista de Útiles Secundaria 2026
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- 1° Secundaria -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="grado-card text-center p-4 border rounded">
                                        <div class="grado-icon mb-3">
                                            <span class="badge bg-success" style="font-size: 1.8rem; padding: 10px 15px;">1°</span>
                                        </div>
                                        <h5 class="grado-title mb-2">LISTA DE ÚTILES 1° SEC</h5>
                                        <a href="{{ asset('files/listautiles/LISTA-DE-UTILES-1°-SEC.pdf') }}" 
                                           class="btn btn-success btn-sm"
                                           download="LISTA-DE-UTILES-1°-SEC.pdf">
                                            <i class="bi bi-download me-1"></i> Descargar PDF
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- 2° Secundaria -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="grado-card text-center p-4 border rounded">
                                        <div class="grado-icon mb-3">
                                            <span class="badge bg-success" style="font-size: 1.8rem; padding: 10px 15px;">2°</span>
                                        </div>
                                        <h5 class="grado-title mb-2">LISTA DE ÚTILES 2° SEC</h5>
                                        <a href="{{ asset('files/listautiles/LISTA-DE-UTILES-2°-SEC.pdf') }}"
                                           class="btn btn-success btn-sm"
                                           download="LISTA-DE-UTILES-2°-SEC.pdf">
                                            <i class="bi bi-download me-1"></i> Descargar PDF
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- 3° Secundaria -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="grado-card text-center p-4 border rounded">
                                        <div class="grado-icon mb-3">
                                            <span class="badge bg-success" style="font-size: 1.8rem; padding: 10px 15px;">3°</span>
                                        </div>
                                        <h5 class="grado-title mb-2">LISTA DE ÚTILES 3° SEC</h5>
                                        <a href="{{ asset('files/listautiles/LISTA-DE-UTILES-3°-SEC.pdf') }}"
                                           class="btn btn-success btn-sm"
                                           download="LISTA-DE-UTILES-3°-SEC.pdf">
                                            <i class="bi bi-download me-1"></i> Descargar PDF
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- 4° Secundaria -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="grado-card text-center p-4 border rounded">
                                        <div class="grado-icon mb-3">
                                            <span class="badge bg-success" style="font-size: 1.8rem; padding: 10px 15px;">4°</span>
                                        </div>
                                        <h5 class="grado-title mb-2">LISTA DE ÚTILES 4° SEC</h5>
                                        <a href="{{ asset('files/listautiles/LISTA-DE-UTILES-4°-SEC.pdf') }}"
                                           class="btn btn-success btn-sm"
                                           download="LISTA-DE-UTILES-4°-SEC.pdf">
                                            <i class="bi bi-download me-1"></i> Descargar PDF
                                        </a>
                                    </div>
                                </div>
                                
                                <!-- 5° Secundaria -->
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="grado-card text-center p-4 border rounded">
                                        <div class="grado-icon mb-3">
                                            <span class="badge bg-success" style="font-size: 1.8rem; padding: 10px 15px;">5°</span>
                                        </div>
                                        <h5 class="grado-title mb-2">LISTA DE ÚTILES 5° SEC</h5>
                                        <a href="{{ asset('files/listautiles/LISTA-DE-UTILES-5°-SEC.pdf') }}" 
                                           class="btn btn-success btn-sm"
                                           download="LISTA-DE-UTILES-5°-SEC.pdf">
                                            <i class="bi bi-download me-1"></i> Descargar PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Información adicional -->
                <div class="info-adicional">
                    <div class="card border-info">
                        <div class="card-header bg-info text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-info-circle me-2"></i>
                                Información Importante
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-info">
                                        <i class="bi bi-calendar-check me-2"></i>
                                        Fechas de Entrega
                                    </h6>
                                    <ul class="mb-0">
                                        <li>Primera semana de clases: Marzo 2026</li>
                                        <li>Revisión permanente durante el año</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="text-info">
                                        <i class="bi bi-question-circle me-2"></i>
                                        ¿Dudas o consultas?
                                    </h6>
                                    <p class="mb-0">
                                        Contactar con la administración del colegio.
                                        <a href="{{ route('contacto') }}" class="text-info">Ir a Contacto</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CSS específico -->
<style>
    /* Hero Section */
    .utiles-hero {
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
        margin-right: 10px;
        border-radius: 50px;
    }
    
    .hero-icon {
        font-size: 8rem;
        color: rgba(255, 255, 255, 0.2);
    }
    
    /* Cards de grado */
    .grado-card {
        transition: all 0.3s ease;
        height: 100%;
        background: white;
    }
    
    .grado-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        border-color: var(--primary-color) !important;
    }
    
    .grado-title {
        color: var(--text-color);
        font-weight: 600;
        font-size: 1.1rem;
        min-height: 3rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    /* Botones */
    .grado-card .btn {
        width: 100%;
        font-weight: 500;
        padding: 8px 15px;
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        .hero-title {
            font-size: 2.2rem;
        }
        
        .hero-subtitle {
            font-size: 1.1rem;
        }
        
        .hero-icon {
            font-size: 6rem;
        }
        
        .grado-card {
            padding: 20px 15px;
        }
    }
    
    @media (max-width: 768px) {
        .hero-title {
            font-size: 1.8rem;
        }
        
        .hero-badge .badge {
            display: block;
            margin-bottom: 10px;
            margin-right: 0;
        }
        
        .grado-title {
            font-size: 1rem;
        }
    }
    
    @media (max-width: 576px) {
        .grado-card {
            margin-bottom: 15px;
        }
    }
</style>

<!-- JavaScript simple -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Efecto hover en cards
        const gradoCards = document.querySelectorAll('.grado-card');
        
        gradoCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Notificación al descargar
        const downloadButtons = document.querySelectorAll('.grado-card .btn');
        
        downloadButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                const fileName = this.getAttribute('download') || 'lista_utiles.pdf';
                
                // Crear notificación
                const notification = document.createElement('div');
                notification.className = 'alert alert-success alert-dismissible fade show position-fixed';
                notification.style.cssText = `
                    top: 20px;
                    right: 20px;
                    z-index: 9999;
                    min-width: 250px;
                    animation: slideInRight 0.3s ease;
                `;
                notification.innerHTML = `
                    <i class="bi bi-check-circle me-2"></i>
                    Descargando: ${fileName}
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert"></button>
                `;
                
                document.body.appendChild(notification);
                
                // Auto cerrar después de 3 segundos
                setTimeout(() => {
                    if (notification.parentNode) {
                        const bsAlert = new bootstrap.Alert(notification);
                        bsAlert.close();
                    }
                }, 3000);
            });
        });
        
        // Añadir animación CSS
        const style = document.createElement('style');
        style.textContent = `
            @keyframes slideInRight {
                from { opacity: 0; transform: translateX(100%); }
                to { opacity: 1; transform: translateX(0); }
            }
        `;
        document.head.appendChild(style);
    });
</script>
@endsection