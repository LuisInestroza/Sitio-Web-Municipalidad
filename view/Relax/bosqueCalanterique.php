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


    <title>Bosque Calanterique - Municipalidad de Siguatepeque</title>
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



    <div class="turismo">
        <p class="texto">Bosque Calanterique</p>
        <img src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2019/10/calanterique2.jpeg" alt="" class="imagenTurismo">
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

</html>