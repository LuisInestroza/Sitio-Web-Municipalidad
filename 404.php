<?php 
$tittle = "No se encontro la pagina - Municipalidad de Siguatepeque";
require_once 'view/layouts/header.php'; ?>

<div class="error-404">
    <h1>¡LO SENTIMOS! ¡ERROR 404!</h1>
    <p>La página que está buscando no existe o ha ocurrido otro error. 
        Regrese o diríjase al boton para volver la pagina principal.
    </p>
    <div class="btn-page">
        <a href="/">Volver a la Pagina Principal</a>
    </div>
</div>

<?php require_once 'view/layouts/footer.php'; ?>