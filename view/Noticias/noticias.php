<?php 

  include("../../config/db.php");
  $con = conexion();

  mysqli_query($con, "SET lc_time_names = 'es_ES'");

  $query = "SELECT idnoticia, tituloNoticia, descripcionNoticia, imagen, date_format(fechaNoticia, '%d de %M del %Y') as fechaNoticia FROM noticia";

  $tittle="Noticias - Municipalidad de Siguatepeque";
  require_once '../layouts/header.php'; 
?>



<div class="tittle">
  <h1>Noticias</h1>
</div>
<div class="list-noticias">
  <div class="content-noticias">
    <?php  if ($noticia = mysqli_query($con, $query) or die("Error en la consulta")):?>
      <?php while ($columna = mysqli_fetch_assoc($noticia)): ?>
        <div class="contenido-noticia">
          <a href="../Noticia/noticia.php?id=<?php echo $columna['idnoticia'] ?>">
            <?php echo "<img src = 'data:image/jpeg;base64,".base64_encode($columna['imagen'])."'/>";; ?>
            <div class="noticias-detalles">
              <p class="titulo-noticias"><?php echo $columna["tituloNoticia"]; ?></p>
              <p class="fecha-noticias fa fa-calendar"> <?php echo $columna["fechaNoticia"]; ?></p>
              <p class="noticia-informacion"><?php echo $columna["descripcionNoticia"]; ?></p>
            </div>
            Más Informacion
          </a>    
        </div>
      <?php endwhile; ?>
    <?php  endif;  ?>
  </div>

</div>



<?php require_once '../layouts/footer.php'; ?>