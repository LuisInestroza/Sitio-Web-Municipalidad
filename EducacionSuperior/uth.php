<!-- Header -->
<?php
$tittle = "Universidad Tecnológica de Honduras - Municipalidad de Siguatepeque";
require_once '../layouts/header.php';
?>


<div class="tittle">
    <h1>UNIVERSIDAD TECNOLÓGICA DE HONDURAS</h1>
</div>
<!-- Contenido -->
<div class="universidad">
    <aside class="aside">
        <!-- Carreras de la universidad -->
        <div>
            <h4>Carreras</h4>
            <ol type="disc">
                <li><a href="https://www.uth.hn/carrera/contaduria-financiera/">Licenciatura Contaduría Financiera</a>
                </li>
                <li><a href="https://www.uth.hn/carrera/gerencia-de-negocios/">Licenciatura Gerencia de Negocios</a>
                </li>
                <li><a href="https://www.uth.hn/carrera/marketing/">Licenciatura Marketing</a></li>
                <li><a href="https://www.uth.hn/carrera/derecho/">Licenciatura Derecho</a></li>
                <li><a href="https://www.uth.hn/carrera/computacion/">Ingeniería en Computación</a></li>
                <li><a href="https://www.uth.hn/carrera/financiera/">Ingeniería Financiera</a></li>

            </ol>
        </div>
        <!-- Contenedor de redes -->
        <div>
            <div class="contenedorContactos">
                <h4>Redes</h4>
                <div>
                    <ul class="icons">
                        <li><a href="http://www.uth.hn/" class="fas fa-globe-americas"></a></li>
                        <li><a href="https://es-la.facebook.com/uthsigua" class="fab fa-facebook"></a></li>
                        <li><a href="https://www.instagram.com/uthedu/" class="fab fa-twitter"></a></li>
                        <li><a href="https://twitter.com/uthedu" class="fab fa-instagram"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Contenedor Ubicación -->
        <div>
            <h4>Ubicación</h4>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.933030300016!2d-87.8355035857577!3d14.602890789801023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f65950a8f7e9a6f%3A0xea1885571ee3e75e!2sUth!5e0!3m2!1ses!2shn!4v1583939274626!5m2!1ses!2shn"></iframe>
        </div>
    </aside>


    <!-- Contenido  del sitio-->
    <div class="informacion-univeridad">
        <img src="/img/logosUniversidades/logoUTH.png" alt="">
        <p>
            La UTH es una institución de mucho prestigio y de mayor crecimiento de Honduras. Estamos interesados en que
            los
            estudiantes y docentes tengan la oportunidad de enfrentar los desafíos en un mundo globalizado, con una
            economía
            de libre mercado y altamente competitiva. <br><br>

            En la UTH nos comprometemos a servir a la sociedad brindando excelencia académica, con tecnología de
            avanzada y
            los mejores profesionales académicos.
        </p>
        <br>

        <p>
            <b>Misión</b> <br>
            Brindar educación superior de excelencia, mediante la preparación de profesionales con capacidad y
            liderazgo,
            que
            contribuya al desarrollo económico y social de Honduras, dentro del sistema universal de libre empresa.
        </p>
        <p>
            <b>Visión</b> <br>
            La UTH se mantendrá a la vanguardia y liderazgo en la educación superior, apoyando el desarrollo socio
            económico
            y social de Honduras.
        </p>

        <p>
            <b>Responsabilidad</b> <br>
            En la UTH nos comprometemos a servir a la sociedad brindando excelencia académica, con tecnología de
            avanzada y
            los mejores profesionales académicos, enfocados a la mejora continua, satisfaciendo las necesidades de
            nuestros
            estudiantes y de la empresa privada, pública y partes interesadas.
        </p>
    </div>

</div>

<!-- footer -->
<?php require_once '../config/db.php'; ?>
<?php require_once '../layouts/footer.php';?>