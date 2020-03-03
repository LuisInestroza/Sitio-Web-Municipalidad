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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

  <title>Educación Superior - Municipalidad de Siguatepeque</title>
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


  <!-- Contenido de educación superior -->
  <div>
    <p class="texto">Universidades En Siguatepeque</p>
    <div class="educacionSuperior">
      <div class="contenedor">
        <img src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2019/11/uthlogo-e1573588651204.png" alt="" class="imagen">
        <a href="/view/EducacionSuperior/uth.php">
          <p>Universidad Técnologica de Honduras</p>
        </a>
      </div>
      <div class="contenedor">
        <img src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2019/11/umh1-e1573588542345-740x460.png" alt="" class="imagen">
        <a href="/view/EducacionSuperior/umh.php">
          <p>Universidad Metropolitana de Honduras</p>
        </a>
      </div>
      <div class="contenedor">
        <img src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2019/11/LOGOUNACIFOR-e1573590546926.png" alt="" class="imagen">
        <a href="/view/EducacionSuperior/unacifor.php">
          <p>UNACIFOR Siguatepeque Honduras</p>
        </a>
      </div>
      <div class="contenedor">
        <img src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2019/11/LOUNFM-740x460.jpg" alt="" class="imagen">
        <a href="/view/EducacionSuperior/upnfm.php">
          <p>Universidad Pedagógica Francisco Morazán</p>
        </a>
      </div>
      <div class="contenedor">
        <img src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2019/11/logo-unah-740x460.jpg" alt="" class="imagen">
        <a href="/view/EducacionSuperior/unah.php">
          <p>UNAH-CRAED Siguatepeque Honduras</p>
        </a>
      </div>
      <div class="contenedor">
        <img src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2019/11/logounicah-e1573591204254-740x460.png" alt="" class="imagen">
        <a href="/view/EducacionSuperior/unicah.php">
          <p>Universidad Católica de Honduras</p>
        </a>
      </div>
    </div>

  </div>
  <!-- Final del div -->


  <!-- Footer -->
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