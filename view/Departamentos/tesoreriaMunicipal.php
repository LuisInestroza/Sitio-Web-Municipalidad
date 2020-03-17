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

  <title>Tesoria Municipal - Municipalidad de Siguatepeque</title>
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




  <!-- Div del contenido del departamento  -->

  <div class="oficina">
    <p class="texto">Tesoreria Municipal</p>
    <img src="http://municipalidaddesiguatepeque.com/wp-content/uploads/2016/01/tesoreria.jpg" alt=""
      class="imagenDepto">

    <p class="contenido">Articulo 58 Ley de Municipalidades</p>

    <ol type="1" class="contenido">
      <li>Recaudar y custodiar los fondos municipales provenientes de pagos de impuestos, servicios públicos prestados
        por la municipalidad, contribuciones, multas, tasas por servicios administrativos, transferencias, donaciones,
        préstamos, etc. Y extender los recibos y comprobantes correspondientes</li>
      <li>Registrar detalladas las cuentas municipales en libros auxiliares del departamento de tesorería que no
        necesariamente serán los libros auxiliares oficiales de la municipalidad.</li>
      <li>Depositar diariamente en un banco local la recaudación que reciba la municipalidad y adjuntar los depósitos,
        los recibos vendidos, resumen de ingresos al Boucher de ingresos y remitirlo al departamento de contabilidad y
        presupuesto para su registro y el reporte de cheques emitidos diariamente con sus órdenes de pago, Boucher del
        cheque, y la documentación soporte de los cheques para su registro en la contabilidad financiera y
        presupuestaria.</li>
      <li>Seguir los lineamientos establecidos en cuanto el manejo de los fondos de caja chica, liquidación mensual de
        caja en los formatos para el efecto, solicitar reembolso de valor por reembolso gastado, elaboración de los
        recibos de ingreso y distribución de las copias respectivas en los departamentos correspondientes.</li>
      <li>Realizar los arqueos diarios para cuadrar lo percibido con los depósitos y llenar los reportes
        correspondientes.</li>
      <li>Recibir diariamente las recaudaciones efectuadas por los recolectores de fondos y cajas recolectoras.</li>
      <li>Realizar los pagos ordenados por el Alcalde cuando los mismos estén contemplados en el presupuesto y que
        existan las disponibilidades de saldos y que su tramite llenen los requisitos legales correspondientes.</li>
      <li>Informar mensualmente a la Corporación Municipal y en la Unidad de Contabilidad y Presupuesto diariamente de
        los movimientos de los ingresos y egresos con los formatos de resumen de ingresos diarios y resumen de cheques
        emitidos de ingresos y egresos respectivamente.</li>
      <li>Informar en cualquier tiempo a la Corporación Municipal de las irregularidades que dañen los intereses de la
        Hacienda Municipal.</li>
      <li>Realizar otras tareas que se le asignen.</li>

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


  <!-- Div final de footer -->
</body>
<!-- Script de las funciones de animaciones de JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="/js/slider.js"></script>
<script src="/js/menu.js"></script>


</html>