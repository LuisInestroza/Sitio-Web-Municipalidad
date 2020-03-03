<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link de icoco -->
    <link rel="icon" type="image/png" href="/logo.ico" />
    <!-- Hojas de estilo -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/normalize.css">

    <!-- Estilo de la fuente -->
    <!-- Link de el estilo de las fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- Links de iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    <title>Desarrollo Comunitario - Municipalidad de Siguatepeque</title>
</head>

<body>
    <!-- Barra de navegacion -->
    <header class="header">
        <input type="checkbox" id="btn-menu" />
        <label for="btn-menu"><i class="fa fa-bars" id="btnMenu"></i></label>
        <nav class="menu">
            <ul>
                <li>
                    <div class="buscarNav">
                        <input class="buscarNav" type="search" name="" id="" placeholder="Buscar">
                        <i class="fa fa-search"> </i>
                    </div>
                </li>
                <li><a href="/index.php">Inicio</a></li>
                <li><a href="">Noticias</a></li>
                <li class="submenu"><a href="#">Gobierno<i class="fa fa-angle-down "></i></a>
                    <ul class="children">
                        <li><a href="/view/Gobierno/alcaldeMunicipal.php">Alcalde Municipal</a></li>
                        <li><a href="/view/Gobierno/departamentosMunicipalidad.php">Departamentos </a></li>
                        <li><a href="/view/Gobierno/regidores.php">Regidores</a></li>
                    </ul>
                </li>
                <li><a href="">Portal de Transparencia</a></li>
                <li class="submenu"><a href="#">Conoce a Siguatepeque<i class="fa fa-angle-down "></i></a>
                    <ul class="children">
                        <li><a href="/view/Contactos/contactos.php">Números Telefónicos</a></li>
                        <li><a href="/view/Relax/relax.php">Lugares Populares</a></li>
                        <li><a href="/view/ConoceSiguatepeque/educacionSuperior.php">Educación Superior</a></li>
                    </ul>
                </li>
                <li><a href="">Login Linea Base</a></li>
            </ul>
        </nav>
        <img class="logo" src="/img/logoNuevo.png" alt="" srcset="">
        <p class="msg">Municipalidad de Siguatepeque</p>
    </header>
    <!-- Div final de la barra de navegación -->

    <!-- Input de buscar -->
    <div class="buscarIndex">
        <input class="buscar" type="search" name="" id="" placeholder="Buscar">
        <i class="fa fa-search"> </i>
    </div>
    <!-- Div final de la barra de navegación -->


    <!-- Contenido de catastro -->
    <div class="oficina">
        <p class="texto">Desarrollo Comunitario</p>
        <img src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2019/11/desarrollo-comunitario.png" alt="" class="imagenDepto">
        <p class="contenido">Este departamento es el encargado de promover, planificar, organizar, dirigir, coordinar y supervisar todas las actividades tendientes a incentivar la participación ciudadana, la capacitación comunitaria y el desarrollo local, Apoyan éste departamento la Oficina Municipal de la Mujer, la UMA, Programa de la Juventud Niñez y Adolescencia COMVIDA, y La UMA, (Unidad Municipal Ambiental) en relación y colaboración del resto de los diferentes.</p>

        <ol type="1" class="contenido">
            <li>Administrar el departamento conforme a lo establecido en la Ley de Municipalidades y su
                Reglamento en lo concerniente a la participación ciudadana.</li>
            <li>Formular el Plan de Trabajo Anual basado en el Plan Estratégico y Plan Anual Operativo de la Municipalidad</li>
            <li>Presentar al Alcalde su respectivo plan de trabajo con su presupuesto.</li>
            <li>Presentar al Alcalde Municipal mensual, anualmente informes del trabajo realizado, problemas encontrados y alternativas de solución al igual del detalle de gastos a la fecha</li>
            <li>Establecer mecanismos y procedimientos de gestión y coordinación de la participación comunitaria que incorpore a la comunidad y Municipalidad en los proyectos de desarrollo local.</li>
            <li>Organizar y apoyar al COMDEM, Comisionado Municipal, Alcaldes Auxiliares y otras estructuras que fortalezcan el desarrollo organizativo local.</li>
            <li>Organizar y asegurarse que se celebren por lo menos cinco Cabildos Abiertos al año</li>
            <li>Desarrollar programas de capacitación municipal a funcionarios y empleados municipales y la comunidad en general que fomenten la cultura de participación ciudadana como una nueva concepción de desarrollo local.</li>
            <li>Promover el desarrollo de acciones de promoción y capacitación con las organizaciones comunales del municipio, lo que implica la elaboración de diagnósticos comunitarios, la promoción de programas y proyectos, identificación de grupos vulnerables.</li>
            <li>Coordinar la asistencia en momentos de crisis o desgracia.</li>
            <li>Efectuar estudios en la comunidad sobre situaciones particulares especialmente a nivel social y económico.</li>

        </ol>
    </div>



    <!-- footer -->

    <footer class="footer">
        <div class="contenedor">
            <p>Links</p>
            <div class="links">
                <a href="https://www.presidencia.gob.hn/">Casa Presidencial</a>
                <a href="">Noticias</a>
                <a href="">Agenda</a>
                <a href="">Contacto</a>
            </div>
        </div>
        <div class="contenedor">
            <p>Facebook</p>
            <p></p>
            <a href="https://www.facebook.com/siguatepequealcaldia/"><i class="fab fa-facebook"></i></a>

        </div>
        <div class="contenedor">
            <p>Noticias Recientes</p>
        </div>
        <p>Municipalidad de Siguatepeque &copy 2020. All rights reserved</p>

    </footer>


</body>
<!-- Script de las funciones de animaciones de JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="/js/slider.js"></script>
<script src="/js/menu.js"></script>


</html>