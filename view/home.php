<!-- PHP -->
<?php
  // Incluir el archivo de la conexion a la bade de datos
 require_once './config/db.php';
  // Llamar a la funcion de la conexion a la base de datos.
 
  mysqli_query($conexion, "SET lc_time_names = 'es_ES'");

  // Query de para mostrar las noticas
  $queryNoticasInfraestructura = "SELECT idNoticia, imagenNoticia, tituloNoticia, descripcionNoticia,  date_format(fechaNoticia, '%d %M, %Y') as fechaNoticia FROM noticia WHERE categoriaNoticia_idcategoriaNoticia = 1";
  $queryNoticasSociales = "SELECT idNoticia, imagenNoticia, tituloNoticia, descripcionNoticia,  date_format(fechaNoticia, '%d %M, %Y') as fechaNoticia  FROM noticia WHERE categoriaNoticia_idcategoriaNoticia = 2";
  $queryNoticasEventos = "SELECT idNoticia,imagenNoticia, tituloNoticia, descripcionNoticia, date_format(fechaNoticia, '%d %M, %Y') as fechaNoticia  FROM noticia WHERE categoriaNoticia_idcategoriaNoticia = 3";
  $queryNoticasEconomia = "SELECT idNoticia,imagenNoticia, tituloNoticia, descripcionNoticia,  date_format(fechaNoticia, '%d %M, %Y') as fechaNoticia  FROM noticia WHERE categoriaNoticia_idcategoriaNoticia = 4";

  // Query de comunicados
  $queryComunicados = "SELECT idComunicado, imagen, codigoComunicado, date_format(fechaComunicado, '%d %M, %Y') as fechaComunicado FROM comunicado";


?>

<div class="content">
  <div class="images">
    <div class="overlay"></div>
    <div class="hero-slider">
      <img src="/img/slider/Siguatepeque04.JPG" alt="">
      <div class="contenido-slider">
        <h2>BIENVENIDO A NUESTRO SITIO WEB</h2>
      </div>
    </div>
    <div class="hero-slider">
      <img src="/img/slider/panoramica.jpg" alt="">
      <div class="contenido-slider">
        <h2>LA CIUDAD MAS EMOCIONANTE DEL CENTRO</h2>
        <div class="datos-ciudad">
          <div class="dato"><p>606,5<br>km2</p></div>
          <div class="dato"><p><i class="fa fa-cloud-sun"></i><br>SU TEMPERATURA OSCILA <br> ENTRE 20º C Y 25º C</p></div>
          <div class="dato"><p>1926 <br>AÑO DE FUNDACIÓN</p></div>
          <div class="dato"><P>100,000<br>POBLACIÓN APROXIMADA</P></div>
        </div>
      </div>
    </div>
    <div class="hero-slider">
      <img src="/img/slider/festivalFlores.jpg" alt="">
      <div class="contenido-slider"> 
        <h2>NUESTRO FESTIVAL DE LAS FLORES</h2>
        <a href="../view/Festivales/fesivalFlores.php">Información</a>
      </div>
    </div>
    <div class="hero-slider">
      <img src="/img/slider/banner.jpg" alt="">
      <div class="contenido-slider"> 
        <h2>DISFRUTA DE NUESTRA CIUDAD</h2>
        <a href="../view/Relax/relax.php">Ver Lugares</a>
      </div>
    </div>
   
  </div>
  <div class="btn-sliders">
    <span onclick="btnSlide(1)"></span>
    <span onclick="btnSlide(2)"></span>
    <span onclick="btnSlide(3)"></span>
    <span onclick="btnSlide(4)"></span>
  </div>
</div>



<!-- Sección de ferias y celebridades de Siguatepeque -->
<div class="fiestas">
  <h1>FESTIVALES - FERIAS OFICIALES</h1>
  <div class="lista-fiestas">
    <div class="contenedor-fiestas">
      <img src="../img/feriaSanPablo.png" alt="" srcset="">
      <div class="datos-fiesta">
        <h4>FERIA PATRONAL</h4>
        <i class="fa fa-calendar fecha-fiesta"> 17-25 Enero</i>
        <p>
          La parroquia San Pablo Apóstol, celebra el día de su santo patrón,
          con varias actividades religiosas, culturales y artísticas: Eucaristías, 
          en honor a San Pablo, procesión por las calles de la ciudad y conciertos 
          con grupos musicales de la zona. 
        </p>
        <a href="/view/Festivales/feriaPatronal.php">Más Información</a>
      </div>
    </div>
    <div class="contenedor-fiestas">
      <img src="../img/festivalDeLasFlores.png" alt="" srcset="">
      <div class="datos-fiesta">
        <h4>FESTIVAL DE LAS FLORES</h4>
        <i class="fa fa-calendar fecha-fiesta"> 1re Semana de Octubre</i>
        <p>El festival de las flores es para todas las edades donde podemos apreciar 
          varios dias con actividades llenas de colores. Es un Festival 100% familiar contiene 
          una oferta de entretenimiento, alimentación y apreciación natural única en su clase. 
        </p>
          <a href="/view/Festivales/fesivalFlores.php">Más Información</a>
      </div>
    </div>
    <div class="contenedor-fiestas">
      <img src="../img/festivalDelPino.png" alt="" srcset="">
      <div class="datos-fiesta">
        <h4>FESTIVAL DEL PINO</h4>
        <i class="fa fa-calendar fecha-fiesta"> 26-29 de Abril</i>
        <p>
          El Festival Nacional del Pino, es un evento que nació por la necesidad de mostrar a Honduras 
          y el mundo la abundante foresta que tiene Siguatepeque, lo que deriva un clima agradable y cuantiosa agua. 
        </p>
        <a href="/view/Festivales/festivalPino.php">Más Información</a>
      </div>
    </div>
  </div>
</div>
</div>



<!-- Servicios para la ciudadanía -->
<h1 class="titulo-servicio">SERVICIOS PARA LA CIUDADANÍA.</h1>
<div class="servicios">
  <div class="servicios-contenedor">
    <div class="item-servicio">
      <h2>Servicios Regulares</h2>
      <ul type="1"> 
        <li>Agua potable.</li>
        <li>Alcantarillado sanitario.</li>
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
      </ul>
     
    </div>
    <div class="item-servicio">
      <h2>Servicios Permanentes </h2>
      <ul type="1">
        <li>Mercados y abastos</li>
        <li>Rasto municipal de carnes</li>
        <li>Cementerio de propiedad y/o administración municipal</li>
        <li>Servicios para estacionamiento de vehículos</li>
        <li>Utilización de bienes municipales o ejidales</li>
        <li>Postes de teléfonos y torres de electricidad</li>
        <li>Tendido de alambre y cables de toda clase</li>
        <li>Espacios para rótulos</li>
        <li>Ocupación de calles y aceras en forma temporal</li>
        <li>Facilidad para destace de ganado y similares</li>
        <li>Terminal de transporte</li>
        <li>Comité vial</li>
        
      </ul>
    </div>
    <div class="item-servicio">
      <h2>Servicios Eventuales </h2>
      <ul type="1">
        <li>Autorización de libros contables otros</li>
        <li>Permisos para apertura y operación de negocios</li>
        <li>Autorización y permisos para espectáculos públicos</li>
        <li>Recepción por matrícula de vehículos, trocos y armas de fuego, etc.</li>
        <li>Tramitación y celebración de matrimonios civiles</li>
        <li>Permisos de construcción, urbanizaciones, edificaciones, adiciones y remodelaciones</li>
        <li>Autorización y permisos de instalación de antenas de comunicación</li>
        <li>Servicios de inspección avalúo, medición y elaboración de planos</li>
        <li>Extensión de certificaciones, constancias y transcripciones de los actos propios de la alcaldía</li>
        <li>Acceso, control y administración a los sitios de explotación y recursos de canteras</li>
        <li>Otros permitidos por las disposiciones legales</li>
      </ul>
    </div>
    <div onclick="plusSlides(-1)" class="slide left">
      <span class="fas fa-angle-left"></span>
    </div>
    <div onclick="plusSlides(1)" class="slide right">
      <span class="fas fa-angle-right"></span>
    </div>
    <div class="btn-slider">
      <span onclick="currentSlide(1)"></span>
      <span onclick="currentSlide(2)"></span>
      <span onclick="currentSlide(3)"></span>
    </div>

  </div>
</div>



<!-- Sección de noticias de la ciudad -->
<div class="noticias-ciudad">
  <div class="noticias-contenedor">
    <h1>NOTICIAS DE CIUDAD</h1>
    <section>
      <div class="tabs tabs-style-tzoid">
        <nav>
          <ul>
            <li><a href="#infraestructura"><span><b>Infraestructura</b></span></a></li>
            <li><a href="#sociales"><span><b>Sociales</b></span></a></li>
            <li><a href="#eventos"><span><b>Eventos</b></span></a></li>
            <li><a href="#economía"><span><b>Economía</b></span></a></li>

          </ul>
        </nav>
        <div class="content-wrap ">
          <section id="infraestructura">
            <h1>Noticias Infraestructura</h1>
            <div class="content-noticia">
              <?php  if ($infraestructura = mysqli_query($conexion, $queryNoticasInfraestructura) or die("Error en la consulta")):?>
                <?php while ($columna = mysqli_fetch_assoc($infraestructura)): ?>
                  <div class="contenido-noticia">
                    <a href="/view/Noticias/Infraestructura/infraestructura.php?id=<?php echo $columna['idNoticia'] ?>">
                      <?php echo "<img src = 'data:image/jpeg;base64,".base64_encode($columna['imagenNoticia'])."' />";;?>
                      <div class="noticia-detalles">
                        <p class="fecha-noticias fa fa-calendar"> <?php echo $columna["fechaNoticia"]; ?></p>
                        <p class="titulo-noticia"><?php echo $columna['tituloNoticia']; ?></p>
                      </div>
                    </a>
                  </div>           
                <?php endwhile; ?>
              <?php  endif;  ?>
            </div>
          </section>
          <section id="sociales">
            <h1>Noticias Sociales</h1>
            <div class="content-noticia">
              <?php  if ($sociales = mysqli_query($conexion, $queryNoticasSociales) or die("Error en la consulta")):?>
                <?php while ($columna = mysqli_fetch_assoc($sociales)): ?>
                  <div class="contenido-noticia">
                    <a href="/view/Noticias/Sociales/sociales.php?id=<?php echo $columna['idNoticia'] ?>">
                      <?php echo "<img src = 'data:image/jpeg;base64,".base64_encode($columna['imagenNoticia'])."' />";;?>
                      <div class="noticia-detalles">
                        <p class="fecha-noticias fa fa-calendar"> <?php echo $columna["fechaNoticia"]; ?></p>
                        <p class="titulo-noticia"><?php echo $columna['tituloNoticia']; ?></p>
                      </div>
                    </a>
                  </div>                
                <?php endwhile; ?>
              <?php  endif;  ?>
            </div>

          </section>
          <section id="eventos">
            <h1>Noticias Eventos</h1>
            <div class="content-noticia">
              <?php  if ($eventos = mysqli_query($conexion, $queryNoticasEventos) or die("Error en la consulta")):?>
                <?php while ($columna = mysqli_fetch_assoc($eventos)): ?>
                  <div class="contenido-noticia">
                    <a href="/view/Noticias/Eventos/eventos.php?id=<?php echo $columna['idNoticia'] ?>">
                      <?php echo "<img src = 'data:image/jpeg;base64,".base64_encode($columna['imagenNoticia'])."' />";;?>
                      <div class="noticia-detalles">
                        <p class="fecha-noticias fa fa-calendar"> <?php echo $columna["fechaNoticia"]; ?></p>
                        <p class="titulo-noticia"><?php echo $columna['tituloNoticia']; ?></p>
                      </div>
                    </a>
                  </div>          
                <?php endwhile; ?>
              <?php  endif;  ?>
            </div>
          </section>
          <section id="economía">
            <h1>Noticias Economía</h1>
            <div class="content-noticia">
              <?php  if ($economia = mysqli_query($conexion, $queryNoticasEconomia) or die("Error en la consulta")):?>
                <?php while ($columna = mysqli_fetch_assoc($economia)): ?>
                  <div class="contenido-noticia">
                    <a href="/view/Noticias/Economia/economia.php?id=<?php echo $columna['idNoticia'] ?>">
                      <?php echo "<img src = 'data:image/jpeg;base64,".base64_encode($columna['imagenNoticia'])."' />";;?>
                     <div class="noticia-detalles">
                        <p class="fecha-noticias fa fa-calendar"> <?php echo $columna["fechaNoticia"]; ?></p>
                        <p class="titulo-noticia"><?php echo $columna['tituloNoticia']; ?></p>
                     </div>
                    </a>
                  </div>          
                <?php endwhile; ?>
              <?php  endif;  ?>
            </div>
          </section>
          <!-- Boton de ver mas noticias -->
          <div class="btn-noticias">
            <a href="/view/Noticias/noticias.php">LEER MAS NOTICIAS</a>
          </div>

        </div><!-- /content -->

      </div><!-- /tabs -->

    </section>

  </div>

</div>


<!-- Sección de eventos -->
<div class="eventos-ciudad">
  <h1>EVENTOS</h1>
  <section>
    <div class="tabs tabs-style-tzoid">
      <div class="content-wrap">
        <?php  if ($eventos = mysqli_query($conexion, $queryNoticasEventos) or die("Error en la consulta")):?>
          <?php while ($columna = mysqli_fetch_assoc($eventos)): ?>
            <div class="contenido-noticia">
              <a href="/view/Noticias/Eventos/eventos.php?id=<?php echo $columna['idNoticia'] ?>">
                <?php echo "<img src = 'data:image/jpeg;base64,".base64_encode($columna['imagenNoticia'])."' />";;?>
                <div class="noticia -detalles">
                  <p class="fecha-noticias fa fa-calendar"> <?php echo $columna["fechaNoticia"]; ?></p>
                  <p class="titulo-noticia"><?php echo $columna['tituloNoticia']; ?></p>
                </div>
              </a>
            </div>          
          <?php endwhile; ?>
        <?php  endif;  ?>
      </div>
    </div>
  </section>
</div>

<!-- Sección de comunicados -->
<div class="comunicados-ciudad">
  <h1>COMUNICADOS</h1>
  <section>

</div>

<div class="comunicados">
  <div class="carousel" data-flickity='{ "groupCells": true }'>
    <?php  if ($comunicados = mysqli_query($conexion, $queryComunicados) or die("Error en la consulta")):?>
    <?php while ($columna = mysqli_fetch_assoc($comunicados)): ?>
      <div class="carousel-cell"> 
        <a href="/view/Comunicados/comunicado.php?id=<?php echo $columna['idComunicado'] ?>">
          <?php echo "<img src = 'data:image/jpeg;base64,".base64_encode($columna['imagen'])." '/>";; ?>
          <p class="fecha-comunicado fa fa-calendar"> <?php echo $columna["fechaComunicado"]; ?></p>
          <p class="codigo-comunicado"><?php echo $columna['codigoComunicado']; ?></p>
        </a>
      </div>
    <?php endwhile; ?>
    <?php  endif;  ?>   
    </div>
</div>


