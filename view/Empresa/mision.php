<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link de icoco -->
  <link rel="icon" type="image/png" href="logo.ico" />

  <!-- Link de las hojas de estilos -->
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/bootstrap-grid.css">
  <link rel="stylesheet" href="/css/bootstrap-grid.css.map">
  <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="/css/bootstrap-grid.min.css.map">
  <link rel="stylesheet" href="/css/bootstrap-reboot.css">
  <link rel="stylesheet" href="/css/bootstrap-reboot.css.map">
  <link rel="stylesheet" href="/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="/css/bootstrap-reboot.min.css.map">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link rel="stylesheet" href="/css/bootstrap.css.map">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css.map">

  <!-- Link de el estilo de las fuentes -->
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

  <!-- Links de iconos -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

  <title>Misión - Municipalidad de Siguatepeque</title>
</head>

<body>
  <!-- Barra de navegacion -->
  <header class="header">
    <input type="checkbox" id="btn-menu" />
    <img class=" logo" src="/img/logoMuni.png" alt="" srcset="">
    <?php
      include "../Variables/Variables.php";
      echo "<p class=msg>$msg</p>"  
    ?>
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

  <div class="contenido">
    <p class="texto">Misión</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quas voluptate, autem molestias deleniti
      temporibus quaerat minus corrupti et natus rerum repellat cum odit inventore. Laborum, illo vero. In, veniam.</p>

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
          <li><a href="/view/Empresa/mision.php">Misión</a></li>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="/js/menu.js"></script>
<script src="/js/slider.js"></script>

</html>