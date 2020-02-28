<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Link de icoco -->

   <link rel="icon" type="/image/png" href="logo.ico" />

   <!-- Aceder al css -->
   <link rel="stylesheet" href="/css/style.css">
   <link rel="stylesheet" href="/css/normalize.css">

   <!-- Link de el estilo de las fuentes -->
   <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

   <!-- Links de iconos -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
   <title>Alcalde Municipal</title>
</head>

<body>
   <!-- Barra de navegacion -->
   <header class="header">
      <input type="checkbox" id="btn-menu" />
      <label for="btn-menu">
         <i class="fa fa-bars" id="btnMenu"></i>
      </label>

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
            <li><a href="">Gobierno</a>
               <ul>
                  <li><a href="/view/Gobierno/alcaldeMunicipal.php">Alcalde Municipal</a></li>
                  <li><a href="/view/Gobierno/departamentosMunicipalidad.php">Departamentos </a></li>
                  <li><a href="">Regidores</a></li>
               </ul>
            </li>
            <li><a href="">Portal de Transparencia</a></li>
            <li><a href="">Conoce a Siguatepeque</a>
               <ul>
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


   <div class="alcaldia">
      <img src="/img/JCMP.jpg" alt="Abog. Juan Carlos Morales Pacheco">
      <p>Abog. Juan Carlos Morales Pacheco</p>
      <p>Alcalde Municipal</p>
      <p>2018-2022</p>

   </div>

   <!-- Div final de los datos del alcalde -->



   <!-- footer -->
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
         <p></p>
         <a href="https://www.facebook.com/siguatepequealcaldia/"><i class="fab fa-facebook"></i></a>

      </div>
      <div class="contenedor">
         <p>Noticias Recientes</p>
      </div>
      <p>Municipalidad de Siguatepeque &copy 2020. All rights reserved</p>

   </footer>
   <!-- Div final de footer -->


</body>

</html>