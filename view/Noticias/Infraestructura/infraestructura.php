<?php
  include("../../../config/db.php");
  $con = conexion();
  mysqli_query($con, "SET lc_time_names = 'es_ES'");

  //si existe "id" en la url
  if (isset($_GET['id'])) {
      $id = $_GET['id'];//le asigno una variable
      $query = "SELECT  tituloNoticia, descripcionNoticia, 
              date_format(fechaNoticia, '%d de %M del %Y') as fechaNoticia FROM noticia WHERE idNoticia =".$id;
      if ($resultado = mysqli_query($con, $query)) { //si obtengo resultados ejecutando la consulta anterior
      while ($noticia = mysqli_fetch_assoc($resultado)) { //asigno ese resultado a un array asociativo $user
        $titulo = $noticia['tituloNoticia'];
          $fecha= $noticia['fechaNoticia'];
          $descripcion = $noticia['descripcionNoticia'];
      }
      }
      $mostrarFotos = "SELECT imagen from detallenoticia WHERE noticia_idNoticia =  '$id'";
      $galeriaFotos = mysqli_query($con, $mostrarFotos);
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
      <span class ="fas fa-angle-left"></span>
    </div>
    <div onclick="mover(1)" class="derecha">
      <span class ="fas fa-angle-right"></span>
    </div>
    
    
  </div>
  <i class="fa fa-calendar fecha-informacion"> <?php echo $fecha; ?></i>
  <p class="detalle-informacion">
    <?php echo $descripcion; ?>
  </p>
</div>


<?php require_once '../../layouts/footer.php'; ?>