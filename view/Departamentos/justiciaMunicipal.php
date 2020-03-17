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

  <!-- Estilo de la fuente -->
  <!-- Link de el estilo de las fuentes -->
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

  <!-- Links de iconos -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

  <title>Justicia Municipal - Municipalidad de Siguatepeque</title>
</head>

<body>
  <!-- Barra de navegacion -->
  <header class="header">
    <input type="checkbox" id="btn-menu" />
    <img class="logo" src="/img/logoMuni.png" alt="" srcset="">
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



  <!-- Contenido de la navegación -->
  <div class="oficina">
    <p class="texto">Justicia Municipal</p>
    <img src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2019/11/justiciamunicipal.jpg" alt=""
      class="imagenDepto">
    <p class="contenido">El departamento de <b>Justicia Municipal</b> ofrece los servicios a la ciudadania: </p>

    <ol type="1" class="contenido">
      <li>Registro de armas</li>
      <li>Registro de fierros</li>
      <li>Registro de contrato</li>
      <li>Permisos de cierre de calles</li>
      <li>Permisos de sonido</li>
      <li>Permiso de traslado de ganado</li>
      <li>Traspasos</li>
      <li>Conciliaciones. Aplicar y hacer cumplir las disposiciones establecidas en la Ley de
        municipalidades y sus anexos, Ley de Policía y Convivencia Social, Plan de
        Arbitrios, Reglamentos, Acuerdos, Ordenanzas y Comunicados Municipales.</li>
      <li>Garantizar el cumplimiento de las Ordenanzas emitidas por el pleno de
        la Corporación Municipal, así como el establecimiento del orden público
        mediante la aplicación de las disposiciones establecidas en la Ley de
        Policía y Convivencia Social, Plan de Arbitrios, Participar en operativos
        de coordinación con otras entidades policiales, así como brindarles, en
        su caso, el apoyo que conforme a derecho proceda.</li>
      <li>Emitir y firmar autorizaciones para el destace o sacrificio de ganado,
        respaldada esta acción en la respectiva carta de venta.</li>
      <li>Promover la coordinación con las Unidades Municipales y otras
        entidades de ley que estén relacionadas.</li>
      <li>Extender documentos de matrícula herramientas para herraje, basado
        en la propiedad de los mismos.</li>
      <li>Supervisar la vigencia de permisos de operación de los distintos
        negocios del municipio y cancelar los negocios que operen
        clandestinamente.</li>
      <li>Recomendar sobre asuntos de su competencia y responder por sus
        actuaciones ante el Sr. Alcalde.</li>
      <li>Custodiar en diferentes zonas de del municipio, la seguridad de los
        ciudadanos.</li>
      <li>Custodiar la Municipalidad.</li>
      <li>Supervisar la entrada del personal a la Municipalidad. Custodiar todas
        las actividades que suceden dentro del edificio.</li>
      <li>Otras que el Alcalde le designe conforme a ley.</li>
      <li>Supervisar a los vigilantes en general.</li>
      <li>Delegar actividades al conserje municipal</li>

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