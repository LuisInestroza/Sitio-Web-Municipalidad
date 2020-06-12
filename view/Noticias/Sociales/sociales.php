<?php
  include("../../../config/db.php");
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
        $imagen = $noticia['imagen'];
        $imagen2 = $noticia['imagen2'];
        $imagen3 = $noticia['imagen3'];
        $imagen4 = $noticia['imagen4'];
        $imagen5 = $noticia['imagen5'];
        $imagen6 = $noticia['imagen6'];
      }
    }
  }

  $tittle = "$titulo - Municipalidad de Siguatepeque";
  require_once '../../layouts/header.php';
?>

<div class="tittle">
  <h1><?php echo $titulo; ?></h1>
</div>

<div class="informacion-noticia">
  <i class="fa fa-calendar fecha-informacion"> <?php echo $fecha; ?></i>
  <div class="contenedor-imagenes">
    <?php echo "<img src = 'data:image/;base64,".base64_encode($imagen)."' />";; ?>
    <?php echo "<img src = 'data:image/;base64,".base64_encode($imagen2)."' />";; ?>
    <?php echo "<img src = 'data:image/;base64,".base64_encode($imagen3)."' />";; ?>
    <?php echo "<img src = 'data:image/;base64,".base64_encode($imagen4)."' />";; ?>
    <?php echo "<img src = 'data:image/;base64,".base64_encode($imagen5)."' />";; ?>
    <?php echo "<img src = 'data:image/;base64,".base64_encode($imagen6)."' />";; ?>
  </div>
  <p class="detalle-informacion">
    <?php echo $descripcion; ?>
  </p>
</div>


<?php require_once '../../layouts/footer.php'; ?>