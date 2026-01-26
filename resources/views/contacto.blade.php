@extends('layouts.app')

@section('title', 'Contacto - Colegio Cooperativo César Vallejo')

@section('content')
<!-- Hero Section -->
<section class="hero-section contacto-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="hero-title">Contáctenos</h1>
                <p class="hero-subtitle">Estamos aquí para responder sus consultas</p>
                <div class="hero-badge">
                    <span class="badge bg-primary">Atención personalizada</span>
                    <span class="badge bg-success">Respuesta rápida</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hero-image text-center">
                    <i class="bi bi-envelope-paper hero-icon"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contenido Principal -->
<section class="section-body py-5">
    <div class="container-body">
        <div class="row">
            <!-- Información de Contacto -->
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="contacto-info-card p-4 h-100">
                    <h3 class="section-title mb-4">
                        <i class="bi bi-geo-alt me-2"></i>
                        Información de Contacto
                    </h3>
                    
                    <div class="contacto-item mb-4">
                        <div class="contacto-icon">
                            <i class="bi bi-geo-fill"></i>
                        </div>
                        <div class="contacto-details">
                            <h5>Dirección</h5>
                            <p>Jirón Putumayo N°966<br>Iquitos, Loreto, Perú</p>
                        </div>
                    </div>
                    
                    <div class="contacto-item mb-4">
                        <div class="contacto-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="contacto-details">
                            <h5>Teléfono</h5>
                            <p>+51 973 891 800</p>
                            {{-- <p class="small text-muted">Lunes a Viernes: 8:00 AM - 4:00 PM</p> --}}
                        </div>
                    </div>
                    
                    {{-- <div class="contacto-item mb-4">
                        <div class="contacto-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div class="contacto-details">
                            <h5>Email</h5>
                            <p>informes@cvallejoiquitos.com</p>
                            <p>administracion@cvallejoiquitos.com</p>
                        </div>
                    </div>
                    
                    <div class="contacto-item">
                        <div class="contacto-icon">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div class="contacto-details">
                            <h5>Horario de Atención</h5>
                            <p>Lunes a Viernes: 8:00 AM - 4:00 PM</p>
                            <p>Sábados: 9:00 AM - 12:00 PM</p>
                        </div>
                    </div> --}}
                </div>
            </div>
            
            <!-- Formulario de Contacto -->
            <div class="col-lg-8">
                <div class="contacto-info-card p-4">
                    <h3 class="section-title mb-4">
                        <i class="bi bi-telephone-forward me-2"></i>
                        Cómo Contactarnos
                    </h3>
                    
                    <div class="row">
                        <!-- Canal 1: Teléfono Principal -->
                        <div class="col-md-6 mb-4">
                            <div class="canal-contacto text-center p-4 h-100">
                                <div class="canal-icon mb-3">
                                    <i class="bi bi-telephone-fill" style="font-size: 2.5rem; color: #1a4f8c;"></i>
                                </div>
                                <h4 class="canal-title">Teléfono Principal</h4>
                                <p class="canal-desc mb-3">Para consultas generales</p>
                                <div class="canal-info">
                                    <p class="fw-bold" style="font-size: 1.5rem; color: #1a4f8c;">+51 973 891 800</p>
                                    <p class="text-muted small">Lunes a Viernes: 8:00 AM - 4:00 PM</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Canal 2: Visita Personal -->
                        <div class="col-md-6 mb-4">
                            <div class="canal-contacto text-center p-4 h-100">
                                <div class="canal-icon mb-3">
                                    <i class="bi bi-building" style="font-size: 2.5rem; color: #1a4f8c;"></i>
                                </div>
                                <h4 class="canal-title">Visita Personal</h4>
                                <p class="canal-desc mb-3">Para atención directa</p>
                                <div class="canal-info">
                                    <p class="fw-bold mb-2">Horarios de atención:</p>
                                    <p class="mb-1">Lunes a Viernes: 8:00 AM - 4:00 PM</p>
                                    <p>Sábados: 9:00 AM - 12:00 PM</p>
                                    <div class="mt-3">
                                        <a href="#mapa" class="btn btn-outline-primary">
                                            <i class="bi bi-geo-alt me-2"></i> Ver Ubicación
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Canal 3: Secretaría -->
                        <div class="col-md-6 mb-4">
                            <div class="canal-contacto text-center p-4 h-100">
                                <div class="canal-icon mb-3">
                                    <i class="bi bi-clipboard-data" style="font-size: 2.5rem; color: #1a4f8c;"></i>
                                </div>
                                <h4 class="canal-title">Secretaría</h4>
                                <p class="canal-desc mb-3">Para trámites y documentación</p>
                                <div class="canal-info">
                                    <p class="fw-bold mb-2">Atención:</p>
                                    <p class="mb-1">Mismo teléfono principal</p>
                                    <p class="mb-3">Extensión para secretaría</p>
                                    <p class="small text-muted">Documentación, certificados, trámites administrativos</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Canal 4: Dirección -->
                        <div class="col-md-6 mb-4">
                            <div class="canal-contacto text-center p-4 h-100">
                                <div class="canal-icon mb-3">
                                    <i class="bi bi-person-badge" style="font-size: 2.5rem; color: #1a4f8c;"></i>
                                </div>
                                <h4 class="canal-title">Dirección</h4>
                                <p class="canal-desc mb-3">Para consultas directivas</p>
                                <div class="canal-info">
                                    <p class="fw-bold mb-2">Atención con cita previa</p>
                                    <p class="mb-3">Solicite cita a través de secretaría</p>
                                    <p class="small text-muted">Consultas estratégicas, entrevistas, temas directivos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Información adicional -->
                    {{-- <div class="alert alert-info mt-4">
                        <h5 class="alert-heading">
                            <i class="bi bi-info-circle me-2"></i>
                            Recomendaciones para contactarnos
                        </h5>
                        <p class="mb-0">
                            Para una mejor atención, le sugerimos:<br>
                            1. <strong>Para consultas generales:</strong> Llame al número principal en horario de atención<br>
                            2. <strong>Para trámites administrativos:</strong> Visítenos personalmente en secretaría<br>
                            3. <strong>Para entrevistas con dirección:</strong> Solicite cita previa<br>
                            4. <strong>Horario preferente:</strong> Mañanas de 8:00 AM a 12:00 PM
                        </p>
                    </div> --}}
                    
                    <!-- Llamada a la acción -->
                    <div class="text-center mt-4 p-3 bg-light rounded">
                        <h5 class="mb-3">¿Listo para contactarnos?</h5>
                        <div class="d-flex flex-wrap justify-content-center gap-3">
                            <a href="tel:+51973891800" class="btn btn-primary btn-lg">
                                <i class="bi bi-telephone me-2"></i> Llamar Ahora
                            </a>
                            <a href="#mapa" class="btn btn-outline-primary btn-lg">
                                <i class="bi bi-geo-alt me-2"></i> Ver Dirección
                            </a>
                        </div>
                        <p class="mt-3 small text-muted">
                            Nuestro equipo estará encantado de atenderle personalmente
                        </p>
                    </div>
                </div>
            </div>
            
            {{-- <div class="col-lg-8">
                <div class="contacto-form-card p-4">
                    <h3 class="section-title mb-4">
                        <i class="bi bi-send me-2"></i>
                        Envíenos un Mensaje
                    </h3>
                    
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="bi bi-check-circle me-2"></i>
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle me-2"></i>
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    
                    <form action="{{ route('contacto.enviar') }}" method="POST" id="contactoForm">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="nombre" class="form-label">Nombre Completo *</label>
                                <input type="text" class="form-control @error('nombre') is-invalid @enderror" 
                                       id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                                @error('nombre')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Correo Electrónico *</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                       id="email" name="email" value="{{ old('email') }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="telefono" class="form-label">Teléfono</label>
                                <input type="text" class="form-control @error('telefono') is-invalid @enderror" 
                                       id="telefono" name="telefono" value="{{ old('telefono') }}">
                                @error('telefono')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="asunto" class="form-label">Asunto *</label>
                                <input type="text" class="form-control @error('asunto') is-invalid @enderror" 
                                       id="asunto" name="asunto" value="{{ old('asunto') }}" required>
                                @error('asunto')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje *</label>
                            <textarea class="form-control @error('mensaje') is-invalid @enderror" 
                                      id="mensaje" name="mensaje" rows="6" required>{{ old('mensaje') }}</textarea>
                            <div class="form-text">Mínimo 10 caracteres</div>
                            @error('mensaje')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="copia" name="copia" value="1" {{ old('copia') ? 'checked' : '' }}>
                            <label class="form-check-label" for="copia">
                                Enviarme una copia de este mensaje
                            </label>
                        </div>
                        
                        <!-- reCAPTCHA -->
                        <div class="mb-3">
                            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                            @error('g-recaptcha-response')
                                <div class="text-danger small mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="reset" class="btn btn-outline-secondary me-2">
                                <i class="bi bi-x-circle me-1"></i> Limpiar
                            </button>
                            <button type="submit" class="btn btn-primary" id="btnEnviar">
                                <i class="bi bi-send me-1"></i> Enviar Mensaje
                            </button>
                        </div>
                    </form>
                </div>
            </div> --}}
        </div>
        
        <!-- Mapa -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="mapa-card p-4">
                    <h3 class="section-title mb-4">
                        <i class="bi bi-map me-2"></i>
                        Nuestra Ubicación
                    </h3>
                    <div class="mapa-container">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.0841461895413!2d-73.25688368524463!3d-3.743034797282834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91e9c1f9c9c9c9c9%3A0x9c9c9c9c9c9c9c9c!2sJir%C3%B3n%20Putumayo%20966%2C%20Iquitos%2016001!5e0!3m2!1ses!2spe!4v1641234567890!5m2!1ses!2spe" 
                            width="100%" 
                            height="400" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CSS específico -->
<style>
    /* Hero Section */
    .contacto-hero {
        background: linear-gradient(135deg, #2c3e50 0%, #1a4f8c 100%);
        color: white;
        padding: 100px 0 80px;
        margin-top: -20px;
    }
    
    .hero-title {
        font-size: 3rem;
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
    
    /* Cards */
    .contacto-info-card, .contacto-form-card, .mapa-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        height: 100%;
    }
    
    .section-title {
        color: #1a4f8c;
        font-weight: 700;
        font-size: 1.8rem;
        border-bottom: 3px solid #e9ecef;
        padding-bottom: 10px;
    }
    
    /* Items de contacto */
    .contacto-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 25px;
    }
    
    .contacto-icon {
        width: 50px;
        height: 50px;
        background: #f8f9fa;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        flex-shrink: 0;
    }
    
    .contacto-icon i {
        font-size: 1.2rem;
        color: #1a4f8c;
    }
    
    .contacto-details h5 {
        color: #2c3e50;
        font-weight: 600;
        margin-bottom: 5px;
        font-size: 1.1rem;
    }
    
    .contacto-details p {
        color: #495057;
        margin-bottom: 5px;
    }
    
    /* Formulario */
    .form-label {
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 8px;
    }
    
    .form-control:focus {
        border-color: #1a4f8c;
        box-shadow: 0 0 0 0.25rem rgba(26, 79, 140, 0.25);
    }
    
    /* Mapa */
    .mapa-container {
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #e9ecef;
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
        
        .contacto-item {
            flex-direction: column;
            text-align: center;
        }
        
        .contacto-icon {
            margin-right: 0;
            margin-bottom: 10px;
            align-self: center;
        }
        .contacto-info-card, .contacto-form-card, .mapa-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            height: 100%;
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
        
        .section-title {
            font-size: 1.5rem;
        }

        .contacto-info-card, .contacto-form-card, .mapa-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            height: 100%;
            justify-items: center;
        }

        /* Añade esto al estilo existente */

        .canal-contacto {
            background: #f8f9fa;
            border-radius: 10px;
            border: 1px solid #e9ecef;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .canal-contacto:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .canal-title {
            color: #1a4f8c;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .canal-desc {
            color: #6c757d;
            font-size: 0.95rem;
        }

        .canal-icon {
            width: 70px;
            height: 70px;
            background: white;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #e9ecef;
        }

        .btn-lg {
            padding: 12px 30px;
            font-size: 1.1rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .canal-contacto {
                margin-bottom: 20px;
            }
            
            .btn-lg {
                padding: 10px 20px;
                font-size: 1rem;
            }
        }
    }
</style>

<!-- JavaScript y reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('contactoForm');
        const btnEnviar = document.getElementById('btnEnviar');
        
        form.addEventListener('submit', function(e) {
            // Validación básica del formulario
            const nombre = document.getElementById('nombre').value.trim();
            const email = document.getElementById('email').value.trim();
            const asunto = document.getElementById('asunto').value.trim();
            const mensaje = document.getElementById('mensaje').value.trim();
            
            if (!nombre || !email || !asunto || !mensaje) {
                e.preventDefault();
                alert('Por favor complete todos los campos obligatorios (*)');
                return false;
            }
            
            if (mensaje.length < 10) {
                e.preventDefault();
                alert('El mensaje debe tener al menos 10 caracteres');
                return false;
            }
            
            // Deshabilitar botón para evitar múltiples envíos
            btnEnviar.disabled = true;
            btnEnviar.innerHTML = '<i class="bi bi-hourglass-split me-1"></i> Enviando...';
        });
        
        // Restaurar botón si hay errores de validación
        if (document.querySelector('.is-invalid')) {
            btnEnviar.disabled = false;
            btnEnviar.innerHTML = '<i class="bi bi-send me-1"></i> Enviar Mensaje';
        }
    });
</script>
@endsection