@extends('layouts.app')

@section('title', 'Nosotros - Colegio Cooperativo César Vallejo')

@section('content')
<!-- Hero Section -->
<section class="hero-section nosotros-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="hero-title">Nuestra Institución</h1>
                <p class="hero-subtitle">Más de 30 años formando líderes con valores cooperativos</p>
            </div>
            <div class="col-lg-4">
                <div class="hero-image text-center">
                    <i class="bi bi-building hero-icon"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Secciones de contenido -->
<section class="section-body py-5">
    <div class="container-body">
        <!-- Reseña Histórica -->
        <div class="nosotros-section mb-5">
            <div class="section-header mb-4">
                <h2 class="section-title">Reseña Histórica</h2>
                <div class="section-divider"></div>
            </div>
            
            <div class="reseña-inicios mb-4">
                <h4 class="subsection-title">Inicios</h4>
                <p class="lead">Nuestra Institución Educativa brinda una sólida formación, desde 1° grado de primaria hasta 5° grado de educación secundaria.</p>
            </div>
            
            <!-- Línea de tiempo -->
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">1992</div>
                    <div class="timeline-content">
                        <p>Con la Resolución Directoral N° 0097, Celebra Convenio entre la Dirección de Educación de la Región Loreto y la Cooperativa de Servicios Múltiples "César Vallejo" Ltda. Para la Creación y Funcionamiento del Colegio Cooperativo – Nivel Primaria de Menores. Funcionando en la calle Calvo de Araujo N° 743, distrito de Iquitos. Con Resolución Directoral N° 0160, Reconocer como Director Gerente al Prof. Joiner Alberto Vásquez Pinedo.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">1993</div>
                    <div class="timeline-content">
                        <p>Con Resolución Directoral N°00222, la ampliación del Servicio Educativo de los dos primeros grados de Educación Secundaria los cuales funcionaron en el turno de la tarde.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">1994</div>
                    <div class="timeline-content">
                        <p>Con Resolución Directoral N°00063, la ampliación del Servicio Educativo para el tercer grado de Educación Secundaria. Funcionando el nivel secundario en la Av. Freyre N°1641, distrito de Punchana.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">1995</div>
                    <div class="timeline-content">
                        <p>Con Resolución Directoral N°01276, la ampliación del Servicio Educativo para el cuarto y quinto grado de Educación Secundaria.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2004</div>
                    <div class="timeline-content">
                        <p>Se inicia la aplicación del Sistema Pre-Universitario en el nivel Secundario y la enseñanza de Razonamiento Matemático y Verbal en el Nivel Primaria.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2008</div>
                    <div class="timeline-content">
                        <p>Cumpliéndose con el sueño de nuestro Director Gerente Prof. Joiner Alberto Vásquez Pinedo, se logra tener local propio, con amplia y moderna infraestructura al servicio de la comunidad educativa ubicada en el Jirón Putumayo N°966.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2017</div>
                    <div class="timeline-content">
                        <p>La Institución asume un nuevo reto educativo con el logro de un Convenio Interinstitucional Internacional Hanban de China, a través de la Consejería Cultural; la implementación de la enseñanza del idioma Chino Mandarín y difusión de su cultura en la Región Loreto.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2018</div>
                    <div class="timeline-content">
                        <p>Se inicia el dictado del Idioma de Chino Mandarín desde 5° grado de primaria hasta 5° grado de secundaria, contando con el apoyo de 3 profesores chinos enviados por el Instituto Hanban.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2019</div>
                    <div class="timeline-content">
                        <p>Reconocido como Taller de Enseñanza del Idioma Chino Mandarín, aprobado con RDI N°246-17-COLCOOP "CV"-D y reconocido cada año por la Unidad de Gestión Educativa Local con RESOLUCIONES DIRECTORALES.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2020</div>
                    <div class="timeline-content">
                        <p>Nuestra I.E. enfrenta el gran desafío global a causa del COVID-19 y al cierre masivo de las actividades presenciales, se desarrolla el Plan de Reprogramación Curricular No Presencial denominado "Aprendemos en casa en entornos virtuales", a través del envío semanal de Módulos de Aprendizaje Virtual mediante el uso de herramientas digitales y el apoyo primordial de nuestros aliados, los padres de familia. Este mismo año, se termina la construcción del mini coliseo vallejiano, con el fin de ayudar al desarrollo de actividades lúdicas-deportivas de los estudiantes.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2021</div>
                    <div class="timeline-content">
                        <p>El trabajo educativo se desarrolla a distancia con algún grado de presencialidad, implementándose la Plataforma Virtual Moodle-https://cvallejoiquitos.com. Las clases de Chino Mandarín se desarrollan desde China a través de la plataforma virtual Zoom a cargo de los profesores chinos y el apoyo de los profesores de idiomas como asistentes.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2022</div>
                    <div class="timeline-content">
                        <p>El trabajo educativo se desarrolla en forma presencial y se complementa a través de la Plataforma Virtual Moodle-https://cvallejoiquitos.com. Las clases de Chino Mandarín a partir de este año se dan desde 4° grado de primaria, se desarrollan desde China a través de la plataforma virtual Zoom a cargo de los profesores chinos y el apoyo de los profesores de idiomas como asistentes.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Misión y Visión -->
        <div class="nosotros-section mb-5">
            <div class="section-header mb-4">
                <h2 class="section-title">Misión - Visión</h2>
                <div class="section-divider"></div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="mision-card p-4 h-100">
                        <h4 class="subsection-title mb-3">
                            <i class="bi bi-compass me-2"></i>
                            Misión
                        </h4>
                        <p>Somos una institución educativa de principios cooperativos, que educa para la vida y orienta el aprendizaje hacia principios éticos que orientan todo su quehacer al servicio de la sociedad.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="vision-card p-4 h-100">
                        <h4 class="subsection-title mb-3">
                            <i class="bi bi-eye me-2"></i>
                            Visión
                        </h4>
                        <p>El colegio "COOPERATIVO CÉSAR VALLEJO" es una institución educativa líder en la región Loreto, por su excelencia en la conformación integral de personas comprometidas con la justicia social y el cuidado del medio ambiente amazónico.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Directivos -->
        <div class="nosotros-section mb-5">
            <div class="section-header mb-4">
                <h2 class="section-title">Directivos</h2>
                <div class="section-divider"></div>
            </div>
            
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="directivo-card text-center p-3 h-100">
                        <div class="directivo-icon mb-3">
                            <i class="bi bi-person-badge"></i>
                        </div>
                        <h5 class="directivo-title">GERENTE FUNDADOR</h5>
                        <p class="directivo-nombre">JOINER ALBERTO VÁSQUEZ PINEDO</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="directivo-card text-center p-3 h-100">
                        <div class="directivo-icon mb-3">
                            <i class="bi bi-person-square"></i>
                        </div>
                        <h5 class="directivo-title">DIRECTOR</h5>
                        <p class="directivo-nombre">SEGUNDO AGLIBERTO PINEDO ARRIAGA</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="directivo-card text-center p-3 h-100">
                        <div class="directivo-icon mb-3">
                            <i class="bi bi-person-lines-fill"></i>
                        </div>
                        <h5 class="directivo-title">SUBDIRECTORA DE FORMACIÓN GENERAL</h5>
                        <p class="directivo-nombre">RUTH MARINA LLERENA ALVAREZ</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="directivo-card text-center p-3 h-100">
                        <div class="directivo-icon mb-3">
                            <i class="bi bi-person-video3"></i>
                        </div>
                        <h5 class="directivo-title">SUBDIRECTORA DE PRIMARIA</h5>
                        <p class="directivo-nombre">MARIA ELIZABETH VARGAS VALLES</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Valores Institucionales -->
        <div class="nosotros-section mb-5">
            <div class="section-header mb-4">
                <h2 class="section-title">Valores Institucionales</h2>
                <div class="section-divider"></div>
            </div>
            
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="valor-card p-3 h-100">
                        <h5 class="valor-title">COOPERACIÓN</h5>
                        <p class="valor-desc">Vivimos, oramos, estudiamos y trabajamos orientados por los principios cooperativos que impulsa ser personas humanitarias, colaboradoras y de apoyo mutuo.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="valor-card p-3 h-100">
                        <h5 class="valor-title">ESPIRITUALIDAD</h5>
                        <p class="valor-desc">Fundamentamos nuestra vida y misión en el conocimiento interno de Dios para base de una vida sana y plena.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="valor-card p-3 h-100">
                        <h5 class="valor-title">SOLIDARIDAD</h5>
                        <p class="valor-desc">Formamos personas comprometidas con la justicia y equidad, mediante la construcción de una sociedad más justa, donde la paz sea una realidad.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="valor-card p-3 h-100">
                        <h5 class="valor-title">RELACIONES INTERPERSONALES CONSTRUCTIVAS</h5>
                        <p class="valor-desc">Nuestras relaciones interpersonales se fundamentan en el cuidado de la persona a través de la honestidad, la solidaridad, el respeto y la participación, y se realizan a través del diálogo y la comunicación.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="valor-card p-3 h-100">
                        <h5 class="valor-title">EDUCACIÓN CENTRADA EN LA PERSONA</h5>
                        <p class="valor-desc">Reconocemos a la persona humana como centro del proceso educativo, acompañándola en la búsqueda de la verdad, en la capacidad de amar y relacionarse afectivamente y en el ejercicio de la libertad como autonomía responsable.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="valor-card p-3 h-100">
                        <h5 class="valor-title">COMPROMISO CON EL CUIDADO Y DESARROLLO DEL MEDIO AMBIENTE AMAZÓNICO</h5>
                        <p class="valor-desc">Procuramos la formación de nuestra comunidad educativa con un criterio constructivo de respeto por la vida y la naturaleza.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Niveles Académicos -->
        <div class="nosotros-section">
            <div class="section-header mb-4">
                <h2 class="section-title">Niveles Académicos</h2>
                <div class="section-divider"></div>
            </div>
            
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="nivel-card p-4 h-100">
                        <h4 class="subsection-title mb-3">
                            <i class="bi bi-mortarboard me-2"></i>
                            Nivel Primario
                        </h4>
                        <p>El nivel Primaria busca desarrollar las potencialidades de nuestros estudiantes a través de actividades y experiencias vivenciales en las que ellos mismos son autores de su propio aprendizaje en un ambiente armónico y acorde a las necesidades del mundo actual. Por lo que desarrollamos competencias para que se desenvuelvan en entornos virtuales generados por las nuevas tecnologías.</p>
                        <p>Los maestros de Primaria ayudan al desarrollo Integral del niño y niña (afectivo, social y cognitivo) que les permiten mejorar la comunicación, aportan confianza, seguridad, fortaleza, fortalecen la Autoestima, afianzando sus habilidades sociales e inteligencia emocionales.</p>
                        <div class="ciclos mt-4">
                            <h5 class="ciclos-title">Ciclos:</h5>
                            <ul class="ciclos-list">
                                <li><strong>III ciclo:</strong> 1° grado y 2°grado</li>
                                <li><strong>IV ciclo:</strong> 3° grado y 4° grado</li>
                                <li><strong>V ciclo:</strong> 5°grado y 6° grado</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="nivel-card p-4 h-100">
                        <h4 class="subsection-title mb-3">
                            <i class="bi bi-book me-2"></i>
                            Nivel Secundario
                        </h4>
                        <p>El nivel secundario busca desarrollar las potencialidades de nuestros estudiantes a través de estrategias de aprendizaje, partiendo desde lo más simple hasta lo más complejo, de manera progresiva y en forma continua.</p>
                        <p>Logrando en ellos la autonomía en la solución de diversas situaciones problemáticas. Por lo que se brindan oportunidades para desarrollar competencias, actitudes y conocimientos con el uso constante de la tecnología.</p>
                        <div class="ciclos mt-4">
                            <h5 class="ciclos-title">Ciclos:</h5>
                            <ul class="ciclos-list">
                                <li><strong>VI ciclo:</strong> 1° grado y 2°grado</li>
                                <li><strong>VII ciclo:</strong> 3° grado, 4° grado y 5° grado</li>
                            </ul>
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
    .nosotros-hero {
        background: linear-gradient(135deg, #1a4f8c 0%, #2c3e50 100%);
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
    
    .hero-icon {
        font-size: 10rem;
        color: rgba(255, 255, 255, 0.2);
    }
    
    /* Secciones */
    .section-header {
        position: relative;
    }
    
    .section-title {
        color: #1a4f8c;
        font-weight: 700;
        font-size: 2.2rem;
        margin-bottom: 15px;
    }
    
    .section-divider {
        height: 3px;
        width: 100px;
        background: linear-gradient(90deg, #1a4f8c, #2c3e50);
        margin-bottom: 30px;
    }
    
    .subsection-title {
        color: #2c3e50;
        font-weight: 600;
        font-size: 1.5rem;
        margin-bottom: 15px;
    }
    
    /* Línea de tiempo */
    .timeline {
        position: relative;
        padding-left: 30px;
        margin-top: 30px;
    }
    
    .timeline::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background: linear-gradient(to bottom, #1a4f8c, #2c3e50);
    }
    
    .timeline-item {
        position: relative;
        margin-bottom: 30px;
    }
    
    .timeline-item:last-child {
        margin-bottom: 0;
    }
    
    .timeline-year {
        position: absolute;
        left: -40px;
        top: 0;
        background: #1a4f8c;
        color: white;
        padding: 5px 15px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.9rem;
        min-width: 70px;
        text-align: center;
    }
    
    .timeline-content {
        padding: 15px 20px;
        background: #f8f9fa;
        border-left: 4px solid #1a4f8c;
        border-radius: 0 8px 8px 0;
    }
    
    .timeline-content p {
        margin-bottom: 0;
    }
    
    /* Cards */
    .mision-card {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        border-left: 5px solid #1a4f8c;
        border-radius: 8px;
    }
    
    .vision-card {
        background: linear-gradient(135deg, #f0f7ff 0%, #e3f2fd 100%);
        border-left: 5px solid #28a745;
        border-radius: 8px;
    }
    
    .directivo-card {
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .directivo-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    .directivo-icon {
        font-size: 2.5rem;
        color: #1a4f8c;
    }
    
    .directivo-title {
        color: #1a4f8c;
        font-weight: 600;
        font-size: 1.1rem;
        margin-bottom: 10px;
    }
    
    .directivo-nombre {
        color: #2c3e50;
        font-weight: 500;
        font-size: 0.95rem;
        margin-bottom: 0;
    }
    
    .valor-card {
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    
    .valor-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }
    
    .valor-title {
        color: #1a4f8c;
        font-weight: 600;
        font-size: 1.2rem;
        margin-bottom: 10px;
    }
    
    .valor-desc {
        color: #495057;
        font-size: 0.95rem;
        margin-bottom: 0;
    }
    
    .nivel-card {
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        height: 100%;
    }
    
    .ciclos-title {
        color: #1a4f8c;
        font-weight: 600;
        font-size: 1.2rem;
        margin-bottom: 10px;
    }
    
    .ciclos-list {
        list-style: none;
        padding-left: 0;
        margin-bottom: 0;
    }
    
    .ciclos-list li {
        padding: 5px 0;
        border-bottom: 1px dashed #e9ecef;
    }
    
    .ciclos-list li:last-child {
        border-bottom: none;
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
        
        .section-title {
            font-size: 1.8rem;
        }
        
        .timeline {
            padding-left: 25px;
        }
        
        .timeline-year {
            position: relative;
            left: 0;
            margin-bottom: 10px;
            display: inline-block;
        }
        
        .timeline-content {
            padding: 15px;
        }
    }
    
    @media (max-width: 576px) {
        .hero-title {
            font-size: 2rem;
        }
        
        .section-title {
            font-size: 1.5rem;
        }
        
        .subsection-title {
            font-size: 1.3rem;
        }
    }
</style>

<!-- JavaScript simple -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animación suave para las cards
        const cards = document.querySelectorAll('.directivo-card, .valor-card');
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });
        
        // Animación para la línea de tiempo
        const timelineItems = document.querySelectorAll('.timeline-item');
        timelineItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateX(-20px)';
            
            setTimeout(() => {
                item.style.transition = 'all 0.5s ease';
                item.style.opacity = '1';
                item.style.transform = 'translateX(0)';
            }, index * 150);
        });
    });
</script>
@endsection