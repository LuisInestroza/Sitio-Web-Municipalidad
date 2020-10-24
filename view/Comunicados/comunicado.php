<?php 
    
  require_once '../../config/db.php';
    mysqli_query($conexion, "SET lc_time_names = 'es_ES'");

    if (isset($_GET['id'])) {
    $id = $_GET['id'];//le asigno una variable
    $query =  "SELECT imagen, codigoComunicado, date_format(fechaComunicado, '%d %M, %Y') as fechaComunicado FROM comunicado WHERE idcomunicado = ".$id; 

    if ($resultado = mysqli_query($conexion, $query)) { //si obtengo resultados ejecutando la consulta anterior
      while ($comunicado = mysqli_fetch_assoc($resultado)) { //asigno ese resultado a un array asociativo $user
        $fecha = $comunicado['fechaComunicado'];
        $codigoComunicado= $comunicado['codigoComunicado'];
        $imagen = $comunicado['imagen'];
      
      }
    }
  }

    $tittle = "Comunicado - Municipalidad de Siguatepeque";
    require_once "../layouts/header.php"; 

    
?>
<div align="center" class="comunicado">
    <?php echo "<img src = 'data:image/jpeg;base64,".base64_encode($imagen)."' />";; ?>
</div>
<?php require_once '../layouts/footer.php'; ?>