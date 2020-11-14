<?php
  require_once '../../config/db.php';
  mysqli_query($conexion, "SET lc_time_names = 'es_ES'");

  if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $query = "SELECT  tituloNoticia, descripcionNoticia, 
              date_format(fechaNoticia, '%d de %M del %Y') as fechaNoticia FROM noticia WHERE idNoticia =".$id;
      if ($resultado = mysqli_query($conexion, $query)) { 
      while ($noticia = mysqli_fetch_assoc($resultado)) { 
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

    <div class="galeria">
        <div class="imagenes-galeria">
            <?php while ($filas = mysqli_fetch_assoc($galeriaFotos)):?>
            <?php echo "<img src = 'data:image/jpeg;base64,".base64_encode($filas["imagen"])."' />";;?>
            <?php  endwhile;?>
        </div>
        <div onclick="mover(-1)" class="izquiera">
            <span class="fas fa-angle-left"></span>
        </div>
        <div onclick="mover(1)" class="derecha">
            <span class="fas fa-angle-right"></span>
        </div>


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