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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />


  <title>Oficina de la Mujer y Niñez - Municipalidad de Siguatepeque </title>
</head>

<body>
  <!-- Barra de navegacion -->
  <header class="header">
    <input type="checkbox" id="btn-menu" />
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
            <li><a href="/view/Contactos/contactos.php">Números Telefónicos</a></li>
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
    <img class="logo" src="/img/logoNuevo.png" alt="" srcset="">
    <p class="msg">Municipalidad de Siguatepeque</p>
  </header>
  <!-- Div final de la barra de navegación -->




  <!-- Div de datos del departamento -->
  <div class="oficina">
    <p class="texto">OFICINA DE LA MUJER Y NIÑEZ</p>
    <img src="" alt="" class="imagenDepto">
    <p class="contenido">Incidir y participar activamente en los procesos de gestión, asignación presupuestaria,
      implementación y monitoreo de las políticas públicas municipales que beneficien el desarrollo integral de
      las
      mujeres y la niñez y sus organizaciones en el Municipio.</p>

    <ol type="A" class="contenido">
      <li>Preparar y proponer políticas públicas, convenios y acciones permanentes a favor de las mujeres y la
        niñez.
      </li>
      <li>Mantener un registro de organizaciones de mujeres y la niñez e indicadores básicos que muestren la
        situación
        de
        la mujer y los niños (as) en el municipio</li>
      <li>Incidir en la inclusión del enfoque de género y la pertinencia cultural en la planificación y
        presupuesto
        de
        La Municipalidad.</li>
      <li>Recibir y remitir denuncias de violaciones de los derechos de la niñez y mujer</li>
      <li>Promover cursos de sensibilización y capacitación de manera constante al personal y la Corporación
        Municipal
        en la práctica de la equidad.</li>
      <li>Promover la coordinación interinstitucional en favor de las mujeres y la niñez del municipio</li>
      <li>Brindar información, asesoría y orientación a las mujeres y niñez del municipio sobre sus derechos
        humanos.
      </li>
      <li>Servir de enlace entre las autoridades municipales y las mujeres y niñez organizadas.</li>
      <li>Propiciar espacios para compartir experiencias sobre la gestión a favor de la equidad de género</li>
      <li>Canalizar ante los entes competentes las necesidades y demandas que se presentan a la oficina municipal
        de
        la
        mujer y la niñez. </li>
      <li>Asumir la gestión de los proyectos del Plan de Inversión Municipal de su competencia. </li>

    </ol>

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