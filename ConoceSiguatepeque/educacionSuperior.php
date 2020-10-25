<!-- Header -->
<?php
$tittle = "Educación Superior - Municipalidad de Siguatepeque";
require_once '../layouts/header.php';
?>

<div class="tittle">
    <h1>UNIVERSIDADES EN SIGUATEPEQUE</h1>
</div>

<!-- Contenido de educación superior -->
<div class="lista-universidades">
    <div class="educacionSuperior">
        <div class="contenedor">
            <a href="/EducacionSuperior/uth.php">
                <img src="/img/logosUniversidades/logoUTH.png" alt="">
                <p class="nombreUniversidad">Universidad Tecnológica de Honduras</p>
            </a>
        </div>
        <div class="contenedor">
            <a href="/EducacionSuperior/umh.php">
                <img src="/img/logosUniversidades/logoUMH.png" alt="">
                <p class="nombreUniversidad">Universidad Metropolitana de Honduras</p>
            </a>
        </div>
        <div class="contenedor">
            <a href="/EducacionSuperior/unacifor.php">
                <img src="/img/logosUniversidades/logoUnacifor.png" alt="">
                <p class="nombreUniversidad">UNACIFOR Siguatepeque Honduras</p>
            </a>
        </div>
        <div class="contenedor">
            <a href="/EducacionSuperior/upnfm.php">
                <img src="/img/logosUniversidades/logoUPNFM.png" alt="">

                <p class="nombreUniversidad">Universidad Pedagógica Francisco Morazán</p>
            </a>
        </div>
        <div class="contenedor">
            <a href="/EducacionSuperior/unah.php">
                <img src="/img/logosUniversidades/logoUNAH.png" alt="">

                <p class="nombreUniversidad">UNAH-CREAD Siguatepeque Honduras</p>
            </a>
        </div>
        <div class="contenedor">
            <a href="/EducacionSuperior/unicah.php">
                <img src="/img/logosUniversidades/logoUnicah.png" alt="">
                <p class="nombreUniversidad">Universidad Católica de Honduras</p>
            </a>
        </div>
    </div>

</div>
<!-- Final del div -->

<!-- Foorer -->
<?php require_once '../config/db.php'; ?>
<?php require_once '../layouts/footer.php'; ?>