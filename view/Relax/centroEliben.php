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
    <title>Centro Turístico Eliben - Municipalidad de Siguatepeque</title>
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


    <!-- Contenido -->

    <div class="turismo">
        <p class="texto">Centro Turístico Eliben</p>
        <img src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2016/01/eliben2-1170x659.jpg" alt="" class="imagenTurismo">
        <div class="button">
            <a href="https://www.facebook.com/pg/Centro-Turistico-Eliben-657199114477280/about/?ref=page_internal">Facebook</a>
        </div>
    </div>




    <!-- footer -->
    <footer class="footer">
        <div class="">
            <p>Links</p>
            <div class="links">
                <ul style="text-decoration: none;">
                    <li><a href="https://www.presidencia.gob.hn/">Casa Presidencial</a></li>
                    <li><a href="">Noticias</a></li>
                    <li><a href="">Agenda</a></li>
                    <li><a href="">Contacto</a></li>
                </ul>
            </div>
        </div>
        <div class="">
            <p>Empresa</p>
            <div>
                <ul>
                    <li><a href="">Misión</a></li>
                    <li><a href="">Visión</a></li>
                    <li><a href="">Valores</a></li>
                </ul>
            </div>

        </div>


        <div class="">
            <p>Noticias Recientes</p>
        </div>


        <div class="contenedorRedes">
            <p>Redes Sociales</p>
            <div class="links">
                <ul class="icons">
                    <li>
                        <a href="https://es-la.facebook.com/siguatepequealcaldia" class="fab fa-facebook"></a>
                    </li>
                    <li>
                        <a href="" class="fab fa-twitter"></a>
                    </li>
                    <li>
                        <a href="" class="fab fa-google-plus"></a>
                    </li>
                    <li>
                        <a href="" class="fab fa-linkedin"></a>
                    </li>
                </ul>
            </div>

        </div>
        <p>Municipalidad de Siguatepeque &copy Todos los derechos reservados 2020</p>
    </footer>
</body>
<!-- Script de las funciones de animaciones de JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="/js/slider.js"></script>
<script src="/js/menu.js"></script>


</html>