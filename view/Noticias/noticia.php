<?php
  include("../config/db.php");
  $con = conexion();

  //si existe "id" en la url
  if (isset($_GET['id'])) {
    $id = $_GET['id'];//le asigno una variable
    $query = "SELECT * FROM noticia WHERE idnoticia =".$id; //cadena de consulta para el elemento $id
    if ($resultado = mysqli_query($con, $query)) { //si obtengo resultados ejecutando la consulta anterior
      while ($noticia = mysqli_fetch_assoc($resultado)) { //asigno ese resultado a un array asociativo $user
        $titulo = $noticia['tituloNoticia'];
        $fecha= $noticia['fechaNoticia'];
        $descripcion = $noticia['descripcionNoticia'];
        $imagenUser = $noticia['imagen'];
      }
    }
  }

  $tittle = "$titulo - Municipalidad de Siguatepeque";
  require_once '../view/layouts/header';
?>

<div class="tittle">
  <h1><?php echo $titulo; ?></h1>
</div>

<div class="informacion-noticia">
  <i class="fa fa-calendar fecha-informacion"> <?php echo $fecha; ?></i>
  <div class="contenedor-imagenes">
    <img src="../../../img/Infraestructura/imagen1.jpg" alt="">
    <img src="../../../img/Infraestructura/imagen2.jpg" alt="">
    <img src="../../../img/Infraestructura/imagen3.jpg" alt="">
    <img src="../../../img/Infraestructura/imagen4.jpg" alt="">
    <img src="../../../img/Infraestructura/imagen5.jpg" alt="">
  </div>
  <p class="detalle-informacion">
    <?php echo $descripcion; ?>
  </p>
</div>


<?php require_once '../view/layouts/footer'; ?>