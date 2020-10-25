<!-- Header -->
<?php
  $tittle ="Obras Publicas - Municipalidad de Siguatepeque";
  require_once '../layouts/header.php'; 
?>

<!-- Contenido de obras publicas-->
<div class="oficina">
    <h1>OBRAS PÚBLICAS</h1>
    <aside class="aside">
        <img src="/img/deptos/obras-publicas.png" alt="" class="imagenDepto">
        <div>
            <h3>SERVICIOS PRESTADOS</h3>
            <ol type="disc">
                <li>Permisos de contrucción.</li>
                <li>Permisos de terrajes.</li>
                <li>Permisos de contrucción de mausoleos.</li>
                <li>Permisos Apertura de calle.</li>
                <li>Elaboración de Plano.</li>
            </ol>
        </div>
    </aside>

    <div class="informacion-departamento">
    </div>
</div>

<!-- Footer -->
<?php require_once '../config/db.php'; ?>
<?php require_once '../layouts/footer.php'; ?>