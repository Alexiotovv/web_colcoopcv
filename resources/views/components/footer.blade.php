<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Logo y descripción -->
            <div class="col-lg-4 col-md-6 footer-col">
                <div class="mt-4">
                    <i class="bi bi-book reclamo-icon"></i>
                    <h5>Libro de Reclamaciones</h5>
                    <p>Accede a nuestro libro de reclamaciones digital para cualquier consulta o sugerencia.</p>
                    <a href="https://libroreclamaciones.cvallejoiquitos.com/" class="btn btn-outline-light btn-sm">Acceder</a>
                </div>
            </div>
            
            <!-- Comunicados Recientes -->
            <div class="col-lg-4 col-md-6 footer-col">
                <img src="{{asset('img/logo_menu.png')}}" alt="Logo Colegio" class="footer-logo">
                <p>Colegio Cooperativo César Vallejo - Formando líderes con valores desde 1992. Educación de calidad con enfoque cooperativo y desarrollo integral.</p>

                {{-- <h5>Comunicados Recientes</h5>
                <ul>
                    <li><a href="{{ route('comunicados.detalle', 1) }}">Inicio de clases 2026 - 10 Marzo</a></li>
                    <li><a href="{{ route('comunicados.detalle', 2) }}">Proceso de matrícula extraordinaria</a></li>
                    <li><a href="{{ route('comunicados.detalle', 3) }}">Talleres de verano 2026</a></li>
                    <li><a href="{{ route('comunicados.detalle', 4) }}">Convocatoria para becas 2026</a></li>
                    <li><a href="{{ route('comunicados') }}">Ver todos los comunicados →</a></li>
                </ul> --}}
            </div>
            
            <!-- Datos de Contacto -->
            <div class="col-lg-4 col-md-12 footer-col">
                <h5>Contacto</h5>
                <div class="footer-contact">
                    <p><i class="bi bi-geo-alt"></i> Av. Putumayo #981 Iquitos-Loreto</p>
                    <p><i class="bi bi-telephone"></i> +51 973 891 800</p>
                    {{-- <p><i class="bi bi-envelope"></i> colcoopcesarvallejo@gmail.com</p> --}}
                    {{-- <p><i class="bi bi-clock"></i> Lunes a Viernes: 7:30 am - 4:30 pm</p> --}}
                </div>
                <div class="mt-4">
                    <h6>Síguenos en redes sociales</h6>
                    <div class="social-links mt-3">
                        <a href="https://www.facebook.com/share/17593eMwsZ/" class="text-light me-3"><i class="bi bi-facebook fs-1"></i></a>
                        {{-- <a href="#" class="text-light me-3"><i class="bi bi-instagram fs-5"></i></a>
                        <a href="#" class="text-light me-3"><i class="bi bi-twitter fs-5"></i></a>
                        <a href="#" class="text-light"><i class="bi bi-youtube fs-5"></i></a> --}}
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