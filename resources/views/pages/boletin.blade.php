@extends('layouts.app')

@section('title', 'Boletín Informativo - Colegio Cooperativo César Vallejo')

@push('styles')
<style>
    /* Hero Section */
    .boletin-hero {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
        color: white;
        padding: 100px 0 60px;
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
        font-weight: 500;
    }
    
    .hero-icon {
        font-size: 8rem;
        color: rgba(255, 255, 255, 0.2);
        margin-top: 30px;
        margin-bottom: 20px;
    }
    
    /* Contenedor Principal */
    .boletin-container {
        background-color: #f5f5f5;
        color: #333;
        line-height: 1.6;
        padding: 40px 20px;
        max-width: 1200px;
        margin: 0 auto;
    }
    
    /* Filtros de Boletines */
    .filtros-section {
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        padding: 25px;
        margin-bottom: 40px;
    }
    
    .filtros-title {
        color: var(--primary-color);
        font-size: 1.8rem;
        margin-bottom: 20px;
        text-align: center;
    }
    
    .filtro-buttons {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
    }
    
    .filtro-btn {
        padding: 10px 25px;
        border: 2px solid var(--primary-color);
        background-color: white;
        color: var(--primary-color);
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    
    .filtro-btn:hover,
    .filtro-btn.active {
        background-color: var(--primary-color);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(35, 163, 42, 0.3);
    }
    
    /* Grid de Boletines */
    .boletines-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 30px;
        margin-bottom: 50px;
    }
    
    /* Tarjeta de Boletín */
    .boletin-card {
        background-color: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .boletin-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }
    
    .boletin-imagen {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-bottom: 3px solid var(--primary-color);
    }
    
    .boletin-content {
        padding: 25px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }
    
    .boletin-fecha {
        color: var(--primary-color);
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    .boletin-titulo {
        color: #333;
        font-size: 1.5rem;
        font-weight: 700;
        margin-bottom: 15px;
        line-height: 1.3;
    }
    
    .boletin-descripcion {
        color: var(--light-text);
        margin-bottom: 20px;
        flex-grow: 1;
        line-height: 1.6;
    }
    
    .boletin-categoria {
        display: inline-block;
        padding: 5px 15px;
        background-color: #e8f5e9;
        color: var(--primary-color);
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 600;
        margin-bottom: 20px;
    }
    
    .boletin-btn {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
        color: white;
        border: none;
        padding: 12px 25px;
        font-weight: 600;
        border-radius: 8px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        width: 100%;
    }
    
    .boletin-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(35, 163, 42, 0.4);
        color: white;
    }
    
    .boletin-btn i {
        margin-right: 8px;
    }
    
    /* Modal para Ver Boletín */
    .modal-boletin .modal-content {
        border-radius: 15px;
        overflow: hidden;
        border: none;
    }
    
    .modal-boletin .modal-header {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
        color: white;
        border-bottom: none;
        padding: 25px;
    }
    
    .modal-boletin .modal-title {
        font-weight: 700;
        font-size: 1.5rem;
    }
    
    .modal-boletin .modal-body {
        padding: 30px;
        max-height: 70vh;
        overflow-y: auto;
    }
    
    .modal-boletin .modal-footer {
        border-top: 1px solid #e9ecef;
        padding: 20px 30px;
    }
    
    /* Mensaje sin boletines */
    .no-boletines {
        text-align: center;
        padding: 60px 20px;
        background-color: white;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }
    
    .no-boletines-icon {
        font-size: 5rem;
        color: #ddd;
        margin-bottom: 20px;
    }
    
    .no-boletines h3 {
        color: var(--light-text);
        margin-bottom: 15px;
    }
    
    /* Estadísticas */
    .estadisticas-section {
        background-color: white;
        border-radius: 15px;
        padding: 30px;
        margin-top: 40px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }
    
    .estadisticas-title {
        color: var(--primary-color);
        font-size: 1.8rem;
        margin-bottom: 25px;
        text-align: center;
    }
    
    .estadistica-item {
        text-align: center;
        padding: 20px;
    }
    
    .estadistica-numero {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 10px;
    }
    
    .estadistica-texto {
        color: var(--light-text);
        font-size: 1.1rem;
    }
    
    /* Suscripción */
    .suscripcion-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 60px 0;
        margin-top: 40px;
    }
    
    .suscripcion-content {
        background-color: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    
    .suscripcion-title {
        color: var(--primary-color);
        font-size: 2rem;
        margin-bottom: 20px;
    }
    
    .suscripcion-text {
        color: var(--light-text);
        font-size: 1.1rem;
        margin-bottom: 30px;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .suscripcion-form {
        max-width: 500px;
        margin: 0 auto;
    }
    
    .form-control-suscripcion {
        padding: 15px 20px;
        border: 2px solid #e9ecef;
        border-radius: 10px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    
    .form-control-suscripcion:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(35, 163, 42, 0.2);
    }
    
    /* Responsive */
    @media (max-width: 992px) {
        .boletines-grid {
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
        }
        
        .estadistica-item {
            margin-bottom: 20px;
        }
    }
    
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
        
        .boletin-container {
            padding: 30px 15px;
        }
        
        .boletines-grid {
            grid-template-columns: 1fr;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .filtro-buttons {
            justify-content: center;
        }
        
        .filtro-btn {
            flex: 1;
            min-width: 150px;
            text-align: center;
        }
        
        .suscripcion-content {
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
        
        .boletin-card {
            margin-bottom: 20px;
        }
        
        .modal-boletin .modal-body {
            padding: 20px;
        }
        
        .suscripcion-form .btn {
            width: 100%;
            margin-top: 10px;
        }
    }
</style>
@endpush

@section('content')
<!-- Hero Section -->
<section class="boletin-hero">
    <div class="container">
        <h1 class="hero-title">BOLETÍN INFORMATIVO</h1>
        <p class="hero-subtitle">Mantente informado sobre las últimas noticias y actividades del colegio</p>
        <div class="hero-badge">
            <span class="badge bg-primary">Actualizaciones Mensuales</span>
            <span class="badge bg-success">Información Oficial</span>
            <span class="badge bg-warning text-dark">Comunidad Educativa</span>
        </div>
        <div class="hero-icon">
            <i class="bi bi-newspaper"></i>
        </div>
    </div>
</section>

<!-- Contenido Principal -->
<section class="section-body">
    <div class="boletin-container">
        <!-- Filtros por Categoría -->
        {{-- <div class="filtros-section">
            <h3 class="filtros-title">Filtrar por Categoría</h3>
            <div class="filtro-buttons">
                <button class="filtro-btn active" data-categoria="todos">Todos los Boletines</button>
                <button class="filtro-btn" data-categoria="academico">Académico</button>
                <button class="filtro-btn" data-categoria="eventos">Eventos</button>
                <button class="filtro-btn" data-categoria="deportes">Deportes</button>
                <button class="filtro-btn" data-categoria="cultural">Cultural</button>
                <button class="filtro-btn" data-categoria="anuncios">Anuncios</button>
            </div>
        </div> --}}

        <!-- Grid de Boletines -->
        <div id="boletines-container" class="boletines-grid">
            <!-- Boletín 1 -->
           <div class="boletin-card" data-categoria="academico">
                <img src="{{ asset('img/boletin.png') }}" alt="Boletín Informativo 2026" class="boletin-imagen">
                <div class="boletin-content">
                    <span class="boletin-fecha">Enero 2026</span>
                    <span class="boletin-categoria">Anuncios</span>
                    <h4 class="boletin-titulo">BOLETÍN INFORMATIVO 2026</h4>
                    <p class="boletin-descripcion">
                        Reciban un saludo cordial de la comunidad Educativa Vallejiana, 
                        en el presente año escolar, nuestra Institución ha elaborado 
                        y ejecutado el Plan...
                    </p>
                    <a target="_blank" 
                    href="{{ asset('files/boletines/BOLETIN-INFORMATIVO 2026.pdf') }}" 
                    class="boletin-btn">
                        <i class="bi bi-eye-fill"></i> Ver Boletín Completo
                    </a>
                </div>
            </div>

            <!-- Boletín 2 -->
            {{-- <div class="boletin-card" data-categoria="eventos">
                <img src="{{ asset('images/boletines/inauguracion-marzo.jpg') }}" alt="Inauguración Año Escolar 2026" class="boletin-imagen" onerror="this.src='https://via.placeholder.com/400x200/1a4f8c/ffffff?text=Inauguración+Año+Escolar'">
                <div class="boletin-content">
                    <span class="boletin-fecha">Marzo 2026</span>
                    <span class="boletin-categoria">Eventos</span>
                    <h4 class="boletin-titulo">Ceremonia de Inauguración del Año Escolar 2026</h4>
                    <p class="boletin-descripcion">Fotografías y momentos destacados de la emotiva ceremonia de inicio del año académico 2026...</p>
                    <a href="#boletin2" class="boletin-btn" data-bs-toggle="modal" data-bs-target="#modalBoletin2">
                        <i class="bi bi-eye-fill"></i> Ver Boletín Completo
                    </a>
                </div>
            </div> --}}

            <!-- Boletín 3 -->
            {{-- <div class="boletin-card" data-categoria="deportes">
                <img src="{{ asset('images/boletines/deportes-abril.jpg') }}" alt="Interescolar Deportivo 2026" class="boletin-imagen" onerror="this.src='https://via.placeholder.com/400x200/e63946/ffffff?text=Interescolar+Deportivo'">
                <div class="boletin-content">
                    <span class="boletin-fecha">Abril 2026</span>
                    <span class="boletin-categoria">Deportes</span>
                    <h4 class="boletin-titulo">Nuestro Colegio Campeón en Interescolar Deportivo</h4>
                    <p class="boletin-descripcion">Equipos de fútbol y vóley se coronan campeones en el torneo interescolar regional 2026...</p>
                    <a href="#boletin3" class="boletin-btn" data-bs-toggle="modal" data-bs-target="#modalBoletin3">
                        <i class="bi bi-eye-fill"></i> Ver Boletín Completo
                    </a>
                </div>
            </div> --}}

            <!-- Boletín 4 -->
            {{-- <div class="boletin-card" data-categoria="cultural">
                <img src="{{ asset('images/boletines/cultural-mayo.jpg') }}" alt="Festival Cultural Mayo 2026" class="boletin-imagen" onerror="this.src='https://via.placeholder.com/400x200/ff6b6b/ffffff?text=Festival+Cultural'">
                <div class="boletin-content">
                    <span class="boletin-fecha">Mayo 2026</span>
                    <span class="boletin-categoria">Cultural</span>
                    <h4 class="boletin-titulo">Festival Cultural: Tradiciones y Folklore Peruano</h4>
                    <p class="boletin-descripcion">Exitosa presentación artística de nuestros estudiantes en el festival cultural anual del colegio...</p>
                    <a href="#boletin4" class="boletin-btn" data-bs-toggle="modal" data-bs-target="#modalBoletin4">
                        <i class="bi bi-eye-fill"></i> Ver Boletín Completo
                    </a>
                </div>
            </div> --}}

            <!-- Boletín 5 -->
            {{-- <div class="boletin-card" data-categoria="anuncios">
                <img src="{{ asset('images/boletines/anuncios-junio.jpg') }}" alt="Vacaciones de Invierno 2026" class="boletin-imagen" onerror="this.src='https://via.placeholder.com/400x200/4a90e2/ffffff?text=Vacaciones+de+Invierno'">
                <div class="boletin-content">
                    <span class="boletin-fecha">Junio 2026</span>
                    <span class="boletin-categoria">Anuncios</span>
                    <h4 class="boletin-titulo">Calendario de Vacaciones de Invierno y Reactivación</h4>
                    <p class="boletin-descripcion">Información importante sobre las fechas de vacaciones y el calendario de reactivación académica...</p>
                    <a href="#boletin5" class="boletin-btn" data-bs-toggle="modal" data-bs-target="#modalBoletin5">
                        <i class="bi bi-eye-fill"></i> Ver Boletín Completo
                    </a>
                </div>
            </div> --}}

            <!-- Boletín 6 -->
            {{-- <div class="boletin-card" data-categoria="academico">
                <img src="{{ asset('images/boletines/academico-julio.jpg') }}" alt="Proyectos de Investigación 2026" class="boletin-imagen" onerror="this.src='https://via.placeholder.com/400x200/50c878/ffffff?text=Proyectos+de+Investigación'">
                <div class="boletin-content">
                    <span class="boletin-fecha">Julio 2026</span>
                    <span class="boletin-categoria">Académico</span>
                    <h4 class="boletin-titulo">Proyectos de Investigación Destacados - Ciencia y Tecnología</h4>
                    <p class="boletin-descripcion">Estudiantes de secundaria presentan innovadores proyectos de investigación científica...</p>
                    <a href="#boletin6" class="boletin-btn" data-bs-toggle="modal" data-bs-target="#modalBoletin6">
                        <i class="bi bi-eye-fill"></i> Ver Boletín Completo
                    </a>
                </div>
            </div> --}}
        </div>

        <!-- Estadísticas -->
        {{-- <div class="estadisticas-section">
            <h3 class="estadisticas-title">Estadísticas de Boletines 2026</h3>
            <div class="row text-center">
                <div class="col-md-3 col-6">
                    <div class="estadistica-item">
                        <div class="estadistica-numero" id="total-boletines">6</div>
                        <div class="estadistica-texto">Boletines Publicados</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="estadistica-item">
                        <div class="estadistica-numero" id="academicos-boletines">2</div>
                        <div class="estadistica-texto">Académicos</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="estadistica-item">
                        <div class="estadistica-numero" id="eventos-boletines">1</div>
                        <div class="estadistica-texto">Eventos</div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="estadistica-item">
                        <div class="estadistica-numero" id="otros-boletines">3</div>
                        <div class="estadistica-texto">Otras Categorías</div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>

<!-- Sección de Suscripción -->
{{-- <section class="suscripcion-section">
    <div class="container">
        <div class="suscripcion-content">
            <h3 class="suscripcion-title">Recibe los Boletines en tu Email</h3>
            <p class="suscripcion-text">Suscríbete para recibir automáticamente cada nuevo boletín informativo directamente en tu correo electrónico.</p>
            
            <form class="suscripcion-form" id="form-suscripcion">
                <div class="row g-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-suscripcion" placeholder="Tu nombre completo" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control form-control-suscripcion" placeholder="Tu correo electrónico" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-lg w-100">
                            <i class="bi bi-envelope-check"></i> Suscribirme al Boletín
                        </button>
                    </div>
                </div>
            </form>
            
            <div class="mt-3 text-muted small">
                <i class="bi bi-shield-check"></i> Tu información está protegida y solo se usará para envío de boletines.
            </div>
        </div>
    </div>
</section> --}}

<!-- Llamado a la Acción -->
{{-- <section class="section-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="cta-content p-5 rounded" style="background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <h3 class="mb-3" style="color: var(--primary-color);">¿Eres Docente o Representante?</h3>
                    <p class="mb-4" style="color: var(--light-text); font-size: 1.1rem;">
                        Si deseas publicar información en nuestro boletín informativo, contáctanos para coordinar la publicación de tu noticia o evento.
                    </p>
                    <div class="cta-buttons">
                        <a href="{{ route('inicio') }}" class="btn btn-secondary btn-lg me-3">
                            <i class="bi bi-house me-2"></i> Volver al Inicio
                        </a>
                        <a href="mailto:boletin@colegiocesarvallejo.edu.pe" class="btn btn-primary btn-lg">
                            <i class="bi bi-send me-2"></i> Contactar al Equipo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

<!-- Modales para cada boletín -->
@include('components.modales-boletines')
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Filtrado de boletines
        const filtroBtns = document.querySelectorAll('.filtro-btn');
        const boletinCards = document.querySelectorAll('.boletin-card');
        
        filtroBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Remover clase active de todos los botones
                filtroBtns.forEach(b => b.classList.remove('active'));
                
                // Agregar clase active al botón clickeado
                this.classList.add('active');
                
                const categoria = this.getAttribute('data-categoria');
                
                // Mostrar/ocultar boletines según categoría
                boletinCards.forEach(card => {
                    if (categoria === 'todos' || card.getAttribute('data-categoria') === categoria) {
                        card.style.display = 'flex';
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                        
                        setTimeout(() => {
                            card.style.transition = 'all 0.5s ease';
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }, 100);
                    } else {
                        card.style.display = 'none';
                    }
                });
                
                // Actualizar estadísticas
                actualizarEstadisticas(categoria);
            });
        });
        
        // Animación de entrada para las tarjetas
        boletinCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 150);
        });
        
        // Formulario de suscripción
        const formSuscripcion = document.getElementById('form-suscripcion');
        formSuscripcion.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Obtener valores del formulario
            const nombre = this.querySelector('input[type="text"]').value;
            const email = this.querySelector('input[type="email"]').value;
            
            // Aquí normalmente enviarías los datos a tu servidor
            console.log('Suscripción recibida:', { nombre, email });
            
            // Mostrar mensaje de éxito
            alert(`¡Gracias ${nombre}! Te has suscrito exitosamente al boletín informativo.`);
            
            // Resetear formulario
            this.reset();
            
            // Opcional: Enviar datos a tu backend
            // fetch('/suscripcion-boletin', {
            //     method: 'POST',
            //     headers: {
            //         'Content-Type': 'application/json',
            //     },
            //     body: JSON.stringify({ nombre, email })
            // });
        });
        
        // Funciones auxiliares
        function actualizarEstadisticas(categoria) {
            const totalBoletines = document.getElementById('total-boletines');
            const academicosBoletines = document.getElementById('academicos-boletines');
            const eventosBoletines = document.getElementById('eventos-boletines');
            const otrosBoletines = document.getElementById('otros-boletines');
            
            if (categoria === 'todos') {
                totalBoletines.textContent = '6';
                academicosBoletines.textContent = '2';
                eventosBoletines.textContent = '1';
                otrosBoletines.textContent = '3';
            } else if (categoria === 'academico') {
                totalBoletines.textContent = '2';
                academicosBoletines.textContent = '2';
                eventosBoletines.textContent = '0';
                otrosBoletines.textContent = '0';
            } else if (categoria === 'eventos') {
                totalBoletines.textContent = '1';
                academicosBoletines.textContent = '0';
                eventosBoletines.textContent = '1';
                otrosBoletines.textContent = '0';
            } else {
                // Para otras categorías, mostrar solo 1
                totalBoletines.textContent = '1';
                academicosBoletines.textContent = '0';
                eventosBoletines.textContent = '0';
                otrosBoletines.textContent = '1';
            }
        }
        
        // Inicializar estadísticas
        actualizarEstadisticas('todos');
        
        // Cargar boletines dinámicamente (ejemplo con fetch)
        function cargarBoletines() {
            // Aquí puedes cargar boletines desde tu backend
            // fetch('/api/boletines')
            //     .then(response => response.json())
            //     .then(data => {
            //         // Procesar y mostrar boletines
            //         console.log('Boletines cargados:', data);
            //     })
            //     .catch(error => {
            //         console.error('Error cargando boletines:', error);
            //     });
        }
        
        // Cargar boletines al iniciar
        // cargarBoletines();
    });
</script>
@endpush