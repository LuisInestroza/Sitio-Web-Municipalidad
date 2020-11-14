<?php
  require_once '../../config/db.php';

  mysqli_query($conexion, "SET lc_time_names = 'es_ES'");

  //si existe "id" en la url
  if (isset($_GET['id'])) {
      $id = $_GET['id'];//le asigno una variable
      $query = "SELECT  tituloNoticia, descripcionNoticia,  
              date_format(fechaNoticia, '%d de %M del %Y') as fechaNoticia FROM noticia WHERE idNoticia =".$id;

      if ($resultado = mysqli_query($conexion, $query)) { //si obtengo resultados ejecutando la consulta anterior
      while ($noticia = mysqli_fetch_assoc($resultado)) { //asigno ese resultado a un array asociativo $user
        $titulo = $noticia['tituloNoticia'];
          $fecha= $noticia['fechaNoticia'];
          $descripcion = $noticia['descripcionNoticia'];
      }
      }
      $mostrarFotos = "SELECT imagen from detallenoticia WHERE noticia_idNoticia =  '$id'";
      $galeriaFotos = mysqli_query($conexion, $mostrarFotos);
  }

  $tittle = "$titulo - Municipalidad de Siguatepeque";
  require_once '../../layouts/header.php';
?>

<div class="tittle">
    <h1><?php echo $titulo; ?></h1>
</div>

<div class="informacion-noticia">

    <div class="carousel-img" data-flickity>
        <?php while ($filas = mysqli_fetch_assoc($galeriaFotos)):?>
        <?php echo "<img class='carousel-cell-img' src = 'data:image/jpeg;base64,".base64_encode($filas["imagen"])."' />";;?>
        <?php  endwhile;?>

    </div>
    <p class="fecha-informacion"> 
        <i class="fa fa-calendar"></i>
        <?php echo $fecha; ?>
    </p>
    <p class="detalle-informacion">
        <?php echo $descripcion; ?>
    </p>
</div>


<?php require_once '../../layouts/footer.php'; ?>