<!-- Header -->
<?php
$tittle = "Universidad Católica de Honduras - Municipalidad de Siguatepeque";
require_once '../layouts/header.php';
?>


<div class="tittle">
    <h1>UNIVERSIDAD CATÓLICA DE HONDURAS</h1>
</div>
<!-- Contenido -->
<div class="universidad">
    <!-- Aside -->
    <aside class="aside">
        <div>
            <h4>CARRERAS</h4>
            <ol type="disc">
                <li><a href="https://www.unicah.edu/programaCivil.html">Ingeniería Civil</a></li>
                <li><a href="https://www.unicah.edu/programaIndustrial.html">Ingeniería Industrial</a></li>
                <li><a href="https://www.unicah.edu/programaComputacion.html">Ingeniería en Ciencias de la
                        Computación</a></li>
                <li><a href="https://www.unicah.edu/programaGestion.html">Gestión Estratégica de Empresas</a></li>
                <li><a href="https://www.unicah.edu/programaDerecho.html">Derecho</a></li>
                <li><a href="https://www.unicah.edu/programaFinanzas.html">Finanzas</a></li>
                <li><a href="https://www.unicah.edu/programaPsicologia.html">Psicología</a></li>
                <li><a href="https://www.unicah.edu/programaMedicina.html">Medicina (1re Año)</a></li>
                <li><a href="https://www.unicah.edu/programaCirugiaD.html">Cirugía Dental (1re Año)</a></li>
                <li><a href="https://www.unicah.edu/programaEnfermeria.html">Enfermería (1re Año)</a></li>
            </ol>
        </div>
        <!-- Contenido de redes sociales -->
        <div class="contenedorContactos">
            <h4>REDES</h4>
            <div>
                <ul class="icons">
                    <li>
                        <a href="https://www.unicah.edu" class="globe">
                            <i class="fas fa-globe-americas"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://es-la.facebook.com/UNICAHCJS/" class="facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/unicahjs" class="twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/unicahcjs/" class="instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div>
            <h4>UBICACIÓN</h4>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15443.357535311456!2d-87.83542913569059!3d14.608223883254785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f65950c2a62de1b%3A0x35ced69748e8107c!2sUniversidad%20Cat%C3%B3lica%20de%20Honduras!5e0!3m2!1ses!2shn!4v1583939606494!5m2!1ses!2shn"></iframe>

        </div>

    </aside>

    <div class="informacion-univeridad">

        <img src="/img/logosUniversidades/logoUnicah.png">
        <p>
            <b>Valores</b><br>
            Justicia, Orden, Paz, Amor y Verdad <br><br>
            Los valores de la Universidad Católica son aquellas cosas esenciales que guían la forma en que llevamos a
            cabo
            nuestra misión. Cada valor proporciona un punto focal para los patrones de por vida que pretendemos
            desarrollar en
            nuestros estudiantes.
        </p><br>
        <p>
            <b>Visión</b> <br>
            Seremos una institución con un sistema integrado, certificado y acreditado de educación, donde la formación
            católica es nuestro pilar fundamental en el desarrollo de profesionales líderes, con alta capacidad
            intelectual,
            valores claros y consecuencia critica y principios éticos que contribuyan a la construcción de una nueva
            sociedad.
        </p>
        <br>
        <br>
        <p>
            <b>Misión</b><br>
            Somos una universidad católica, que garantiza la presencia del catolicismo en la educación superior de
            Honduras y
            nuestra formación integral es en función de las distintas dimensiones del ser humano; lo moral, lo
            espiritual, lo
            científico, lo técnico y lo religioso.
        </p>
        <br>
        <p>
            <b>Política de Calidad</b><br>
            Somos una gran familia educativa y nuestro pilar fundamental la formación Católica. El compromiso por la
            excelencia académica nos lleva a mejorar en forma continua los servicios de educación que brindamos,
            basándonos
            en nuestros valores fundamentales.
        </p>
    </div>
</div>

<!-- footer -->
<?php require_once '../config/db.php'; ?>
<?php require_once '../layouts/footer.php'; ?>