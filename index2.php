<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Links de iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <title>Prueba de navegación</title>
</head>

<body>
    <header>
        <div class="menu_bar">
            <a href="#" class="bt-menu"><i class="fa fa-bars"></i>Menú</a>
        </div>

        <nav>
            <ul>
                <li><a href=" #"><span class="icon-house"></span>Inicio</a></li>
                <li><a href="#"><span class="icon-suitcase"></span>Trabajos</a></li>
                <li class="submenu">
                    <a href="#"><span class="icon-rocket"></span>Proyectos<span class="caret icon-arrow-down6"></span></a>
                    <ul class="children">
                        <li><a href="#">SubElemento #1 <span class="icon-dot"></span></a></li>
                        <li><a href="#">SubElemento #2 <span class="icon-dot"></span></a></li>
                        <li><a href="#">SubElemento #3 <span class="icon-dot"></span></a></li>
                    </ul>
                </li>
                <li><a href="#"><span class="icon-earth"></span>Servicios</a></li>
                <li><a href="#"><span class="icon-mail"></span>Contacto</a></li>
            </ul>
        </nav>
    </header>

</body>
<script src="js/menu.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>

</html>