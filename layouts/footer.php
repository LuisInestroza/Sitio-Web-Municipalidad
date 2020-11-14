<?php
 
  $imagenNoticia= "SELECT idNoticia, imagenNoticia, tituloNoticia 
                      FROM noticia WHERE idNoticia = 
                      (SELECT MAX(idNoticia) FROM noticia);";

  
?>

<!-- footer -->
<footer class="footer">
    <div class="links-footer">
        <p class="tituloFooter"><b>Links</b></p>
        <div>
            <ul>
                <li><a href="https://www.presidencia.gob.hn/">Casa Presidencial</a></li>
                <li><a href="/Noticias/noticias.php">Noticias</a></li>
                <li><a href="#">Agenda</a></li>
                <li><a href="/ConoceSiguatepeque/contactos.php">Contacto</a></li>
            </ul>
        </div>
    </div>
    <div>
        <div class="links-empresa">
            <p class="tituloFooter"><b>Empresa</b></p>
            <ul>
                <li><a href="/Empresa/mision.php">Misión</a></li>
                <li><a href="/Empresa/vision.php">Visión</a></li>
                <li><a href="/Empresa/valores.php">Valores</a></li>
            </ul>
        </div>
    </div>


    <!-- Contenido de noticias -->
    <div class="noticias-recientes">
        <p class="tituloFooter"><b>Noticias Recientes</b></p>
        <?php  if ($eventos = mysqli_query($conexion, $imagenNoticia) or die("Error en la consulta")):?>
        <?php while ($columna = mysqli_fetch_assoc($eventos)): ?>
        <a href="/Noticia/noticia.php?id=<?php echo $columna['idNoticia'] ?>">
            <?php echo "<img src = 'data:image/jpeg;base64,".base64_encode($columna['imagenNoticia'])." ' />";;?>
            <p class="titulo-noticia-reciente"><?php echo $columna['tituloNoticia']; ?></p>
        </a>

        <?php endwhile; ?>
        <?php  endif;  ?>
        <!-- <img src="/uploads/comunicados/comunicado.jpg" alt="" srcset="" onclick="imagen(this)"> -->
    </div>

    <!-- Contenido de redes sociales -->
    <div class="contenedorRedes">
        <p class="tituloFooter"><b>Síguenos</b></p>
        <div class="links">
            <ul class="icons">
                <li>
                    <a href="https://es-la.facebook.com/siguatepequealcaldia"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-google-plus"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <p class="copy"> <b>Municipalidad de Siguatepeque &copy 2020. All Rights Reserved</b> </p>
</footer>
</body>


<!-- Script de las funciones de animaciones de JavaScript -->
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-1.11.3.min.js"></script>
<script src="/js/slider.js"></script>
<script src="/js/menu.js"></script>
<script src="/js/botonArriba.js"></script>
<script src="/js/cbpFWTabs.js"></script>
<script src="/js/slideTab.js"></script>
<script src="/js/buscador.js"></script>
<script src="/js/slider-index.js"></script>
<script src="/js/modal.js"></script>
<script src="/js/galeria.js"></script>
<script src="/js/flickity.pkgd.min.js"></script>
<script src="/js/all.min.js"></script>






</html>