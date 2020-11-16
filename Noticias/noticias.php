<?php

  require_once '../config/db.php';
  mysqli_query($conexion, "SET lc_time_names = 'es_ES'");
  $query = "SELECT idNoticia, imagenNoticia, tituloNoticia, descripcionNoticia, date_format(fechaNoticia, '%d de %M del %Y') as fechaNoticia FROM noticia";
  $tittle="Noticias - Municipalidad de Siguatepeque";
  require_once '../layouts/header.php';
?>



<div class="tittle">
    <h1>Noticias</h1>
</div>
<div class="lista-noticias">
    <div class="noticias">
        <?php  if ($noticia = mysqli_query($conexion, $query) or die("Error en la consulta")):?>
        <?php while ($columna = mysqli_fetch_assoc($noticia)): ?>
        <div class="contenedor">
            <a href="../Noticia/noticia.php?id=<?php echo $columna['idNoticia'] ?>">
                <?php echo "<img src = 'data:image/jpeg;base64,".base64_encode($columna['imagenNoticia'])."'/>";;?>
                <div class="noticias-detalles">
                    <p class="titulo-noticias"><?php echo $columna["tituloNoticia"]; ?></p>
                    <p class="fecha-noticias"> 
                        <i class="fa fa-calendar"></i>
                        <?php echo $columna["fechaNoticia"]; ?>
                    </p>
                    <div class="noticia-informacion">
                        <?php echo $columna["descripcionNoticia"]; ?>
                    </div>
                </div>
                <b>Más Informacion</b>
            </a>
        </div>
        <?php endwhile; ?>
        <?php  endif;  ?>
    </div>

</div>



<?php require_once '../layouts/footer.php'; ?>