<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio Cooperativo César Vallejo</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2e7d32;
            --primary-dark: #1b5e20;
            --primary-light: #4caf50;
            --secondary-color: #f5f5f5;
            --text-color: #333;
            --light-text: #666;
            --white: #ffffff;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Open Sans', sans-serif;
            color: var(--text-color);
            padding-top: 76px; /* Para compensar el navbar fijo */
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }
        
        /* Navbar Styles */
        .navbar {
            background-color: var(--white);
            box-shadow: var(--shadow);
            padding: 0.8rem 0;
            transition: all 0.3s ease;
        }
        
        .navbar-brand {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: var(--primary-color) !important;
            font-size: 1.5rem;
        }
        
        .navbar-brand img {
            height: 50px;
            margin-right: 10px;
        }
        
        .nav-link {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            color: var(--text-color) !important;
            margin: 0 10px;
            position: relative;
            transition: color 0.3s ease;
        }
        
        .nav-link:hover {
            color: var(--primary-color) !important;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .navbar-toggler {
            border-color: var(--primary-color);
        }
        
        .navbar-toggler:focus {
            box-shadow: 0 0 0 2px rgba(46, 125, 50, 0.25);
        }
        
        /* Carousel Styles */
        .carousel-item {
            height: 600px;
            background-size: cover;
            background-position: center;
        }
        
        .carousel-caption {
            bottom: 100px;
            text-align: left;
            max-width: 600px;
            left: 10%;
            right: auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            box-shadow: var(--shadow);
        }
        
        .carousel-caption h2 {
            color: var(--primary-color);
            font-size: 2.5rem;
            margin-bottom: 15px;
            opacity: 0;
            animation: fadeInUp 1s forwards;
            animation-delay: 0.3s;
        }
        
        .carousel-caption p {
            color: var(--light-text);
            font-size: 1.1rem;
            margin-bottom: 25px;
            opacity: 0;
            animation: fadeInUp 1s forwards;
            animation-delay: 0.6s;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            opacity: 0;
            animation: fadeInUp 1s forwards;
            animation-delay: 0.9s;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(46, 125, 50, 0.3);
        }
        
        /* Animaciones para el texto del carousel */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .carousel-item.active .carousel-caption h2,
        .carousel-item.active .carousel-caption p,
        .carousel-item.active .carousel-caption .btn-primary {
            opacity: 0;
        }
        
        /* Secciones generales */
        .section {
            padding: 80px 0;
        }
        
        .section-title {
            color: var(--primary-color);
            margin-bottom: 20px;
            text-align: center;
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--primary-color);
        }
        
        .section-description {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 50px;
            color: var(--light-text);
            font-size: 1.1rem;
        }
        
        /* Cards de la sección 1 */
        .resource-card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
        }
        
        .resource-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .resource-card img {
            height: 180px;
            object-fit: cover;
            width: 100%;
        }
        
        .resource-card .card-body {
            padding: 20px;
            text-align: center;
        }
        
        .resource-card .card-title {
            color: var(--primary-color);
            font-weight: 600;
            margin-top: 10px;
        }
        
        /* Sección 2 - Niveles Educativos */
        .level-card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .level-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .level-card img {
            height: 250px;
            object-fit: cover;
            width: 100%;
        }
        
        .level-card .card-body {
            padding: 30px;
            background-color: var(--white);
        }
        
        .level-card .card-title {
            color: var(--primary-color);
            font-size: 1.8rem;
            margin-bottom: 15px;
        }
        
        /* Footer */
        .footer {
            background-color: #222;
            color: #ccc;
            padding: 60px 0 30px;
        }
        
        .footer-logo {
            max-height: 80px;
            margin-bottom: 20px;
        }
        
        .footer h5 {
            color: var(--white);
            margin-bottom: 25px;
            font-size: 1.2rem;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer h5::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--primary-color);
        }
        
        .footer ul {
            list-style: none;
            padding-left: 0;
        }
        
        .footer ul li {
            margin-bottom: 10px;
        }
        
        .footer ul li a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer ul li a:hover {
            color: var(--primary-light);
        }
        
        .footer-contact i {
            color: var(--primary-light);
            width: 20px;
            margin-right: 10px;
        }
        
        .footer-bottom {
            border-top: 1px solid #444;
            margin-top: 40px;
            padding-top: 20px;
            text-align: center;
            color: #999;
            font-size: 0.9rem;
        }
        
        .reclamo-icon {
            color: var(--primary-light);
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .carousel-item {
                height: 500px;
            }
            
            .carousel-caption {
                bottom: 50px;
                left: 5%;
                right: 5%;
                max-width: 90%;
            }
            
            .carousel-caption h2 {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 768px) {
            body {
                padding-top: 70px;
            }
            
            .carousel-item {
                height: 400px;
            }
            
            .carousel-caption {
                bottom: 30px;
                padding: 20px;
            }
            
            .carousel-caption h2 {
                font-size: 1.5rem;
            }
            
            .section {
                padding: 60px 0;
            }
            
            .footer {
                padding: 40px 0 20px;
            }
            
            .footer-col {
                margin-bottom: 30px;
            }
        }
        
        @media (max-width: 576px) {
            .navbar-brand {
                font-size: 1.2rem;
            }
            
            .carousel-item {
                height: 350px;
            }
            
            .carousel-caption {
                bottom: 20px;
                padding: 15px;
            }
            
            .carousel-caption h2 {
                font-size: 1.3rem;
                margin-bottom: 10px;
            }
            
            .carousel-caption p {
                font-size: 0.9rem;
                margin-bottom: 15px;
            }
            
            .btn-primary {
                padding: 8px 20px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('inicio') }}">
                <!-- Logo placeholder - reemplazar con logo real -->
                <img src="https://cdn-icons-png.flaticon.com/512/2784/2784449.png" alt="Logo Colegio Cooperativo César Vallejo">
                Colegio Cooperativo César Vallejo
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admision') }}">Admisión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Carousel / Slider -->
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
                <div class="carousel-caption">
                    <h2>Excelencia Educativa Integral</h2>
                    <p>Formamos líderes con valores, preparados para los retos del futuro. Nuestro modelo educativo combina innovación pedagógica con formación en valores.</p>
                    <a href="{{ route('aula_virtual') }}" class="btn btn-primary">
                        <i class="bi bi-laptop"></i> Aula Virtual
                    </a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1524178234883-043d5c3f3cf4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
                <div class="carousel-caption">
                    <h2>Inscripciones Abiertas 2026</h2>
                    <p>Forma parte de nuestra comunidad educativa. Ofrecemos una educación de calidad con enfoque cooperativo y desarrollo integral del estudiante.</p>
                    <a href="{{ route('admision') }}" class="btn btn-primary">
                        <i class="bi bi-pencil-square"></i> Admisión 2026
                    </a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <!-- Sección 1: Recursos -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Recursos y Documentos</h2>
            <p class="section-description">Accede a toda la información y documentos importantes para el ciclo escolar 2026. Todo en un solo lugar para tu comodidad.</p>
            
            <div class="row">
                <!-- Fila 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card resource-card">
                        <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Admisión">
                        <div class="card-body">
                            <h5 class="card-title">Admisión 2026</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card resource-card">
                        <img src="https://images.unsplash.com/photo-1586075010923-2dd4570fb338?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Contrato">
                        <div class="card-body">
                            <h5 class="card-title">Contrato de Servicios 2026</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card resource-card">
                        <img src="https://images.unsplash.com/photo-1456513080510-3449c76e4cd6?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Temarios">
                        <div class="card-body">
                            <h5 class="card-title">Temarios 2026</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card resource-card">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Lista de Útiles">
                        <div class="card-body">
                            <h5 class="card-title">Lista de Útiles 2026</h5>
                        </div>
                    </div>
                </div>
                
                <!-- Fila 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card resource-card">
                        <img src="https://images.unsplash.com/photo-1589466725882-f47191476e8c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Horarios">
                        <div class="card-body">
                            <h5 class="card-title">Horarios de Clases</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card resource-card">
                        <img src="https://images.unsplash.com/photo-1524178234883-043d5c3f3cf4?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Calendario">
                        <div class="card-body">
                            <h5 class="card-title">Calendario Académico</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card resource-card">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Reglamento">
                        <div class="card-body">
                            <h5 class="card-title">Reglamento Interno</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card resource-card">
                        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Actividades">
                        <div class="card-body">
                            <h5 class="card-title">Actividades Extracurriculares</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección 2: Niveles Educativos -->
    <section class="section" style="background-color: var(--secondary-color);">
        <div class="container">
            <h2 class="section-title">Niveles Educativos</h2>
            <p class="section-description">Ofrecemos una educación integral en dos niveles, adaptada a las necesidades de cada etapa del desarrollo estudiantil.</p>
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card level-card">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Primaria">
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
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="card-img-top" alt="Secundaria">
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

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Logo y descripción -->
                <div class="col-lg-4 col-md-6 footer-col">
                    <img src="https://cdn-icons-png.flaticon.com/512/2784/2784449.png" alt="Logo Colegio" class="footer-logo">
                    <p>Colegio Cooperativo César Vallejo - Formando líderes con valores desde 1995. Educación de calidad con enfoque cooperativo y desarrollo integral.</p>
                    <div class="mt-4">
                        <i class="bi bi-book reclamo-icon"></i>
                        <h5>Libro de Reclamaciones</h5>
                        <p>Accede a nuestro libro de reclamaciones digital para cualquier consulta o sugerencia.</p>
                        <a href="{{ route('reclamaciones') }}" class="btn btn-outline-light btn-sm">Acceder</a>
                    </div>
                </div>
                
                <!-- Comunicados Recientes -->
                <div class="col-lg-4 col-md-6 footer-col">
                    <h5>Comunicados Recientes</h5>
                    <ul>
                        <li><a href="{{ route('comunicados.detalle', 1) }}">Inicio de clases 2026 - 10 Marzo</a></li>
                        <li><a href="{{ route('comunicados.detalle', 2) }}">Proceso de matrícula extraordinaria</a></li>
                        <li><a href="{{ route('comunicados.detalle', 3) }}">Talleres de verano 2026</a></li>
                        <li><a href="{{ route('comunicados.detalle', 4) }}">Convocatoria para becas 2026</a></li>
                        <li><a href="{{ route('comunicados') }}">Ver todos los comunicados →</a></li>
                    </ul>
                </div>
                
                <!-- Datos de Contacto -->
                <div class="col-lg-4 col-md-12 footer-col">
                    <h5>Contacto</h5>
                    <div class="footer-contact">
                        <p><i class="bi bi-geo-alt"></i> Av. César Vallejo 123, Urb. Cooperativa, Lima</p>
                        <p><i class="bi bi-telephone"></i> (01) 456-7890 / 987-654-321</p>
                        <p><i class="bi bi-envelope"></i> info@colegiocesarvallejo.edu.pe</p>
                        <p><i class="bi bi-clock"></i> Lunes a Viernes: 7:30 am - 4:30 pm</p>
                    </div>
                    <div class="mt-4">
                        <h6>Síguenos en redes sociales</h6>
                        <div class="social-links mt-3">
                            <a href="#" class="text-light me-3"><i class="bi bi-facebook fs-5"></i></a>
                            <a href="#" class="text-light me-3"><i class="bi bi-instagram fs-5"></i></a>
                            <a href="#" class="text-light me-3"><i class="bi bi-twitter fs-5"></i></a>
                            <a href="#" class="text-light"><i class="bi bi-youtube fs-5"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2026 Colegio Cooperativo César Vallejo. Todos los derechos reservados.</p>
                <p class="mb-0">Desarrollado con <i class="bi bi-heart-fill text-danger"></i> para la comunidad educativa</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Script para el navbar fijo y efectos
        document.addEventListener('DOMContentLoaded', function() {
            // Efecto de navbar al hacer scroll
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('.navbar');
                if (window.scrollY > 50) {
                    navbar.style.padding = '0.5rem 0';
                    navbar.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.1)';
                } else {
                    navbar.style.padding = '0.8rem 0';
                    navbar.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.08)';
                }
            });
            
            // Efecto para las cards al pasar el mouse
            const cards = document.querySelectorAll('.resource-card, .level-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.zIndex = '10';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.zIndex = '1';
                });
            });
            
            // Animación para el texto del carousel cuando cambia de slide
            const carousel = document.getElementById('mainCarousel');
            carousel.addEventListener('slide.bs.carousel', function (e) {
                // Resetear animaciones para el slide entrante
                const nextSlide = e.relatedTarget;
                const captions = nextSlide.querySelectorAll('.carousel-caption h2, .carousel-caption p, .carousel-caption .btn-primary');
                
                captions.forEach(caption => {
                    caption.style.animation = 'none';
                    setTimeout(() => {
                        caption.style.animation = 'fadeInUp 1s forwards';
                    }, 10);
                });
            });
        });
    </script>
</body>
</html>