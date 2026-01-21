@extends('layouts.app')

@section('content')

    <!-- Carousel / Slider -->
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    
    <div class="carousel-inner">
        <!-- Slide 1 con video -->
        <div class="carousel-item active">
            <video class="d-block w-100" autoplay muted loop playsinline>
                <source src="{{ asset('carousel/video_slider.mp4') }}" type="video/mp4">
                <source src="{{ asset('carousel/video_slider.webm') }}" type="video/webm">
                <!-- Imagen de respaldo por si el video no carga -->
                <img src="{{ asset('carousel/slider1.png') }}" class="d-block w-100" alt="Excelencia Educativa Integral">
            </video>
            <div class="carousel-caption">
                <h2>Excelencia Educativa Integral</h2>
                <p>Formamos líderes con valores, preparados para los retos del futuro.</p>
                <a href="https://aulavirtual.cvallejoiquitos.com/" class="btn btn-primary">
                    <i class="bi bi-laptop"></i> Aula Virtual
                </a>
            </div>
        </div>
        
        <!-- Slide 2 con video -->
        <div class="carousel-item">
            <video class="d-block w-100" autoplay muted loop playsinline>
                <source src="{{ asset('carousel/video_slider2.mp4') }}" type="video/mp4">
                <source src="{{ asset('carousel/video_slider2.webm') }}" type="video/webm">
                <img src="{{ asset('carousel/slider2.png') }}" class="d-block w-100" alt="Inscripciones Abiertas 2026">
            </video>
            <div class="carousel-caption">
                <h2>Inscripciones Abiertas 2026</h2>
                <p>Forma parte de nuestra comunidad educativa.</p>
                <a href="{{ route('admision') }}" class="btn btn-primary">
                    <i class="bi bi-pencil-square"></i> Admisión 2026
                </a>
            </div>
        </div>
    </div>
    
    <!-- Controles del carousel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="arousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

    <!-- Sección 1: Recursos -->
    <section class="section-body">
        <div class="container-body">
            <h2 class="section-title">Accesos Rápidos</h2>
            <p class="section-description">Accede a toda la información y documentos importantes para el ciclo escolar 2026. Todo en un solo lugar para tu comodidad.</p>
            
            <div class="row">
                <!-- Fila 1 -->
                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('admision') }}" class="card-link-wrapper">
                        <div class="card resource-card">
                            <img src="{{asset('img/admision_2026.png')}}" class="card-img-top" alt="Admisión" style="object-fit: scale-down;">
                            <div class="card-body">
                                <h5 class="card-title">Admisión 2026</h5>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="{{asset('files/ContratoPrestaciónServicios2026.pdf')}}" class="card-link-wrapper">
                        <div class="card resource-card">
                            <img src="{{asset('img/contrato_ps_2026.png')}}" class="card-img-top" alt="Contrato" style="object-fit: scale-down;">
                            <div class="card-body">
                                <h5 class="card-title">Contrato de Servicios 2026</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="{{route('temarios')}}" class="card-link-wrapper">
                        <div class="card resource-card">
                            <img src="{{asset('img/temarios.png')}}" class="card-img-top" alt="Temarios" style="object-fit: scale-down;">
                            <div class="card-body">
                                <h5 class="card-title">Temarios 2026</h5>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="{{route('lista_utiles')}}" class="card-link-wrapper">
                        <div class="card resource-card">
                            <img src="{{asset('img/lista_utiles.png')}}" class="card-img-top" alt="lista_utiles" style="object-fit: scale-down;">
                            <div class="card-body">
                                <h5 class="card-title">Lista de Útiles 2026</h5>
                            </div>
                        </div>
                    </a>
                </div>
                
                <!-- Fila 2 -->
                <div class="col-lg-3 col-md-6">
                    <a href="{{route('comunicados')}}" class="card-link-wrapper">
                        <div class="card resource-card">
                            <img src="{{asset('img/comunicados.png')}}" class="card-img-top" alt="comunicados" style="object-fit: scale-down;">
                            <div class="card-body">
                                <h5 class="card-title">Comunicados</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="{{route('galerias')}}" class="card-link-wrapper">
                        <div class="card resource-card">
                            <img src="{{asset('img/galeria.png')}}" class="card-img-top" alt="Calendario" style="object-fit: scale-down;">
                            <div class="card-body">
                                <h5 class="card-title">Galería de Fotos</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card resource-card">
                        <img src="{{asset('img/reginterno.png')}}" class="card-img-top" alt="Reglamento" style="object-fit: scale-down;">
                        <div class="card-body">
                            <h5 class="card-title">Reglamento Interno</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card resource-card">
                        <img src="{{asset('img/actextracurricular.png')}}" class="card-img-top" alt="Actividades" style="object-fit: scale-down;">
                        <div class="card-body">
                            <h5 class="card-title">Actividades Extracurriculares</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección 2: Niveles Educativos -->
    <section class="section-body" style="background-color: var(--secondary-color);padding-top: 20px;">
        <div class="container-body">
            <h2 class="section-title">Niveles Educativos</h2>
            <p class="section-description">Ofrecemos una educación integral en dos niveles, adaptada a las necesidades de cada etapa del desarrollo estudiantil.</p>
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card level-card">
                        <img src="{{asset('img/nivel_primaria.png')}}" class="card-img-top" alt="Primaria">
                        <div class="card-body">
                            <h3 class="card-title">Primaria</h3>
                            <p class="card-text">Nuestro programa de primaria está diseñado para desarrollar las habilidades fundamentales de lectura, escritura, matemáticas y ciencias, mientras fomentamos valores y habilidades sociales.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i> De 1ro a 6to grado</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Método de aprendizaje activo</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Educación en valores</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Inglés desde primer grado</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card level-card">
                        <img src="{{asset('img/nivel_secundaria.png')}}" class="card-img-top" alt="Secundaria">
                        <div class="card-body">
                            <h3 class="card-title">Secundaria</h3>
                            <p class="card-text">Preparamos a los estudiantes para la educación superior y el mundo laboral, desarrollando pensamiento crítico, habilidades de investigación y competencias para el siglo XXI.</p>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i> De 1ro a 5to de secundaria</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Programa pre-universitario</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Laboratorios de ciencias y tecnología</li>
                                <li><i class="bi bi-check-circle-fill text-success me-2"></i> Orientación vocacional</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Sección 3: Nuestra Propuesta Educativa -->
    <section class="section-body feature-section" id="propuesta-educativa">
        <div class="container-body">
            <div class="row align-items-center">
                <!-- Foto vertical a la izquierda -->
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="feature-image-wrapper">
                        <img src="{{ asset('img/deporte.png') }}" 
                            alt="Propuesta Educativa - Colegio César Vallejo" 
                            class="img-fluid feature-img">
                    </div>
                </div>
                
                <!-- Contenido a la derecha -->
                <div class="col-lg-7">
                    <div class="feature-content-wrapper">
                        <!-- Título -->
                        <h2 class="feature-main-title slide-in-right">
                            Educación Integral para el Futuro
                        </h2>
                        
                        <!-- Línea decorativa -->
                        <div class="title-underline slide-in-right-delay"></div>
                        
                        <!-- Texto descriptivo -->
                        <div class="feature-text slide-in-right-delay-2">
                        <p class="mb-4">
                            En el <strong>Colegio Cooperativo César Vallejo</strong> promovemos el deporte como
                            un pilar fundamental en la formación integral de nuestros estudiantes. Creemos que
                            la actividad física fortalece no solo el cuerpo, sino también valores como la
                            disciplina, el respeto y el trabajo en equipo.
                        </p>

                        <p class="mb-4">
                            Nuestro enfoque deportivo combina entrenamiento técnico, desarrollo físico y
                            formación en valores, brindando a los estudiantes espacios adecuados para descubrir
                            y potenciar sus habilidades deportivas bajo la orientación de docentes y entrenadores
                            calificados.
                        </p>

                        <p>
                            A través de talleres, competencias y actividades recreativas, fomentamos hábitos de
                            vida saludable y el espíritu competitivo sano, preparando a nuestros alumnos para
                            enfrentar los retos dentro y fuera del campo, con perseverancia, liderazgo y
                            compromiso.
                        </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script>
        // Animación para la sección
        function initFeatureSectionAnimation() {
            const featureSection = document.querySelector('.feature-section');
            
            if (!featureSection) return;
            
            function isElementInViewport(el) {
                const rect = el.getBoundingClientRect();
                const windowHeight = window.innerHeight || document.documentElement.clientHeight;
                
                // La sección se activa cuando el 30% superior está visible
                return (
                    rect.top <= windowHeight * 0.7 &&
                    rect.bottom >= windowHeight * 0.3
                );
            }
            
            function handleScroll() {
                if (isElementInViewport(featureSection)) {
                    featureSection.classList.add('visible');
                    window.removeEventListener('scroll', handleScroll);
                }
            }
            
            handleScroll();
            window.addEventListener('scroll', handleScroll);
        }

        // Usar Intersection Observer si está disponible
        function initFeatureSectionObserver() {
            const featureSection = document.querySelector('.feature-section');
            
            if (!featureSection) return;
            
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            featureSection.classList.add('visible');
                            observer.unobserve(featureSection);
                        }
                    });
                },
                {
                    threshold: 0.3,
                    rootMargin: '0px 0px -100px 0px'
                }
            );
            
            observer.observe(featureSection);
        }

        // Inicializar
        document.addEventListener('DOMContentLoaded', function() {
            if ('IntersectionObserver' in window) {
                initFeatureSectionObserver();
            } else {
                initFeatureSectionAnimation();
            }
        });
    </script>    
@endpush