@extends('layouts.app')

@section('title', 'Galería - Colegio Cooperativo César Vallejo')

@section('content')
<!-- Hero Section -->
<section class="hero-section gallery-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="hero-title">Galería Fotográfica</h1>
                <p class="hero-subtitle">Momentos especiales de nuestra comunidad educativa</p>
                <div class="hero-badge">
                    <span class="badge bg-primary">Actividades escolares</span>
                    <span class="badge bg-success">Eventos especiales</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hero-image text-center">
                    <i class="bi bi-images hero-icon"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Galería -->
<section class="section-body py-5">
    <div class="container-body">
        <div class="row mb-4">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="section-title">Nuestra Galería</h2>
                    <div class="gallery-controls">
                        <button class="btn btn-outline-primary btn-sm me-2" id="filter-all">Todas</button>
                        <button class="btn btn-outline-success btn-sm me-2" id="filter-actividades">Actividades</button>
                        <button class="btn btn-outline-warning btn-sm" id="filter-eventos">Eventos</button>
                    </div>
                </div>
                <p class="text-muted">Fotografías de nuestras actividades y eventos educativos</p>
            </div>
        </div>

        <!-- Primera Fila - 4 imágenes -->
        <div class="row mb-4 gallery-row" data-category="actividades">
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="{{asset('galeria/fotovallejo1.jpg')}}"
                         class="img-fluid gallery-img" 
                         alt="Estudiantes en clase" 
                         data-bs-toggle="modal" 
                         data-bs-target="#galleryModal"
                         data-bs-title="Estudiantes en clase de ciencias">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Clase de Ciencias</h5>
                            <p>Estudiantes en laboratorio</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="{{asset('galeria/fotovallejo2.jpg')}}"
                         class="img-fluid gallery-img" 
                         alt="Actividad deportiva"
                         data-bs-toggle="modal" 
                         data-bs-target="#galleryModal"
                         data-bs-title="Competencia deportiva escolar">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Deportes</h5>
                            <p>Competencia inter-escolar</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="{{asset('galeria/fotovallejo3.jpg')}}"
                         class="img-fluid gallery-img" 
                         alt="Presentación artística"
                         data-bs-toggle="modal" 
                         data-bs-target="#galleryModal"
                         data-bs-title="Presentación artística cultural">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Arte y Cultura</h5>
                            <p>Presentación teatral</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="{{asset('galeria/fotovallejo4.jpg')}}"
                         class="img-fluid gallery-img" 
                         alt="Biblioteca escolar"
                         data-bs-toggle="modal" 
                         data-bs-target="#galleryModal"
                         data-bs-title="Estudiantes en la biblioteca">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Biblioteca</h5>
                            <p>Hora de lectura</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Segunda Fila - 4 imágenes -->
        <div class="row mb-4 gallery-row" data-category="eventos">
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="{{asset('galeria/fotovallejo5.jpg')}}"
                         class="img-fluid gallery-img" 
                         alt="Graduación escolar"
                         data-bs-toggle="modal" 
                         data-bs-target="#galleryModal"
                         data-bs-title="Ceremonia de graduación 2025">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Graduación</h5>
                            <p>Promoción 2025</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="{{asset('galeria/fotovallejo6.jpg')}}"
                         class="img-fluid gallery-img" 
                         alt="Feria de ciencias"
                         data-bs-toggle="modal" 
                         data-bs-target="#galleryModal"
                         data-bs-title="Feria de ciencias anual">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Feria de Ciencias</h5>
                            <p>Proyectos estudiantiles</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="{{asset('galeria/fotovallejo7.jpg')}}"
                         class="img-fluid gallery-img" 
                         alt="Día del estudiante"
                         data-bs-toggle="modal" 
                         data-bs-target="#galleryModal"
                         data-bs-title="Celebración del día del estudiante">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Día del Estudiante</h5>
                            <p>Celebración especial</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="{{asset('galeria/fotovallejo8.jpg')}}"
                         class="img-fluid gallery-img" 
                         alt="Evento cultural"
                         data-bs-toggle="modal" 
                         data-bs-target="#galleryModal"
                         data-bs-title="Festival cultural anual">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Festival Cultural</h5>
                            <p>Presentaciones artísticas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tercera Fila - 4 imágenes -->
        <div class="row mb-4 gallery-row" data-category="actividades">
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="{{asset('galeria/fotovallejo9.jpg')}}"
                         class="img-fluid gallery-img" 
                         alt="Excursión educativa"
                         data-bs-toggle="modal" 
                         data-bs-target="#galleryModal"
                         data-bs-title="Excursión al museo de ciencias">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Excursión</h5>
                            <p>Visita educativa</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="{{asset('galeria/fotovallejo10.jpg')}}"
                         class="img-fluid gallery-img" 
                         alt="Taller de robótica"
                         data-bs-toggle="modal" 
                         data-bs-target="#galleryModal"
                         data-bs-title="Taller de robótica educativa">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Robótica</h5>
                            <p>Taller tecnológico</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="{{asset('galeria/fotovallejo11.jpg')}}"
                         class="img-fluid gallery-img" 
                         alt="Trabajo en equipo"
                         data-bs-toggle="modal" 
                         data-bs-target="#galleryModal"
                         data-bs-title="Estudiantes trabajando en equipo">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Trabajo en Equipo</h5>
                            <p>Proyecto colaborativo</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="gallery-item">
                    <img src="{{asset('galeria/fotovallejo12.jpg')}}"
                         class="img-fluid gallery-img" 
                         alt="Concurso de matemáticas"
                         data-bs-toggle="modal" 
                         data-bs-target="#galleryModal"
                         data-bs-title="Concurso inter-escolar de matemáticas">
                    <div class="gallery-overlay">
                        <div class="gallery-caption">
                            <h5>Concurso Matemático</h5>
                            <p>Competencia académica</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contador de imágenes -->
        {{-- <div class="row mt-4">
            <div class="col-12 text-center">
                <div class="image-counter bg-light p-3 rounded d-inline-block">
                    <span class="text-primary fw-bold">12</span> fotografías en total
                </div>
            </div>
        </div> --}}
    </div>
</section>

<!-- Modal para imagen ampliada -->
<div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="galleryModalLabel">Título de la imagen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalImage" src="" class="img-fluid" alt="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <a href="#" id="downloadImage" class="btn btn-primary" download>
                    <i class="bi bi-download me-2"></i>Descargar
                </a>
            </div>
        </div>
    </div>
</div>

<!-- CSS específico para la galería -->
<style>
    /* Hero Section */
    .gallery-hero {
        background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
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
    
    /* Galería Items */
    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        height: 250px;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }
    
    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }
    
    .gallery-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    
    .gallery-item:hover .gallery-img {
        transform: scale(1.05);
    }
    
    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
        padding: 20px;
        color: white;
        transform: translateY(100%);
        transition: transform 0.3s ease;
    }
    
    .gallery-item:hover .gallery-overlay {
        transform: translateY(0);
    }
    
    .gallery-caption h5 {
        font-size: 1.1rem;
        margin-bottom: 5px;
        font-weight: 600;
    }
    
    .gallery-caption p {
        font-size: 0.9rem;
        margin-bottom: 0;
        opacity: 0.9;
    }
    
    .section-title {
        color: #2c3e50;
        font-weight: 700;
        font-size: 2rem;
    }
    
    .image-counter {
        border: 2px solid #e9ecef;
        font-size: 1.1rem;
    }
    
    .image-counter span {
        font-size: 1.5rem;
    }
    
    /* Modal */
    #galleryModal .modal-body img {
        max-height: 70vh;
        object-fit: contain;
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
        
        .gallery-item {
            height: 200px;
        }
        
        .gallery-controls {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 10px;
        }
        
        .gallery-controls button {
            margin-bottom: 5px;
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
        
        .gallery-item {
            height: 180px;
        }
        
        .col-sm-6 {
            width: 50%;
        }
    }
</style>

<!-- JavaScript para la galería -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Filtrado de galería
        const filterAll = document.getElementById('filter-all');
        const filterActividades = document.getElementById('filter-actividades');
        const filterEventos = document.getElementById('filter-eventos');
        const galleryRows = document.querySelectorAll('.gallery-row');
        
        filterAll.addEventListener('click', function() {
            galleryRows.forEach(row => {
                row.style.display = 'flex';
            });
            updateActiveFilter(this);
        });
        
        filterActividades.addEventListener('click', function() {
            galleryRows.forEach(row => {
                if (row.dataset.category === 'actividades') {
                    row.style.display = 'flex';
                } else {
                    row.style.display = 'none';
                }
            });
            updateActiveFilter(this);
        });
        
        filterEventos.addEventListener('click', function() {
            galleryRows.forEach(row => {
                if (row.dataset.category === 'eventos') {
                    row.style.display = 'flex';
                } else {
                    row.style.display = 'none';
                }
            });
            updateActiveFilter(this);
        });
        
        function updateActiveFilter(activeButton) {
            [filterAll, filterActividades, filterEventos].forEach(btn => {
                btn.classList.remove('active');
                btn.classList.remove('btn-primary', 'btn-success', 'btn-warning');
                btn.classList.add('btn-outline-primary', 'btn-outline-success', 'btn-outline-warning');
            });
            
            activeButton.classList.add('active');
            if (activeButton === filterAll) {
                activeButton.classList.remove('btn-outline-primary');
                activeButton.classList.add('btn-primary');
            } else if (activeButton === filterActividades) {
                activeButton.classList.remove('btn-outline-success');
                activeButton.classList.add('btn-success');
            } else if (activeButton === filterEventos) {
                activeButton.classList.remove('btn-outline-warning');
                activeButton.classList.add('btn-warning');
            }
        }
        
        // Modal para imagen ampliada
        const galleryModal = document.getElementById('galleryModal');
        const modalTitle = document.getElementById('galleryModalLabel');
        const modalImage = document.getElementById('modalImage');
        const downloadLink = document.getElementById('downloadImage');
        
        galleryModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const imageSrc = button.querySelector('img').src;
            const imageTitle = button.dataset.bsTitle;
            
            modalTitle.textContent = imageTitle;
            modalImage.src = imageSrc;
            downloadLink.href = imageSrc;
            downloadLink.download = imageTitle.toLowerCase().replace(/\s+/g, '-') + '.jpg';
        });
        
        // Contador de imágenes visibles
        function updateImageCounter() {
            const visibleItems = document.querySelectorAll('.gallery-row[style*="flex"] .gallery-item').length;
            const counter = document.querySelector('.image-counter span');
            if (counter) {
                counter.textContent = visibleItems;
        }
        
        // Inicializar contador
        updateImageCounter();
        
        // Actualizar contador cuando se filtren imágenes
        [filterAll, filterActividades, filterEventos].forEach(filter => {
            filter.addEventListener('click', updateImageCounter);
        });
    });
</script>
@endsection