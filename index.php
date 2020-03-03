<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Link de icoco -->
   <link rel="icon" type="image/png" href="logo.ico" />

   <!-- Link de las hojas de estilos -->
   <link rel="stylesheet" href="css/normalize.css">
   <link rel="stylesheet" href="css/style.css">

   <!-- Link de el estilo de las fuentes -->
   <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

   <!-- Links de iconos -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

   <title>Municipalidad de Siguatepeque</title>
</head>

<body>

   <!-- Barra de navegacion -->

   <!-- Banner -->
   <img class="banner" src="img/banner2.png" alt="">

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
                  <li><a href="">Números Telefónicos</a></li>
                  <li><a href="">Lugares Populares</a></li>
                  <li><a href="">Educación Superior</a></li>
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


   <!-- Texto de mostrar la bienvenida al sitio -->
   <p class="letras" style="padding-top: 120px;">BIENVENIDOS A NUESTRO SITIO WEB</p>


   <!-- Contenido del sitio web -->
   <div class="ciudad">
      <p class="texto">¡La ciudad más emocionante del Centro!</p>
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
         <p style="text-align: center;font-weight: bold;font-size: 3.5em;">Festivales - Ferias Oficiales</p>
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
         <p style="text-align: center;font-weight: bold;font-size: 3.5em;">SERVICIOS PARA LA CIUDADANÍA.</p>

         <!-- Slideshow container -->
         <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
               <div class="numbertext">1 / 3</div>
               <!-- <img src="img/escudoSiguatepeque.png" style="width:100%"> -->
               <div class="text">Servicios Regulares <br><br>
                  <div>
                     <span>Agua potable.</span> <br>
                     <span>Alcantarillado sanitalio.</span><br>
                     <span>Recolección de basura</span><br>
                     <span>Alumbrado público</span><br>
                     <span>Limpieza de solares baldíos, calles, avenidas, parque</span><br>
                     <span>Bomberos</span><br>
                     <span>Aseo y ornato de parques, sanitarios, forestales, áreas verdes viveros</span><br>
                     <span>Cementerios</span><br>
                     <span>Policíá y vigilancia</span><br>
                     <span>Escuelas de educación especial</span><br>
                     <span>Colaboración en el mantenimiento de escuelas públicas y privadas</span><br>
                     <span>Mantenimiento y conservación del ambiente</span><br>
                  </div>
               </div>
            </div>

            <div class="mySlides fade">
               <div class="numbertext">2 / 3</div>
               <!-- <img src="img2.jpg" style="width:100%"> -->
               <div class="text">Servicios Permamentes <br><br>
                  <div>
                     <span>Mercados y abastos</span><br>
                     <span>Rasto municipal de carnes</span><br>
                     <span>Cementerio de propiedad y/o administración municipal</span><br>
                     <span>Servicios para estacionamiento de vehículos</span><br>
                     <span>Utilizaciíon de bienes municipales o ejidales</span><br>
                     <span>Postes de teléfonos y torres de electricidad</span><br>
                     <span>Tendido de alambre y cables de toda clase</span><br>
                     <span>Espacios para rótulos</span><br>
                     <span>Ocupación de calles y aceras en forma temporal</span><br>
                     <span>Facilidad para destace de ganado y similares</span><br>
                     <span>Terminal de transporte</span><br>
                     <span>Comité vial</span><br>

                  </div>

               </div>


            </div>

            <div class="mySlides fade">
               <div class="numbertext">3 / 3</div>
               <!-- <img src="img3.jpg" style="width:100%"> -->
               <div class="text">Servicios Eventuales <br><br>
                  <div class="servicios-samp">
                     <span>Autorización de libros contables otros</span><br>
                     <span>Permisos para apertura y operacón de negocios</span><br>
                     <span>Autorización y permisos para espectaculos públicos</span><br>
                     <span>Recepción por matrícula de vehiculos, trocos y armas de fuego, etc.</span><br>
                     <span>Tramitacón y celebración de matrimonios civiles</span><br>
                     <span>Permisos de contrucción, urbanizaciones, edificiones, adiciones y
                        remodelaciones</span><br>
                     <span>Autorización y permisos de instalación de antenas de comunicación</span><br>
                     <span>Servicios de inspecciónm avalúo, medición y elaboracón de planos</span><br>
                     <span>Extensión de certificaciones, constancias y transcripciones de los actos propios de la
                        alcaldía</span><br>
                     <span>Acceso, control y administración a los sitios de explotación y recursos de
                        canteras</span><br>
                     <span>Otros permitidos por las disposiciones legales</span><br>

                  </div>


               </div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
         </div>
         <br>

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
         <p style="text-align: center;font-weight: bold;font-size: 3.5em;">NOTICIAS DE CIUDAD</p>
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
               <li>Misión</li>
               <li>Visión</li>
               <li>Valores</li>
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
                  <a href="" class="fab fa-facebook">Facebook</a>
               </li>
               <li>
                  <a href="" class="fab fa-twitter">Twitter</a>
               </li>
               <li>
                  <a href="" class="fab fa-google-plus">Google</a>
               </li>
               <li>
                  <a href="" class="fab fa-linkedin">LinkedI</a>
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