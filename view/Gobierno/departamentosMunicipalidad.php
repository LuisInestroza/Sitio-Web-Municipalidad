<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link de icoco -->
  <link rel="icon" type="/image/png" href="/logo.ico" />
  <!-- link de hojas de estilos -->
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/normalize.css">

  <!-- Link de el estilo de las fuentes -->
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

  <!-- Links de iconos -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

  <title>Departementos - Municipalidad</title>

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
    <img class="logo" src="/img/logoNuevo.png" alt="" srcset="">
    <p class="msg">Municipalidad de Siguatepeque</p>
  </header>
  <!-- Div final de la barra de navegación -->



  <!-- Div de departamentos -->
  <div class="departamentos">
    <p class="texto">DEPARTAMENTOS</p>
    <div class="deptos">
      <div class="contenedor">
        <a href="/view/Departamentos/oficinaAlcalde.php">
          <img src="/img/Departamentos/alcaldia.jpg" class="imagen" alt="oficina-alcalde">
          <p>Oficina del Alcalde</p>
        </a>
        <p>Atribuciones</p>
        <div class="informacion">
          <a href="/view/Departamentos/oficinaAlcalde.php">Ver</a>
        </div>
      </div>

      <div class="contenedor">
        <a href="/view/Departamentos/catastroMunicipal.php">
          <img class="imagen" src="/img/Departamentos/mapa-siguatepeque.jpg" alt="catastro-municipal">
          <p>Catastro Municipalipal</p>
        </a>
        <p>Servicios Prestados.</p>
        <div class="informacion">
          <a href="/view/Departamentos/catastroMunicipal.php">Ver</a>
        </div>
      </div>
      <div class="contenedor">
        <a href="/view/Departamentos/controlTributario.php">
          <img class="imagen"
            src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2016/01/47069145_949496568573081_4123151995521466368_o-740x460.jpg"
            alt="control-tributario">
          <p>Control Tributario</p>
        </a>
        <p>Servicios</p>
        <div class="informacion">
          <a href="/view/Departamentos/controlTributario.php">Ver</a>
        </div>
      </div>
      <div class="contenedor">
        <a href="/view/Departamentos/tesoreriaMunicipal.php">
          <img class="imagen" src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2016/01/tesoreria.jpg"
            alt="tesoria-municipal">

          <p>Tesoría Municipal</p>
        </a>
        <p>Atribuciones</p>
        <div class="informacion">
          <a href="/view/Departamentos/tesoreriaMunicipal.php">Ver</a>
        </div>
      </div>
      <div class="contenedor">
        <a href="/view/Departamentos/obrasPublicas.php">
          <img class="imagen"
            src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2016/01/72485567_1115145785341491_8897221304252366848_n-e1573655647796-740x460.jpg"
            alt="obras-publicas">

          <p>Obras Públicas</p>
        </a>
        <p>Servicios Prestados</p>
        <div class="informacion">
          <a href="/view/Departamentos/obrasPublicas.php">Ver</a>
        </div>
      </div>
      <div class="contenedor">
        <a href="/view/Departamentos/contabilidadYPresupuesto.php">
          <img class="imagen" src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2016/01/conyabilidad.jpg"
            alt="contabilidad-presupuesto">

          <p>Contabilidad y Presupuesto</p>
        </a>
        <p>Atribuciones</p>
        <div class="informacion">
          <a href="/view/Departamentos/contabilidadYPresupuesto.php">Ver</a>
        </div>
      </div>
      <div class="contenedor">
        <a href="/view/Departamentos/justiciaMunicipal.php">
          <img class="imagen"
            src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2019/11/justiciamunicipal-740x460.jpg"
            alt="medio-ambiente">
          <p>Justicia Municipal</p>
        </a>
        <p>Servicios</p>
        <div class="informacion">
          <a href="/view/Departamentos/justiciaMunicipal.php">Ver</a>
        </div>
      </div>
      <div class="contenedor">
        <a href="/view/Departamentos/medioAmbiente.php">
          <img class="imagen"
            src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2016/01/medioambiente-e1573656232511-740x460.jpg"
            alt="justicia-municipal">
          <p>Medio Ambiente (UMA)</p>
        </a>
        <p>Atribuciones</p>
        <div class="informacion">
          <a href="/view/Departamentos/medioAmbiente.php">Ver</a>
        </div>
      </div>
      <div class="contenedor">
        <a href="/view/Departamentos/desarrolloComunitario.php">
          <img class="imagen"
            src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2019/11/desarrollo-comunitario.png"
            alt="desarrollo-comunitario">
          <p>Desarrollo Comunitario</p>
        </a>
        <p>Atribuciones</p>
        <div class="informacion">
          <a href="/view/Departamentos/desarrolloComunitario.php">Ver</a>
        </div>
      </div>

      <div class="contenedor">
        <a href="/view/Departamentos/secretariaMunicipal.php">
          <img class="imagen"
            src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2019/10/secretaria-e1573655696973.jpg"
            alt="secretaria-municipal">

          <p>Secretaria Municipal</p>
        </a>
        <p>Atribuciones</p>
        <div class="informacion">
          <a href="/view/Departamentos/secretariaMunicipal.php">Ver</a>
        </div>
      </div>
      <div class="contenedor">
        <a href="/view/Departamentos/oficinaMujer-Niñez.php">
          <img class="imagen" src="" alt="oficina-mujer-niñez">

          <p>Oficina de la mujer y niñez</p>
        </a>
        <p>Atribuciones</p>
        <div class="informacion">
          <a href="/view/Departamentos/oficinaMujer-Niñez.php">Ver</a>
        </div>
      </div>
      <div class="contenedor">
        <a href="/view/Departamentos/gerenciaGeneralMunicipal.php">
          <img class="imagen" src="" alt="gerencia-general-municipal">
          <p>Gerencia General Municipal</p>
        </a>
        <p>Atribuciones</p>
        <div class="informacion">
          <a href="/view/Departamentos/gerenciaGeneralMunicipal.php">Ver</a>
        </div>
      </div>

    </div>
  </div>
  <!-- Div final de departamentos -->


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