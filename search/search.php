<?php
  
  $tittle ="Busqueda- Municipalidad de Siguatepeque";
  require_once '../layouts/header.php';
  require_once '../config/db.php';

  $error ="";
  mysqli_query($conexion, "SET lc_time_names = 'es_ES'");
  
  // Validar que haya datos en la busqueda
  if(!empty($buscar=$_GET['busqueda'])){
    $buscar = $_GET['busqueda'];
    $sql = "SELECT *, date_format(fechaNoticia, '%d de %M del %Y') as fechaNoticia FROM noticia WHERE  tituloNoticia LIKE '%".$buscar."%' OR descripcionNoticia LIKE '%".$buscar."%'";
    $resultadoBusqueda = mysqli_query($conexion, $sql)or die(mysqli_error());

    if(mysqli_num_rows($resultadoBusqueda) < 1){
      echo 
      '
        <div class="tittle">
          <h1>Resultados de busqueda: "'.$buscar.'"</h1>
        </div>
        <div class="msg-error">
          <div class="error-noticias">
            <div class="alerta-error">
              <h1>No se encontraron datos que concuerden con la selección.</h1>
     
            </div>
          </div>
        </div>
      ';
    }else{
      // Mostrar el view
      echo 
      '
        <div class="tittle">
          <h1>Resultados de busqueda: "'.$buscar.'"</h1>
        </div>
        <div class="lista-noticias">
          
          <div class="noticias">
      ';
      while($row = mysqli_fetch_assoc($resultadoBusqueda)){
        echo
        ' 
          <div class="contenedor">
            <a href="../Noticia/noticia.php?id='.$row['idNoticia'].'">
              <img src="data:image/jpeg;base64,'.base64_encode($row['imagenNoticia']).'" />
              <div class="noticias-detalles">
                <p class="titulo-noticias">'.$row["tituloNoticia"].'</p>
                <p class="fecha-noticias"> <i class="fa fa-calendar"></i>'.$row["fechaNoticia"].'</p>
                <div class="noticia-informacion">'.$row["descripcionNoticia"].'</div>
              </div>
              <b>Más Informacion</b>
            </a>
          </div>
        ';
      }

      echo 
      ' 
        </div>
        </div>
      ';
      }
  }else{
    echo 
    '
      <div class="tittle">
        <h1>Resultados de busqueda: "'.$buscar.'"</h1>
      </div>
      <div class="msg-error">
        <div class="error-noticias">
          <div class="alerta-error">
            <h1>No Hay Resultados</h1>  
          </div>
        </div>
      </div>
    ';
  }
?>

<?php require_once '../layouts/footer.php'; ?>