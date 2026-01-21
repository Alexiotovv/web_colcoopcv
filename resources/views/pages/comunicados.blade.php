
@extends('layouts.app')

@section('title', 'Comunicados - Colegio Cooperativo César Vallejo')
@push('styles')
   <style>

        
        
        
        
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #1a4f8c;
            padding-top: inherit;
        }
        
        .header h1 {
            color: #1a4f8c;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .header p {
            color: #666;
            font-size: 1.1rem;
        }
        
        .comunicados-container {
            display: flex;
            flex-direction: column;
            gap: 25px;
            margin-bottom: 40px;
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
            padding: 20px;
            max-width: 1000px;
            margin: 0 auto;
        
        }
        
        .comunicado {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 25px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .comunicado:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
        }
        
        .comunicado-titulo {
            color: #1a4f8c;
            font-size: 1.5rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .comunicado-titulo a {
            color: inherit;
            text-decoration: none;
            display: flex;
            align-items: center;
            flex-grow: 1;
        }
        
        .comunicado-titulo a:hover {
            color: #e63946;
            text-decoration: underline;
        }
        
        .comunicado-titulo i {
            margin-right: 10px;
            font-size: 1.3rem;
        }
        
        .comunicado-meta {
            color: #666;
            font-size: 0.95rem;
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px dashed #ddd;
        }
        
        .comunicado-enlace {
            color: #e63946;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
        }
        
        .comunicado-enlace:hover {
            text-decoration: underline;
        }
        
        .comunicado-enlace i {
            margin-right: 5px;
        }
        
        .fecha {
            color: #888;
            font-style: italic;
        }
        
        .aviso {
            background-color: #fff8e1;
            border-left: 4px solid #ffc107;
            padding: 15px;
            border-radius: 4px;
            margin-top: 30px;
            display: flex;
            align-items: center;
        }
        
        .aviso i {
            color: #ff9800;
            font-size: 1.5rem;
            margin-right: 15px;
        }
        
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .comunicado-meta {
                flex-direction: column;
                gap: 8px;
            }
            
            .comunicado {
                padding: 20px;
            }

            .header {
                text-align: center;
                margin-bottom: 50px;
                padding-bottom: 15px;
                border-bottom: 2px solid #1a4f8c;
                padding-top: inherit;
            }
        }

            @media (max-width: 576px) {
            .header h1 {
                font-size: 1.5rem;
            }
            
            .comunicado-meta {
                flex-direction: column;
                gap: 7px;
            }
            
            .comunicado {
                padding: 16px;
            }

            .header {
                text-align: center;
                margin-bottom: 40px;
                padding-bottom: 15px;
                border-bottom: 2px solid #1a4f8c;
                padding-top: inherit;
            }
        }
        
    </style>
@endpush
@section('content')

    <div class="header">
        <h1>COMUNICADO GENERAL</h1>
        <p>Listas oficiales de útiles escolares para el año académico 2025</p>
    </div>
    
    <div class="comunicados-container">
        <div class="comunicado">
            <div class="comunicado-titulo">
                <a href="{{route('lista_utiles')}}" target="_blank">
                    <i class="fas fa-file-pdf"></i>
                    LISTA ÚTILES SECUNDARIA 2026
                </a>
            </div>
            <p>Lista completa de materiales y útiles escolares requeridos para el nivel secundario durante el año académico 2026. Incluye cuadernos, libros, materiales de dibujo y otros recursos necesarios para todas las áreas curriculares.</p>
            <div class="comunicado-meta">
                <a href="{{route('lista_utiles')}}" target="_blank" class="comunicado-enlace">
                    {{-- <i class="fas fa-download"></i>
                    Descargar lista completa (PDF) --}}
                </a>
                <span class="fecha">Publicado hace 12 meses</span>
            </div>
        </div>
        
        <div class="comunicado">
            <div class="comunicado-titulo">
                <a href="{{route('lista_utiles')}}" target="_blank">
                    <i class="fas fa-file-pdf"></i>
                    ÚTILES ESCOLARES PRIMARIA 2026
                </a>
            </div>
            <p>Lista detallada de útiles escolares para el nivel primario correspondiente al año 2026. Contiene los materiales específicos para cada grado, incluyendo cuadernos, lápices, colores, tijeras, pegamento y demás insumos necesarios.</p>
            <div class="comunicado-meta">
                <a href="{{route('lista_utiles')}}" target="_blank" class="comunicado-enlace">
                    {{-- <i class="fas fa-download"></i>
                    Descargar lista completa (PDF) --}}
                </a>
                <span class="fecha">Publicado hace 12 meses</span>
            </div>
        </div>
    </div>
    
@endsection
@push('scripts')
    <script>
        // Simular la acción de descarga y agregar interactividad
        document.querySelectorAll('.comunicado-enlace').forEach(enlace => {
            enlace.addEventListener('click', function() {
                // En un entorno real, aquí se podría registrar la descarga
                console.log('Descargando PDF: ' + this.getAttribute('href'));
            });
        });
        
        // Actualizar dinámicamente la fecha relativa
        function actualizarFechas() {
            const fechas = document.querySelectorAll('.fecha');
            const meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", 
                        "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];
            
            // Fecha de referencia (hace 12 meses)
            const fechaReferencia = new Date();
            fechaReferencia.setMonth(fechaReferencia.getMonth() - 12);
            
            const dia = fechaReferencia.getDate();
            const mes = meses[fechaReferencia.getMonth()];
            const año = fechaReferencia.getFullYear();
            
            fechas.forEach(fecha => {
                fecha.textContent = `Publicado el ${dia} de ${mes} de ${año}`;
            });
        }
        
        // Llamar a la función cuando cargue la página
        document.addEventListener('DOMContentLoaded', actualizarFechas);
    </script>
@endpush
