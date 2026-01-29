<!-- Modal para Boletín 1 -->
<div class="modal fade modal-boletin" id="modalBoletin1" tabindex="-1" aria-labelledby="modalBoletin1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalBoletin1Label">Resultados Destacados - Exámenes de Admisión 2026</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/boletines/academico-enero.jpg') }}" alt="Logros Académicos" class="img-fluid rounded" style="max-height: 300px;">
                </div>
                
                <div class="d-flex justify-content-between mb-3">
                    <span class="badge bg-primary">Académico</span>
                    <span class="text-muted">Publicado: Enero 2026</span>
                </div>
                
                <h4 class="text-primary mb-3">¡Felicitaciones a Nuestros Destacados!</h4>
                
                <p>El Colegio Cooperativo "César Vallejo" se enorgullece en anunciar los resultados del examen de admisión para el año escolar 2026. Un total de 150 estudiantes fueron seleccionados entre más de 400 postulantes.</p>
                
                <div class="alert alert-success">
                    <h5 class="alert-heading"><i class="bi bi-trophy"></i> Primeros Puestos</h5>
                    <ul class="mb-0">
                        <li><strong>1er Puesto:</strong> María Fernanda López - 98.5 puntos</li>
                        <li><strong>2do Puesto:</strong> Juan Carlos Rodríguez - 97.8 puntos</li>
                        <li><strong>3er Puesto:</strong> Ana Lucía Martínez - 96.2 puntos</li>
                    </ul>
                </div>
                
                <h5 class="mt-4">Distribución por Niveles</h5>
                <ul>
                    <li><strong>Primaria:</strong> 75 nuevos estudiantes admitidos</li>
                    <li><strong>Secundaria:</strong> 75 nuevos estudiantes admitidos</li>
                    <li><strong>Mérito a la Excelencia:</strong> 15 becas académicas otorgadas</li>
                </ul>
                
                <p>La ceremonia de reconocimiento se llevará a cabo el próximo viernes 30 de enero en el auditorio principal del colegio.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <a href="{{ asset('pdf/boletin-enero-2026.pdf') }}" class="btn btn-primary" target="_blank">
                    <i class="bi bi-download"></i> Descargar PDF
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal para Boletín 2 -->
<div class="modal fade modal-boletin" id="modalBoletin2" tabindex="-1" aria-labelledby="modalBoletin2Label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalBoletin2Label">Ceremonia de Inauguración del Año Escolar 2026</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/boletines/inauguracion-marzo.jpg') }}" alt="Inauguración" class="img-fluid rounded" style="max-height: 300px;">
                </div>
                
                <div class="d-flex justify-content-between mb-3">
                    <span class="badge bg-info">Eventos</span>
                    <span class="text-muted">Publicado: Marzo 2026</span>
                </div>
                
                <h4 class="text-primary mb-3">Bienvenida al Año Escolar 2026</h4>
                
                <p>Con gran entusiasmo y compromiso educativo, el Colegio Cooperativo "César Vallejo" dio inicio oficial al año académico 2026. La ceremonia contó con la participación de más de 800 estudiantes, docentes y padres de familia.</p>
                
                <h5 class="mt-4">Momentos Destacados</h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Izamiento del Pabellón Nacional</li>
                            <li>Palabras de bienvenida del Director</li>
                            <li>Presentación del cuerpo docente 2026</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>Presentación artística de estudiantes</li>
                            <li>Entrega de reconocimientos a excelencia 2025</li>
                            <li>Firma del compromiso educativo</li>
                        </ul>
                    </div>
                </div>
                
                <div class="alert alert-info mt-3">
                    <h5 class="alert-heading"><i class="bi bi-calendar-check"></i> Próximos Eventos</h5>
                    <ul class="mb-0">
                        <li><strong>15 Marzo:</strong> Reunión de padres de familia</li>
                        <li><strong>22 Marzo:</strong> Inicio de talleres extracurriculares</li>
                        <li><strong>30 Marzo:</strong> Primera evaluación bimestral</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <a href="{{ asset('pdf/boletin-marzo-2026.pdf') }}" class="btn btn-primary" target="_blank">
                    <i class="bi bi-download"></i> Descargar PDF
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modales 3-6 (estructura similar, puedes expandirlos según necesites) -->
<div class="modal fade modal-boletin" id="modalBoletin3" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nuestro Colegio Campeón en Interescolar Deportivo</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Contenido del boletín 3 -->
                <p>Contenido del boletín deportivo...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <a href="{{ asset('pdf/boletin-abril-2026.pdf') }}" class="btn btn-primary" target="_blank">
                    <i class="bi bi-download"></i> Descargar PDF
                </a>
            </div>
        </div>
    </div>
</div>