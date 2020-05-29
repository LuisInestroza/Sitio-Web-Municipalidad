<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Link de icoco -->
  <link rel="icon" type="image/png" href="/logo.ico" />

  <!-- Link de las hojas de estilos  Principales-->
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/style.css">


  <!-- Bootstrap -->
  <link rel="stylesheet" href="/css/bootstrap.css">


  <link rel="stylesheet" href="/css/tabs.css">
  <link rel="stylesheet" href="/css/tabstyles.css">




  <!-- Link de el estilo de las fuentes -->
<link href="https://fonts.googleapis.com/css2?family=Asap:wght@500&display=swap" rel="stylesheet"> 

  <!-- Links de iconos -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

  <title><?php echo $tittle ?></title>
</head>

<body>



  <!-- Botón de desplazar hacia arriba -->
  <span class="arriba">
    <i class="fa fa-angle-up"></i>
  </span>

  <!-- Barra de navegación -->
  <header class="header">
    <!-- Action Bar Responsive -->
    <div class="actionBar">
      <img class="logo" src="/img/logoMuni.png" alt="" srcset="">
      <p class="msg">
        Municipalidad de Siguatepeque
        <br>Gobierno Municipal (2018-2020)
      </p>
      <button onclick="return mostrarOcultar('hero')" id="buscarResponsive" class="buscarResponsive">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </div>
    <!-- Botón de Sub-Menú Responsive -->
    <input type="checkbox" id="btnMenu">
    <label for="btnMenu"><i class="fas fa-bars"></i></label>

    <nav class=menu>
      <ul>
        <li>
          <a href="/index.php">
            <i class="fas fa-home"></i>
            <b>Inicio</b>
          </a>
        </li>
        <li>
          <a href="/view/Noticias/noticias.php">
            <i class="fas fa-newspaper"></i>
            <b>Noticias</b>
          </a>
        </li>
        <li class="subMenu">
          <a href="#" onclick="return girarFlechaDepartamentos('flechaUno')" id="btnDepartamentos">
            <i class="fas fa-landmark"></i>
            <b>Gobierno</b>
            <i id="flechaUno" class="fa fa-angle-down"></i>
          </a>
          <ul class="children">
            <li>
              <a href="/view/Gobierno/alcaldeMunicipal.php">
                <i class="fa fa-user-tie"></i>
                <b>Alcalde Municipal</b>
              </a>
            </li>
            <li>
              <a href="/view/Gobierno/departamentosMunicipalidad.php">
                <i class="fa fa-building"></i>
                <b>Departamentos</b>
              </a>
            </li>
            <li>

              <a href="/view/Gobierno/regidores.php">
                <i class="fa fa-users"></i>
                <b>Regidores</b>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="https://portalunico.iaip.gob.hn/portal/index.php?portal=65">
            <i class="fas fa-handshake"></i>
            <b>Portal de Transparencia</b>
          </a>
        </li>
        <li class="subMenu">
          <a onclick="return girarFlechaConoce('flechaDos')" id="btnConoce" href="#">
            <i class="fas fa-info-circle"></i>
            <b>Conoce Siguatepeque</b>
            <i id="flechaDos" class="fa fa-angle-down"></i>
          </a>
          <ul class="children">
            <li>

              <a href="/view/ConoceSiguatepeque/contactos.php">
                <i class="fa fa-phone-square" style="transform: rotate(90deg);"></i>
                <b>Números Telefónicos</b>
              </a>
            </li>
            <li>

              <a href="/view/Relax/relax.php">
                <i class="fa fa-map-marked"></i>
                <b>Lugares Populares</b>
              </a>
            </li>
            <li>
              <a href="/view/ConoceSiguatepeque/educacionSuperior.php">
                <i class="fa fa-graduation-cap"></i>
                <b>Educación Superior</b>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="http://168.228.194.98:8081/elbmun/app/page-signin.php">
            <i class="fas fa-user-lock"></i>
            <b>Login Linea Base</b>
          </a>
        </li>

      </ul>
    </nav>
  </header>

  <!-- Barra de búsqueda -->
  <div id="hero" class="hero">
    <form class="busqueda">
      <fieldset>
        <input type="search" placeholder="Buscar..">
        <button type="submit">Buscar</button>
      </fieldset>
    </form>
  </div>