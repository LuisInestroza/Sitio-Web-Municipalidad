<!-- Header -->
<?php 
  $tittle ="Centro Turístico Eliben- Municipalidad de Siguatepeque";
  require_once '../layouts/header.php'; 
?>

<div class="tittle">
    <h1>CENTRO TURÍSTICO ELIBEN</h1>
</div>

<!-- Contenido -->
<div class="turismo">
    <!-- Aside -->
    <aside class="aside">
        <!-- Contenido de redes sociales -->
        <div class="contenedorContactos">
            <h4>REDES</h4>
            <div>
                <ul class="icons">
                    <li>
                        <a href="https://www.facebook.com/centroturistico.eliben" class="fab fa-facebook"></a>
                    </li>
                    <li>
                        <a href="#" class="fab fa-twitter"></a>
                    </li>
                    <li>
                        <a href="#" class="fab fa-instagram"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div>
            <h4>UBICACIÓN</h4>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d965.3429769312771!2d-87.90024674011958!3d14.577871631143775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f65be8cbfc746d9%3A0x26e306c5497cca3f!2sCentro%20Turistico%20ELIBEN!5e0!3m2!1ses!2shn!4v1583937806347!5m2!1ses!2shn"></iframe>
        </div>

    </aside>

    <div class="informacion-lugar">
        <img src="/img/lugares/eliben.jpg">
        <p>
            El Centro Turístico ELIBEN es un hotel de montana rústico y un lugar muy visitado por turistas caracterizado
            por
            sus precios bajos en cabañas.
            <br><br>
            Aquí se pueden hacer actividades al aire libre como andar en bicicletas de cuatro ruedas en la naturaleza.
            Al
            igual que caminatas por sus alrededores donde se puede apreciar el entorno y el aire fresco.
        </p>
    </div>

</div>

<!-- footer -->
<?php require_once '../config/db.php'; ?>
<?php require_once '../layouts/footer.php'; ?>