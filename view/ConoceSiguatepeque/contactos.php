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

  <!-- Bootstrap -->
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

  <title>Contactos - Municipalidad de Siguatepeque</title>
</head>

<body>

  <!-- Boton de desplaxar hacia arriba -->
  <span class="arriba"><i class="fa fa-angle-up"></i></span>
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


  <!-- Contenido de catastro -->
  <div class="oficina">
    <p class="texto">NÚMEROS DE TELEFONO</p>

    <table class="table">
      <tbody>
        <tr>
          <td>Oficina Principal</td>
          <td>(504) 2773-0039</td>
        </tr>
        <tr>
          <td>Oficina Catastro</td>
          <td>(504) 2773-0219</td>
        </tr>
        <tr>
          <td>Repepción</td>
          <td>Ext 101</td>
        </tr>
        <tr>
          <td>Alcalde</td>
          <td>Ext 102</td>
        </tr>
        <tr>
          <td>Administración</td>
          <td>Ext 103</td>
        </tr>
        <tr>
          <td>Auditoria</td>
          <td>Ext 104</td>
        </tr>
        <tr>
          <td>Medio Ambiente</td>
          <td>Ext 105</td>
        </tr>
        <tr>
          <td>Desarrollo Comunitario</td>
          <td>Ext 106</td>
        </tr>
        <tr>
          <td>Justicia Municipal</td>
          <td>Ext 110</td>
        </tr>
        <tr>
          <td>Ingeneria Municipal</td>
          <td>Ext 108</td>
        </tr>
        <tr>
          <td>Turismo</td>
          <td>Ext 109</td>
        </tr>
        <tr>
          <td>Secretaria Administración</td>
          <td>Ext 112</td>
        </tr>
        <tr>
          <td>Recursos Humanos</td>
          <td>Ext 113</td>
        </tr>
        <tr>
          <td>Contabilidad</td>
          <td>Ext 114</td>
        </tr>
        <tr>
          <td>Tesoreria</td>
          <td>Ext 115</td>
        </tr>
        <tr>
          <td>Control Tributario</td>
          <td>Ext 117</td>
        </tr>
        <tr>
          <td>Informática</td>
          <td>Ext 118</td>
        </tr>
        <tr>
          <td>Secreatria Alcalde</td>
          <td>Ext. 119</td>
        </tr>
        <tr>
          <td>Secreataria Municipal</td>
          <td>Ext. 120</td>
        </tr>
        <tr>
          <td>Vicealcaldia</td>
          <td>Ext. 121</td>
        </tr>
        <tr>
          <td>Relaciones Publicas</td>
          <td>Ext. 122</td>
        </tr>
        <tr>
          <td>Oficina de la mujer</td>
          <td>Ext. 123</td>
        </tr>
      </tbody>
    </table>
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
<script src="/js/botonArriba.js"></script>

</html>