<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

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


    <title>Oficina del Alcalde - Municipalidad de Siguatepeque</title>


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




    <!-- Div de datos de la ofina del alcalde -->
    <div class="oficina">
        <p class="texto">OFICINA DEL ALCALDE</p>
        <img class="imagenDepto" src="/img/Departamentos/alcaldia.jpg" class="imagen" alt="oficina-alcalde">
        <p class="contenido">Articulo 43, 44 y 47 - Ley de Municipalidades Artículo 39 y 40-Reglamento de la Ley de Municipalida Atribuciones del Alcalde Municipal.</p>
        <br>
        <p class="contenido">Las facultades de administración general y representación legal de la municipalidad corresponden al Alcalde Municipal</p>
        <p class="contenido">El Alcalde Municipal es la máxima autoridad ejecutiva dentro del término municipal y sancionara los acuerdos, ordenanzas y resoluciones emitidos por la Corporación Municipal, convirtiéndolas en normas de obligatorio cumplimiento para los habitantes y demás autoridades. En consecuencia, toda otra autoridad, civil o de policía, acatara, colaborara y asistirá en el cumplimiento de dichas disposiciones</p>
        <p class="contenido">Hacer efectivo por la vía administrativa y judicial, el cobro de los impuestos, tasas, servicios, contribuciones, multas y recargos establecidos por la Ley y Plan de Arbitrios emitidas por la Corporación Municipal en su caso</p>
        <p class="contenido">Otorgar poderes especiales para pleitos a profesionales del derecho para que demanden o defiendan a la Municipalidad en juicios civiles, criminales, administrativos, contencioso administrativos, labores y otros</p>
        <p class="contenido">Celebrar y otorgar Contratos y concesiones públicas o privadas, de conformidad con lo que establece el Art. 10 del reglamento de la Ley de Municipalidades Funciones</p>
        <p class="contenido">Presidir todas las sesiones, asambleas, reuniones y demás actos que realice la corporación</p>
        <p class="contenido">Presentar a la Corporación Municipal un informe trimestral sobre su gestión y uno semestral al gobierno central por conducto de la Secretaria del Estado en los Despachos de Gobernación y Justicia</p>
        <p class="contenido">Someter a consideración de la Corporación Municipal los instrumentos siguientes: a) Presupuesto por programas del plan Operativo Anual b) Plan de Arbitrios c) Ordenanzas Municipales; d) Reconocimientos que se otorguen a personas e instituciones por relevantes servicios prestados a la comunidad. e) Manual de clasificación de Puestos y Salarios f) Reglamentos Especial; y, g) Las demás que de conformidad con la Ley de Municipalidades sean de competencia de la Corporación</p>
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