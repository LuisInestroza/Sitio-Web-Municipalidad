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

  <!-- Estilo del slider de noticias -->

  <link rel="stylesheet" href="/css/tabs.css">
  <link rel="stylesheet" href="/css/tabstyles.css">

  <!-- Link de el estilo de las fuentes -->
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

  <!-- Links de iconos -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

  <title><?php echo $tittle ?></title>
</head>

<body>
  <!-- Boton de desplaxar hacia arriba -->
  <span class="arriba"><i class="fa fa-angle-up"></i></span>
  <!-- Barra de navegacion -->

  <header class="header">
    <img class="logo" src="/img/logoMuni.png" alt="" srcset="">
    <p class="msg">
      Municipalidad de Siguatepeque
      <br>
      Gobierno Municipal (2018-2020)
    </p>
    <input type="checkbox" id="btnMenu">
    <label for="btnMenu"><i class="fas fa-bars"></i></label>

    <nav class=menu>
      <ul>
        <li><a href="/index.php"><b>Inicio</b></a></li>
        <li><a href=""><b>Noticias</b></a></li>
        <li class="subMenu"><a href="#"><b>Gobierno</b><i class="fa fa-angle-down flechaUno"></i></a>
          <ul class="children">
            <li><a href="/view/Gobierno/alcaldeMunicipal.php">Alcalde Municipal</a></li>
            <li><a href="/view/Gobierno/departamentosMunicipalidad.php">Departamentos </a></li>
            <li><a href="/view/Gobierno/regidores.php">Regidores</a></li>
          </ul>
        </li>
        <li><a href=""><b>Portal de Transparencia</b></a></li>
        <li class="subMenu"><a href="#"><b>Conoce Siguatepeque</b><i class="fa fa-angle-down flechaDos"></i></a>
          <ul class="children">
            <li><a href="/view/ConoceSiguatepeque/contactos.php">Números Telefónicos</a></li>
            <li><a href="/view/Relax/relax.php">Lugares Populares</a></li>
            <li><a href="/view/ConoceSiguatepeque/educacionSuperior.php">Educación Superior</a></li>
          </ul>
        </li>
        <li><a href=""><b>Login Linea Base</b></a></li>
      </ul>
    </nav>
  </header>

  <!-- Barra de búsqueda -->
  <div class="hero">
    <form class="busqueda">
      <fieldset>
        <input type="search" placeholder="Buscar..">
        <button type="submit"><i class="fas fa-search"></i></button>
      </fieldset>
    </form>
  </div>