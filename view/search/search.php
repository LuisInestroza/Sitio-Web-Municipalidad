<?php
  
  $tittle ="Busqueda- Municipalidad de Siguatepeque";
  require_once '../layouts/header.php';
  require_once '../../helpers/busqueda.php';
?>

<div class="tittle">
  <h1>Busqueda: "<?php echo $buscar?>"</h1>
</div>
<div class="list-noticias">
  <div class="content-noticias">
      <?php while ($row = mysqli_fetch_assoc($resultadoBusqueda)): ?>
        <div class="contenido-noticia">
          <a href="../Noticia/noticia.php?id=<?php echo $row['idNoticia'] ?>">
            <?php echo "<img src = 'data:image/jpeg;base64,".base64_encode($row['imagenNoticia'])."'/>";;?>
            <div class="noticias-detalles">
              <p class="titulo-noticias"><?php echo $row["tituloNoticia"]; ?></p>
              <p class="fecha-noticias fa fa-calendar"> <?php echo $row["fechaNoticia"]; ?></p>
              <p class="noticia-informacion"><?php echo $row["descripcionNoticia"]; ?></p>
            </div>
            <b>Más Informacion</b>
          </a>    
        </div>
 
      <?php endwhile; ?>
  </div>

</div>


<?php require_once '../layouts/footer.php'; ?>