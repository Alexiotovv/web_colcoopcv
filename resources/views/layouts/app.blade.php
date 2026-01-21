<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Colegio Cooperativo César Vallejo')</title>
    <!-- Bootstrap 5 CSS -->
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #23a32a;
            --primary-dark: #1b3e5e;
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
            /* font-family: 'Open Sans', sans-serif; */
            color: var(--text-color);
            padding-top: 76px; /* Para compensar el navbar fijo */
            font-size: 1.05rem; /* Aumentado de ~16px a ~16.8px */
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }
        
        /* Tamaños normales para toda la página */
        h1 {
            font-size: 2.2rem; /* Aumentado de 2rem */
        }

        h2 {
            font-size: 1.9rem; /* Aumentado de 1.75rem */
        }

        h3 {
            font-size: 1.6rem; /* Aumentado de 1.5rem */
        }

        h4 {
            font-size: 1.3rem; /* Aumentado de 1.25rem */
        }
        
        /* Navbar Styles */
        .nav-item.active .nav-link {
            background-color: rgba(255, 255, 255, 0.2) !important;
        }

        .navbar {
            background-color: var(--primary-color) !important;
            box-shadow: var(--shadow);
            padding: 0.8rem 0;
            transition: all 0.3s ease;
            min-height: 100px;
        }

        .nav-link {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            color: var(--white) !important;
            margin: 0 5px;
            position: relative;
            transition: all 0.3s ease;
            padding: 15px 20px !important; /* Aumentado de 10px 15px */
            border-radius: 5px;
        }

        .navbar-brand {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            color: var(--white) !important;
            font-size: 1.5rem;
        }

        .navbar-brand img {
            height: 70px;
            margin-right: 15px;
        }
        
        .nav-link:hover {
            color: var(--primary-color) !important;
            background-color: var(--white) !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }
        
        .nav-link::after {
            display: none;
        }
        
        .navbar-toggler {
            border-color: var(--primary-color);
        }
        
        .navbar-toggler:focus {
            box-shadow: 0 0 0 2px rgba(46, 125, 50, 0.25);
        }
        
        /* Carousel Styles */
        .carousel-item {
            height: 900px;
            background-size: cover;
            background-position: center;
        }
        
        .carousel-caption {
            bottom: 100px;
            text-align: left;
            max-width: 600px;
            left: 10%;
            right: auto;
            padding: 0;
            background-color: transparent !important;
            border-radius: 0;
            box-shadow: none !important;
        }

        /* Tamaños ESPECIALES solo para el carousel - sobrescriben los generales */
        .carousel-caption h2,
        .carousel-caption h3 {
            color: var(--white) !important;
            font-size: 3.5rem !important; /* Este tamaño SOLO aplica al carousel */
            margin-bottom: 20px;
            opacity: 0;
            animation: fadeInUp 1s forwards;
            animation-delay: 0.3s;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8), 
                        0 0 20px rgba(0, 0, 0, 0.5);
            font-weight: 700;
            line-height: 1.2;
            position: relative;
            display: inline-block;
            padding: 5px 10px;
        }

        .carousel-caption p {
            color: var(--white) !important;
            font-size: 1.5rem !important;
            margin-bottom: 35px;
            opacity: 0;
            animation: fadeInUp 1s forwards;
            animation-delay: 0.6s;
            text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.8),
                        0 0 15px rgba(0, 0, 0, 0.5);
            line-height: 1.6;
            position: relative;
            display: inline-block;
            padding: 5px 10px;
        }

        .carousel-caption h2::after,
        .carousel-caption h3::after,
        .carousel-caption p::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to right, 
                rgba(0, 0, 0, 0.3) 0%, 
                rgba(0, 0, 0, 0.2) 50%, 
                rgba(0, 0, 0, 0.3) 100%);
            z-index: -1;
            border-radius: 4px;
        }
        
        /* Botón más grande */
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 15px 40px !important;
            font-weight: 600;
            transition: all 0.3s ease;
            opacity: 0;
            animation: fadeInUp 1s forwards;
            animation-delay: 0.9s;
            font-size: 1.2rem !important;
            border-radius: 8px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(46, 125, 50, 0.4);
        }

        .btn-primary i {
            font-size: 1.4rem !important;
            margin-right: 10px;
        }
        
        /* Animaciones */
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
        .carousel-item.active .carousel-caption h3,
        .carousel-item.active .carousel-caption p,
        .carousel-item.active .carousel-caption .btn-primary {
            opacity: 0;
        }
        
        /* Secciones generales */
        .section .container {
            max-width: 60% !important; /* 90% del ancho disponible */
            padding-left: 20px;
            padding-right: 20px;
        }

        .section-body .container-body {
            max-width: 90% !important; /* 90% del ancho disponible */
            padding-left: 20px;
            padding-right: 20px;
            justify-self: anchor-center;
        }
        
        .section-title {
            color: var(--primary-color);
            margin-bottom: 20px;
            text-align: center;
            position: relative;
            padding-bottom: 15px;
            font-size: 2.9rem; /* Aumentado de 2rem */
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
            max-width: 1200px;
            margin: 0 auto 50px;
            color: var(--light-text);
            font-size: 1.4rem;
        }
        
        /* Cards de la sección 1 */
        .resource-card {
            border: none;
            border-radius: 12px; /* Más redondeado */
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
            min-height: 300px; /* Altura mínima */
        }
        
        .resource-card:hover {
            transform: translateY(-12px); /* Más elevación */
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        
        .resource-card img {
            height: 240px; /* Aumentado de 180px */
            object-fit: cover;
            width: 100%;
        }
        
        /* Card body más grande */
        .resource-card .card-body {
            padding: 25px; /* Aumentado de 20px */
            text-align: center;
            min-height: 120px; /* Altura mínima para el cuerpo */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        /* Títulos más grandes */
        .resource-card .card-title {
            color: var(--primary-color);
            font-weight: 600;
            margin-top: 10px;
            font-size: 1.3rem !important; /* Aumentado de 1.2rem */
            line-height: 1.4;
        }
        
        /* Sección 2 - Niveles Educativos */
        .level-card {
            border-radius: 15px; /* Más redondeado */
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            height: 100%;
            min-height: 500px; /* Altura mínima */
        }
        
        .level-card:hover {
            transform: translateY(-15px); /* Más elevación */
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        
        .level-card img {
            height: 300px; /* Aumentado de 250px */
            object-fit: cover;
            width: 100%;
        }

        .level-card .card-body {
            padding: 35px; /* Aumentado de 30px */
            background-color: var(--white);
            min-height: 300px; /* Altura mínima para el cuerpo */
        }

        .level-card .card-title {
            color: var(--primary-color);
            font-size: 2.5rem; /* Aumentado de 1.9rem */
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .level-card .card-text {
            font-size: 1.4rem; /* Aumentado de 1.05rem */
            line-height: 1.6;
            margin-bottom: 20px;
            text-align: justify;
        }

        /* Listas dentro de los cards de niveles */
        .level-card ul li {
            font-size: 1.1rem;
            margin-bottom: 12px;
            line-height: 1.5;
        }

        .level-card ul li i {
            font-size: 1.1rem; /* Iconos más grandes */
            margin-right: 12px;
        }
        
        /* Footer */
        .footer {
            background-color: #252724;
            color: #ccc;
            padding: 60px 0 30px;
            font-size: 1.1rem;
        }
        
        .footer-logo {
            max-height: 80px;
            margin-bottom: 20px;
        }
        
        .footer h5 {
            color: var(--white);
            margin-bottom: 25px;
            font-size: 1.25rem;
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
            font-size: 1.05rem;
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
        
        /* Responsive adjustments - CORREGIDO */
        @media (max-width: 992px) {
            .carousel-item {
                height: 800px;
            }
            
            .carousel-caption {
                bottom: 50px;
                left: 5%;
                right: 5%;
                max-width: 90%;
            }
            
            /* Solo tamaño del carousel - NO afecta h2/h3 generales */
            .carousel-caption h2,
            .carousel-caption h3 {
                font-size: 2.8rem !important;
            }
            
            .carousel-caption p {
                font-size: 1.3rem !important;
            }
            
            .btn-primary {
                padding: 12px 35px !important;
                font-size: 1.1rem !important;
            }
        }
        
        @media (max-width: 768px) {
            body {
                padding-top: 36px;
                /* width: 500px; */
                /* justify-self: center; */
            }
            
            .carousel-item {
                height: calc(400px - 70px);
            }
            
            .carousel-caption {
                bottom: 60px;
                left: 5%;
                right: 5%;
                max-width: 90%;
                text-align: center;
            }
            
            /* Solo tamaño del carousel */
            .carousel-caption h2,
            .carousel-caption h3 {
                font-size: 2.2rem !important;
                text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.9);
            }
            
            .carousel-caption p {
                font-size: 1.1rem !important;
                text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.9);
            }
            
            .btn-primary {
                padding: 10px 30px !important;
                font-size: 1rem !important;
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
            
            /* Tamaños responsivos para h2 y h3 generales (opcional) */
            h2 {
                font-size: 1.7rem;
            }
            
            h3 {
                font-size: 1.4rem;
            }
            
            .section-title {
                font-size: 1.9rem;
            }
            #mainCarousel {
                margin-top: 70px; /* Altura del navbar en móviles */
            }
        }
        
        @media (max-width: 576px) {

            /* Cambia el color del ícono del menú hamburguesa */
            .navbar-toggler {
                border-color: var(--white);
            }

            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
            }

            .navbar-brand {
                font-size: 1.2rem;
            }
            
            .carousel-item {
                height: 350px;
            }
            
            .carousel-caption {
                bottom: 40px;
            }
            
            /* Solo tamaño del carousel */
            .carousel-caption h2,
            .carousel-caption h3 {
                font-size: 1.8rem !important;
            }
            
            .carousel-caption p {
                font-size: 1rem !important;
                margin-bottom: 25px;
            }
            
            .btn-primary {
                padding: 8px 25px !important;
                font-size: 0.9rem !important;
            }
            
            /* Tamaños responsivos para h2 y h3 generales (opcional) */
            h2 {
                font-size: 1.5rem;
            }
            
            h3 {
                font-size: 1.3rem;
            }
            
            .section-title {
                font-size: 1.7rem;
            }
            
            .section-description {
                font-size: 1rem;
            }
        }

        /* ============================================
        SECCIÓN SIMPLIFICADA - SOLO IMAGEN, TÍTULO Y TEXTO
        ============================================ */

        .feature-section {
            background: #d6d4d4;
            padding: 100px 0;
            position: relative;
        }

        /* Contenedor de imagen */
        .feature-image-wrapper {
            position: relative;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Imagen limpia y ajustada */
        .feature-img {
            width: 100%;
            max-width: 610px;
            height: auto;
            border-radius: 8px;
            object-fit: contain;
            position: relative;
            z-index: 2;
            transform: translateX(-100px);
            opacity: 0;
            transition: all 1s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Contenedor del contenido */
        .feature-content-wrapper {
            padding-left: 60px;
            text-align: justify;
        }

        /* Animaciones de entrada desde la derecha */
        .slide-in-right {
            transform: translateX(100px);
            opacity: 0;
            transition: all 0.8s ease 0.1s;
        }

        .slide-in-right-delay {
            transform: translateX(100px);
            opacity: 0;
            transition: all 0.8s ease 0.2s;
        }

        .slide-in-right-delay-2 {
            transform: translateX(100px);
            opacity: 0;
            transition: all 0.8s ease 0.3s;
        }

        /* Cuando la sección es visible */
        .feature-section.visible .feature-img,
        .feature-section.visible .slide-in-right,
        .feature-section.visible .slide-in-right-delay,
        .feature-section.visible .slide-in-right-delay-2 {
            transform: translateX(0);
            opacity: 1;
        }

        /* Estilos para el contenido */
        .feature-main-title {
            color: var(--primary-color);
            font-size: 2.9rem;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 15px;
        }

        .title-underline {
            width: 80px;
            height: 3px;
            background: var(--primary-color);
            border-radius: 2px;
            margin-bottom: 30px;
        }

        .feature-text p {
            font-size: 1.4rem;
            line-height: 1.8;
            color: var(--text-color);
            margin-bottom: 20px;
        }

        .feature-text strong {
            color: var(--primary-color);
            font-weight: 600;
        }

        /* Efecto hover sutil en la imagen */
        .feature-img:hover {
            transform: scale(1.01);
            transition: transform 0.3s ease;
        }

        /* Responsive */
        @media (max-width: 1200px) {
            .feature-img {
                max-width: 400px;
            }
            
            .feature-content-wrapper {
                padding-left: 50px;
                text-align: justify;
            }
            
            .feature-main-title {
                font-size: 2.3rem;
            }
        }

        @media (max-width: 992px) {
            .feature-section {
                padding: 80px 0;
            }
            
            .feature-image-wrapper {
                margin-bottom: 50px;
            }
            
            .feature-img {
                max-width: 350px;
                transform: translateX(-50px);
            }
            
            .feature-content-wrapper {
                padding-left: 0;
                text-align: center;
                text-align: justify;
            }
            
            .title-underline {
                margin-left: auto;
                margin-right: auto;
            }
            
            .feature-main-title {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 768px) {
            .feature-section {
                padding: 60px 0;
            }
            
            .feature-img {
                max-width: 300px;
            }
            
            .feature-main-title {
                font-size: 2rem;
            }
            
            .feature-text p {
                font-size: 1.05rem;
            }
            
        }

        @media (max-width: 576px) {
            .feature-img {
                max-width: 280px;
            }
            
            .feature-main-title {
                font-size: 1.8rem;
            }
            
            .feature-text p {
                font-size: 1rem;    
                text-align: justify;
            }
        }

        /* Para tablets (768px - 992px) */
        @media (max-width: 992px) {
            .level-card {
                min-height: 400px; /* Reducido de 500px */
            }
            
            .level-card img {
                height: 200px; /* Reducido de 300px */
            }
            
            .level-card .card-body {
                padding: 25px; /* Reducido de 35px */
                min-height: 200px; /* Reducido de 300px */
            }
            
            .level-card .card-title {
                font-size: 2rem; /* Reducido de 2.7rem */
                margin-bottom: 15px;
            }
            
            .level-card .card-text {
                font-size: 1.2rem; /* Reducido de 1.5rem */
                text-align: justify;
            }
            
            .level-card ul li {
                font-size: 1rem; /* Reducido de 1.2rem */
            }
        }

        /* Para tablets pequeñas (576px - 768px) */
        @media (max-width: 768px) {
            

            .level-card {
                min-height: 350px;
                margin-bottom: 30px;
            }
            
            .level-card img {
                height: 180px;
            }
            
            .level-card .card-body {
                padding: 20px;
                min-height: 170px;
            }
            
            .level-card .card-title {
                font-size: 1.7rem;
                margin-bottom: 12px;
            }
            
            .level-card .card-text {
                font-size: 1.1rem;
                line-height: 1.5;
                margin-bottom: 15px;
                text-align: justify;
            }
            
            .level-card ul li {
                font-size: 0.95rem;
                margin-bottom: 8px;
                line-height: 1.4;
            }
            
            .level-card ul li i {
                font-size: 0.9rem;
                margin-right: 8px;
            }
            
            /* Asegurar que en móviles los cards ocupen todo el ancho */
            .section .row > [class*="col-"] {
                width: 100%;
                max-width: 500px;
                margin-left: auto;
                margin-right: auto;
            }
        }

        /* Para móviles pequeños (menos de 576px) */
        @media (max-width: 576px) {
            .body{
                padding-top: 35px;
            }
            .level-card {
                min-height: 300px;
                margin-bottom: 25px;
                border-radius: 10px; /* Más pequeño */
            }
            
            .level-card img {
                height: 150px;
            }
            
            .level-card .card-body {
                padding: 15px;
                min-height: 150px;
            }
            
            .level-card .card-title {
                font-size: 1.5rem;
                margin-bottom: 10px;
            }
            
            .level-card .card-text {
                font-size: 1rem;
                line-height: 1.4;
                margin-bottom: 10px;
                text-align: justify;
            }
            
            .level-card ul {
                padding-left: 15px;
            }
            
            .level-card ul li {
                font-size: 0.9rem;
                margin-bottom: 6px;
            }
            
            .level-card ul li i {
                font-size: 0.8rem;
                margin-right: 6px;
            }
            
            /* Eliminar el efecto hover en móviles para mejor rendimiento */
            .level-card:hover {
                transform: translateY(0);
                box-shadow: var(--shadow);
            }
        }

        .card-title a,
        .card-title a:link,
        .card-title a:visited,
        .card-title a:hover,
        .card-title a:active {
            color: inherit !important;
            text-decoration: none !important;
        }

        .card-title a:hover {
            color: var(--primary-dark) !important;
            text-decoration: underline !important;
        }
        
        /* hover a los cards*/
        .card-link-wrapper {
            display: block;
            text-decoration: none !important;
            color: inherit !important;
            cursor: pointer;
            border-radius: 12px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-link-wrapper:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }

        .card-link-wrapper .resource-card {
            margin: 0;
            border: none;
            transition: all 0.3s ease;
            height: 100%;
        }

        .card-link-wrapper:hover .resource-card {
            border: 2px solid var(--primary-color);
        }

        .card-link-wrapper .card-title {
            color: var(--primary-color) !important;
            text-decoration: none !important;
            transition: color 0.3s ease;
        }

        .card-link-wrapper:hover .card-title {
            color: var(--primary-dark) !important;
        }

        /* Manito en todos los elementos del card */
        .card-link-wrapper,
        .card-link-wrapper * {
            cursor: pointer !important;
        }

        .navbar-brand-text {
            display: inline-block;
            vertical-align: middle;
        }

        /* Ocultar texto del navbar-brand en móviles */
        @media (max-width: 768px) {
            .navbar-brand-text {
                display: none !important;
            }
            
            .navbar-brand {
                margin-right: 0; /* Opcional: reducir espacio */
            }
        }
        
    </style>
    @stack('styles')
</head>
<body>
    @include('components.navbar')
    
    @yield('content')

    @include('components.footer')
    
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
                const captions = nextSlide.querySelectorAll('.carousel-caption h2, .carousel-caption h3, .carousel-caption p, .carousel-caption .btn-primary');
                
                captions.forEach(caption => {
                    caption.style.animation = 'none';
                    setTimeout(() => {
                        caption.style.animation = 'fadeInUp 1s forwards';
                    }, 10);
                });
            });
        });
    </script>
    
    @stack('scripts')
</body>
</html>