<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Link de icoco -->
  <link rel="icon" type="image/png" href="logo.ico" />

  <!-- Link de las hojas de estilos  Principales-->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css.map">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css.map">
  <link rel="stylesheet" href="css/bootstrap-reboot.css">
  <link rel="stylesheet" href="css/bootstrap-reboot.css.map">
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css.map">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.css.map">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css.map">

  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->

  <!-- Link de el estilo de las fuentes -->
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

  <!-- Links de iconos -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

  <title>Municipalidad de Siguatepeque</title>
</head>

<body>
  <!-- Banner -->
  <img class="banner" src="img/banner2.png" alt="">

  <!-- Barra de navegacion -->
  <header class="header">
    <img class=" logo" src="/img/logoMuni.png" alt="" srcset="">
    <!-- Llamar a la variable -->
    <?php 
      include './view/Variables/Variables.php' ; 
      echo "<p class=msg>$msg</p>"
    ?>
    <!-- Final -->
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
            <li><a href="/view/ConoceSiguatepeque/contactos.php">Números Telefónicos</a></li>
            <li><a href="/view/Relax/relax.php">Lugares Populares</a></li>
            <li><a href="/view/ConoceSiguatepeque/educacionSuperior.php">Educación Superior</a></li>
          </ul>
        </li>
        <li><a href="">Login Linea Base</a></li>
        <div>
        </div>
        <li class="libuscar">
          <i class="fa fa-search"></i>
          <input type="search" placeholder="Buscar..">
        </li>
      </ul>

    </nav>


  </header>
  <!-- Div final de la barra de navegación -->

  <!-- Texto de mostrar la bienvenida al sitio -->
  <p class="letras">BIENVENIDOS A NUESTRO SITIO WEB</p>

  <!-- Contenido del sitio web -->
  <div class=" ciudad">
    <p class="textoIndex">¡La ciudad más emocionante del Centro!</p>
    <div class="lugares">
      <div class="contenedor">
        <img src="img/escudoSiguatepeque.png" class="imagen" alt="" srcset="">
        <p style="text-align: center;">Información...</p>
        <div class="informacion">
          <p class="info">Escudo Oficial de Siguatepeque</p>
          <a href="">ver</a>
        </div>
      </div>
      <div class="contenedor">
        <img src="img/BanderaSiguatepeque.png" class="imagen" alt="" srcset="">
        <p style="text-align: center;">Información...</p>
        <div class="informacion">
          <p class="info">Bandera Oficial de Siguatepeque</p>
          <a href="">ver</a>
        </div>
      </div>
      <div class="contenedor">
        <img src="img/plazaSanPedro.png" class="imagen" alt="" srcset="">
        <p style="text-align: center;">Información...</p>
        <div class="informacion">
          <p class="info">Plaza San Pedro Siguatepeque</p>
          <a href="">ver</a>
        </div>
      </div>
      <div class="contenedor">
        <img src="img/parqueCentralSiguatepeque.png" class="imagen" alt="" srcset="">
        <p style="text-align: center;">Información...</p>
        <div class="informacion">
          <p class="info">Parque Central de Siguatepeque</p>
          <a href="">ver</a>
        </div>
      </div>
      <div class="contenedor">
        <img src="img/plazaCivicaAmistadSiguatepeque.png" class="imagen" alt="" srcset="">
        <p style="text-align: center;">Información...</p>
        <div class="informacion">
          <p class="info">Plaza Civica La Amistad</p>
          <a href="">ver</a>
        </div>
      </div>
      <div class="contenedor">
        <img src="img/bosqueCalanterique.png" class="imagen" alt="" srcset="">
        <p style="text-align: center;">Información...</p>
        <div class="informacion">
          <p class="info">Bosque Calanterique</p>
          <a href="">ver</a>
        </div>
      </div>
    </div>
    <div class="button">
      <a href="">VER MAS LUGARES</a>
    </div>

    <!-- Seccion de ferias y celebridades de siguatepeque -->
    <div class="fiestas">
      <p class="texto" style="text-align: center;font-weight: bold;">Festivales - Ferias Oficiales</p>
      <div class="lugares">
        <div class="contenedorFiestas">
          <img src="img/feriaSanPablo.png" alt="" srcset="">
          <p class="text2" style="font-size: 1.5em;">FERIA PATRONAL</p>
        </div>
        <div class="contenedorFiestas">
          <img src="img/festivalDeLasFLores.png" alt="" srcset="">
          <p class="text2" style="font-size: 1.5em;">FESTIVAL DE LAS FLORES</p>
        </div>
        <div class="contenedorFiestas">
          <img src="img/festivalDelPino.png" alt="" srcset="">
          <p class="text2" style="font-size: 1.5em;">FESTIVAL DEL PINO</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Servicios para la ciudadania -->
  <div class="servicios" style="text-align: center;font-weight: bold;font-size: 1em;">
    <div class="servicios-contenedor">
      <p class="texto" style="text-align: center;font-weight: bold;">SERVICIOS PARA LA CIUDADANÍA.</p>
      <!-- Slideshow container -->
      <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <!-- <img src="img/escudoSiguatepeque.png" style="width:100%"> -->
          <div class="text">
            <p class="textoServicios">Servicios Regulares <br><br></p>
            <div>
              <ol>
                <li>Agua potable.</li>
                <li>Alcantarillado sanitalio.</li>
                <li>Recolección de basura</li>
                <li>Alumbrado público</li>
                <li>Limpieza de solares baldíos, calles, avenidas, parque</li>
                <li>Bomberos</li>
                <li>Aseo y ornato de parques, sanitarios, forestales, áreas verdes viveros</li>
                <li>Cementerios</li>
                <li>Policia y vigilancia</li>
                <li>Escuelas de educación especial</li>
                <li>Colaboración en el mantenimiento de escuelas públicas y privadas</li>
                <li>Mantenimiento y conservación del ambiente</li>
              </ol>
            </div>
          </div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <!-- <img src="img2.jpg" style="width:100%"> -->
          <div class="text">
            <p class="textoServicios">Servicios Permamentes<br><br></p>
            <div>
              <ol>
                <li>Mercados y abastos</li>
                <li>Rasto municipal de carnes</li>
                <li>Cementerio de propiedad y/o administración municipal</li>
                <li>Servicios para estacionamiento de vehículos</li>
                <li>Utilizaciíon de bienes municipales o ejidales</li>
                <li>Postes de teléfonos y torres de electricidad</li>
                <li>Tendido de alambre y cables de toda clase</li>
                <li>Espacios para rótulos</li>
                <li>Ocupación de calles y aceras en forma temporal</li>
                <li>Facilidad para destace de ganado y similares</li>
                <li>Terminal de transporte</li>
                <li>Comité vial</li>
              </ol>
            </div>
          </div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <!-- <img src="img3.jpg" style="width:100%"> -->
          <div class="text">
            <p class="textoServicios">Servicios Eventuales <br><br></p>
            <div class="servicios-samp">
              <ol>
                <li>Autorización de libros contables otros</li>
                <li>Permisos para apertura y operacón de negocios</li>
                <li>Autorización y permisos para espectaculos públicos</li>
                <li>Recepción por matrícula de vehiculos, trocos y armas de fuego, etc.</li>
                <li>Tramitacón y celebración de matrimonios civiles</li>
                <li>Permisos de contrucción, urbanizaciones, edificiones, adiciones y
                  remodelaciones</li>
                <li>Autorización y permisos de instalación de antenas de comunicación</li>
                <li>Servicios de inspecciónm avalúo, medición y elaboracón de planos</li>
                <li>Extensión de certificaciones, constancias y transcripciones de los actos propios de
                  la
                  alcaldía</li>
                <li>Acceso, control y administración a los sitios de explotación y recursos de
                  canteras</li>
                <li>Otros permitidos por las disposiciones legales</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        <br>
      </div>



      <!-- The dots/circles -->
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
    </div>
  </div>

  <!-- Seccion de noticias de la ciudad -->
  <div class="noticias-ciudad">
    <div class="noticias-contenedor">
      <p class="texto" style="text-align: center;font-weight: bold;">NOTICIAS DE CIUDAD</p>
    </div>
  </div>


  <!-- Seccion de eventos -->
  <div class="eventos-ciudad">
  </div>

  <!-- Seccion de comunicados -->
  <div class="comunicados-ciudad">
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
          <li><a href="/view/Empresa/vision.php">Visión</a></li>
          <li><a href="">Valores</a></li>
        </ul>
      </div>
    </div>

    <!-- Contenido de noticias -->
    <div class="">
      <p>Noticias Recientes</p>
    </div>


    <!-- Contenido de redes sociales -->
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
<script src="js/slider.js"></script>
<script src="js/menu.js"></script>




</html>