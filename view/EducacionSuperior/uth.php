<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link de icoco -->
  <link rel="icon" type="image/png" href="/logo.ico" />

  <!-- Link de las hojas de estilos -->
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/style.css">

  <!-- Link de el estilo de las fuentes -->
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

  <!-- Links de iconos -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

  <title>Universidad Tecnologia de Honduras - Municipalidad de Siguatepeque</title>
</head>

<body>
  <!-- Barra de navegacion -->
  <header class="header">
    <input type="checkbox" id="btn-menu" />
    <img class="logo" src="/img/logoMuni.png" alt="" srcset="">
    <p class="msg">Municipalidad de Siguatepeque</p>
    <label for="btn-menu"><i class="fa fa-bars" id="btnMenu"></i></label>
    <nav class="menu">
      <ul>

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
            <li><a href="/view/ConoceSiguatepeque/contactos.php">Números Telefónicos</a></li>
            <li><a href="/view/Relax/relax.php">Lugares Populares</a></li>
            <li><a href="/view/ConoceSiguatepeque/educacionSuperior.php">Educación Superior</a></li>
          </ul>
        </li>
        <li><a href="">Login Linea Base</a></li>
        <li class="libuscar">
          <i class="fa fa-search"></i>
          <input type="search" placeholder="Buscar..">
        </li>
      </ul>
    </nav>

  </header>
  <!-- Div final de la barra de navegación -->



  <!-- Contenido -->
  <div class="universidad">
    <p class="texto">Universidad Tecnologica de Honduras</p>
    <img src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2019/11/uthlogo-e1573588651204.png" alt=""
      class="imagenUniversidad">
    <p class="contenido">
      En la UTH nos comprometemos a servir a la sociedad brindando excelencia académica,
      con tecnología de avanzada y los mejores profesionales académicos.
    </p>
    <p class="contenido">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.933030300016!2d-87.8355035857577!3d14.602890789801023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f65950a8f7e9a6f%3A0xea1885571ee3e75e!2sUth!5e0!3m2!1ses!2shn!4v1583939274626!5m2!1ses!2shn"
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
        tabindex="0"></iframe>
    </p>
    <div class="button">
      <a href="https://www.facebook.com/uthsigua/">Facebook</a>
      <a href="https://uth.hn/">Sitio Web</a>
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