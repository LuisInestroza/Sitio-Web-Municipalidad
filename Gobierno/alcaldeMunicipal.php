<?php  
  // Titulo de la pagina
  $tittle = "Alcalde Municipal - Municipalidad de Siguatepeque";
  // Llamar al header
  require_once '../layouts/header.php';
  
  
?>

<div class="alcaldía">
    <div class="contenedor">
        <img class="imagenDepto" src="/img/abgJCMP.png" alt="Abog. Juan Carlos Morales Pacheco">
        <div class="informacion-alcalde">
            <p class="nombre-alcalde">Abog. Juan Carlos Morales Pacheco</p>
            <p class="alcalde-municipal">ALCALDE MUNICIPAL</p>
            <p class="periodo-gobierno">2018-2022</p>
        </div>
    </div>

</div>

<!-- Footer -->
<?php require_once '../config/db.php'; ?>
<?php  require_once '../layouts/footer.php';?>