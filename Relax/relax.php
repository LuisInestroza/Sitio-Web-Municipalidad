<!-- Header -->
<?php 
  $tittle ="Relax - Municipalidad de Siguatepeque";
  require_once '../layouts/header.php'; 
?>
<div class="tittle">
    <h1>LUGARES POPULARES</h1>
</div>
<!-- Div de contenido -->
<div class="lista-lugares">
    <div class="lugares">
        <div class="contenedor">
            <a href="/Relax/centroEliben.php">
                <img src="/img/lugares/eliben.jpg" alt="" class="imagen">
                <p>Centro Turistico Eliben</p>
            </a>
        </div>
        <div class="contenedor">

            <a href="/Relax/balnearioAguasCalientes.php">
                <img src="/img/lugares/lakes.jpg" alt="" class="imagen">
                <p>Balneario Lake’s Aguas calientes</p>
            </a>
        </div>
        <div class="contenedor">
            <a href="/Relax/balnearioWaterIsland.php">
                <img src="/img/lugares/waterislan.jpg" alt="" class="imagen">
                <p>Balneario Water Island</p>
            </a>
        </div>
        <div class="contenedor">

            <a href="/Relax/plazaSanPedro.php">
                <img src="/img/lugares/plaza-sanpedro.jpg" alt="" class="imagen">
                <p>Plaza San Pedro Siguatepeque</p>
            </a>
        </div>
        <div class="contenedor">

            <a href="/Relax/bosqueCalanterique.php">
                <img src="/img/lugares/calanterique.jpeg" alt="" class="imagen">
                <p>Bosque Calenterique</p>
            </a>
        </div>
        <div class="contenedor">

            <a href="/Relax/centroSiguaxtreme.php">
                <img src="/img/lugares/siguaextreme.jpg" alt="" class="imagen">
                <p>CentroTurístico Siguaxtreme</p>
            </a>
        </div>
        <div class="contenedor">

            <a href="/Relax/parkPlaceCenter.php">
                <img src="/img/lugares/aventura.jpg" alt="" class="imagen">
                <p>Park Place Hotel & Cinema</p>
            </a>
        </div>
        <div class="contenedor">

            <a href="/Relax/casaGrande.php">
                <img src="/img/lugares/casagrande.jpg" alt="" class="imagen">

                <p>La Casa Grande Siguatepeque</p>
            </a>
        </div>
        <div class="contenedor">

            <a href="/Relax/granjaD'elia.php">
                <img src="/img/lugares/granja-delia.jpg" alt="" class="imagen">
                <p>Centro Turístico Granja D’elia</p>
            </a>
        </div>

    </div>
</div>
<!-- footer -->
<?php require_once '../config/db.php'; ?>
<?php require_once '../layouts/footer.php'; ?>