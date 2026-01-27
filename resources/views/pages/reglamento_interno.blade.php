@extends('layouts.app')

@section('title', 'Reglamento Interno 2026 - Colegio Cooperativo César Vallejo')

@push('styles')
<style>
    /* Hero Section */
    .reglamento-hero {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
        color: white;
        padding: 100px 0 80px;
        margin-top: -20px;
        text-align: center;
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
        margin: 0 10px;
        border-radius: 50px;
    }
    
    .hero-icon {
        font-size: 8rem;
        color: rgba(255, 255, 255, 0.2);
        margin-top: 30px;
    }
    
    /* Contenedor Principal */
    .reglamento-container {
        background-color: #f5f5f5;
        color: #333;
        line-height: 1.6;
        padding: 40px 20px;
        max-width: 1000px;
        margin: 0 auto;
        min-height: 60vh;
    }
    
    /* Tarjeta de Reglamento */
    .reglamento-card {
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        padding: 40px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
        margin-bottom: 40px;
    }
    
    .reglamento-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }
    
    .reglamento-title {
        color: var(--primary-color);
        font-size: 2.5rem;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 3px solid var(--primary-color);
    }
    
    .reglamento-description {
        font-size: 1.2rem;
        color: var(--light-text);
        margin-bottom: 40px;
        line-height: 1.8;
    }
    
    /* Botón de Descarga */
    .download-btn {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
        color: white;
        border: none;
        padding: 18px 40px;
        font-size: 1.3rem;
        font-weight: 600;
        border-radius: 12px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 300px;
        box-shadow: 0 6px 20px rgba(35, 163, 42, 0.3);
    }
    
    .download-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(35, 163, 42, 0.4);
        color: white;
    }
    
    .download-btn i {
        font-size: 1.8rem;
        margin-right: 15px;
    }
    
    /* Información Adicional */
    .info-card {
        background-color: #fff8e1;
        border-left: 4px solid #ffc107;
        padding: 25px;
        border-radius: 8px;
        margin-top: 30px;
        display: flex;
        align-items: center;
    }
    
    .info-card i {
        color: #ff9800;
        font-size: 2rem;
        margin-right: 20px;
    }
    
    .info-card h5 {
        color: #856404;
        margin-bottom: 10px;
    }
    
    .info-card p {
        color: #856404;
        margin-bottom: 0;
        font-size: 1.1rem;
    }
    
    /* Sección de Importancia */
    .importance-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 40px 0;
        margin-top: 40px;
    }
    
    .importance-content {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .importance-title {
        color: var(--primary-color);
        font-size: 2rem;
        margin-bottom: 25px;
        text-align: center;
    }
    
    .importance-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
        padding: 15px;
        border-radius: 8px;
        background-color: #f9f9f9;
        transition: transform 0.3s ease;
    }
    
    .importance-item:hover {
        transform: translateX(5px);
        background-color: #f0f0f0;
    }
    
    .importance-item i {
        color: var(--primary-color);
        font-size: 1.5rem;
        margin-right: 15px;
        margin-top: 5px;
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
            font-size: 6rem;
        }
        
        .reglamento-container {
            padding: 30px 15px;
        }
        
        .reglamento-card {
            padding: 30px 20px;
        }
        
        .reglamento-title {
            font-size: 2rem;
        }
        
        .download-btn {
            min-width: 250px;
            padding: 15px 30px;
            font-size: 1.2rem;
        }
        
        .info-card {
            padding: 20px;
        }
        
        .importance-content {
            padding: 30px 20px;
        }
    }
    
    @media (max-width: 576px) {
        .hero-title {
            font-size: 2rem;
        }
        
        .hero-badge .badge {
            display: block;
            margin: 10px auto;
            width: 80%;
        }
        
        .reglamento-title {
            font-size: 1.8rem;
        }
        
        .reglamento-description {
            font-size: 1.1rem;
        }
        
        .download-btn {
            min-width: 100%;
            font-size: 1.1rem;
        }
        
        .importance-title {
            font-size: 1.7rem;
        }
        
        .importance-item {
            flex-direction: column;
            text-align: center;
        }
        
        .importance-item i {
            margin-right: 0;
            margin-bottom: 10px;
        }
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="reglamento-hero">
    <div class="container">
        <h1 class="hero-title">REGLAMENTO INTERNO</h1>
        <p class="hero-subtitle">Normativas y disposiciones para el año académico 2026</p>
        <div class="hero-badge">
            <span class="badge bg-primary">Actualizado 2026</span>
            <span class="badge bg-success">Documento Oficial</span>
        </div>
        <div class="hero-icon">
            <i class="bi bi-journal-text"></i>
        </div>
    </div>
</section>

<!-- Contenido Principal -->
<section class="section-body">
    <div class="reglamento-container">
        <div class="reglamento-card">
            <h2 class="reglamento-title">Reglamento Interno 2026</h2>
            
            <p class="reglamento-description">
                El presente documento establece las normas, derechos, deberes y procedimientos que regulan 
                la convivencia y el funcionamiento de nuestra institución educativa. 
                Es de lectura obligatoria para todos los miembros de la comunidad educativa.
            </p>
            
            <div class="text-center">
                <a href="{{ asset('files/reglamento_interno/REGLAMENTO-INTERNO-nuevo-2026.pdf') }}" 
                   target="_blank" 
                   class="download-btn"
                   download="REGLAMENTO_INTERNO_2026_Colegio_Cooperativo_Cesar_Vallejo.pdf">
                    <i class="bi bi-cloud-download-fill"></i>
                    DESCARGAR REGLAMENTO COMPLETO
                </a>
                
                <div class="file-info mt-4">
                    <p class="text-muted">
                        <i class="bi bi-file-earmark-pdf text-danger"></i>
                        Formato: PDF • Tamaño: Aprox. 2.4 MB • Páginas: 77
                    </p>
                </div>
            </div>
            
            <div class="info-card">
                <i class="bi bi-exclamation-triangle-fill"></i>
                <div>
                    <h5>Nota Importante</h5>
                    <p>
                        Este documento contiene información actualizada para el año académico 2026. 
                        Se recomienda guardar una copia en su dispositivo e imprimir para su consulta permanente.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Importancia -->
<section class="importance-section">
    <div class="container">
        <div class="importance-content">
            <h3 class="importance-title">¿Por qué es importante el Reglamento Interno?</h3>
            
            <div class="importance-item">
                <i class="bi bi-check-circle-fill"></i>
                <div>
                    <h5>Marco Normativo</h5>
                    <p>Establece las normas que regulan la convivencia escolar y el funcionamiento institucional.</p>
                </div>
            </div>
            
            <div class="importance-item">
                <i class="bi bi-shield-check"></i>
                <div>
                    <h5>Seguridad Jurídica</h5>
                    <p>Proporciona seguridad jurídica tanto para estudiantes como para padres de familia y personal docente.</p>
                </div>
            </div>
            
            <div class="importance-item">
                <i class="bi bi-person-check"></i>
                <div>
                    <h5>Derechos y Deberes</h5>
                    <p>Define claramente los derechos y obligaciones de todos los miembros de la comunidad educativa.</p>
                </div>
            </div>
            
            <div class="importance-item">
                <i class="bi bi-graph-up"></i>
                <div>
                    <h5>Procedimientos Claros</h5>
                    <p>Establece procedimientos claros para situaciones académicas, disciplinarias y administrativas.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Llamado a la Acción -->
<section class="section-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="cta-content p-5 rounded" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 15px;">
                    <h3 class="mb-3" style="color: var(--primary-color);">¿Tienes dudas sobre el reglamento?</h3>
                    <p class="mb-4" style="color: var(--light-text); font-size: 1.1rem;">
                        Si necesitas más información o aclaraciones sobre alguna disposición del reglamento, 
                        no dudes en contactarte con nuestra oficina de administración.
                    </p>
                    <div class="cta-buttons">
                        <a href="{{ route('inicio') }}" class="btn btn-secondary btn-lg me-3">
                            <i class="bi bi-house me-2"></i> Volver al Inicio
                        </a>
                        <a href="{{ route('contacto') ?? '#' }}" class="btn btn-primary btn-lg">
                            <i class="bi bi-telephone me-2"></i> Contactar Oficina
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animación de entrada para la tarjeta principal
        const reglamentoCard = document.querySelector('.reglamento-card');
        reglamentoCard.style.opacity = '0';
        reglamentoCard.style.transform = 'translateY(30px)';
        
        setTimeout(() => {
            reglamentoCard.style.transition = 'all 0.8s ease';
            reglamentoCard.style.opacity = '1';
            reglamentoCard.style.transform = 'translateY(0)';
        }, 300);
        
        // Animación para elementos de importancia
        const importanceItems = document.querySelectorAll('.importance-item');
        importanceItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateX(-20px)';
            
            setTimeout(() => {
                item.style.transition = 'all 0.5s ease';
                item.style.opacity = '1';
                item.style.transform = 'translateX(0)';
            }, 500 + (index * 100));
        });
        
        // Confirmación de descarga
        const downloadBtn = document.querySelector('.download-btn');
        downloadBtn.addEventListener('click', function() {
            // Registro de descarga (puedes enviar esto a Google Analytics o tu backend)
            console.log('Descargando Reglamento Interno 2026');
            
            // Opcional: Mostrar mensaje de confirmación
            setTimeout(() => {
                alert('Descarga iniciada. Por favor, revise la carpeta de descargas de su dispositivo.');
            }, 1000);
        });
        
        // Actualizar fecha automáticamente
        function actualizarFecha() {
            const meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", 
                          "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
            const fechaActual = new Date();
            const fechaString = `${fechaActual.getDate()} de ${meses[fechaActual.getMonth()]} de ${fechaActual.getFullYear()}`;
            
            // Puedes mostrar esta fecha en algún lugar si lo deseas
            console.log(`Documento actualizado al: ${fechaString}`);
        }
        
        actualizarFecha();
    });
</script>
@endpush