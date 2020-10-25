<?php
$tittle ="Festival del Pino - Municipalidad de Siguatepeque";
require_once '../layouts/header.php';
?>


<div class="tittle">
    <h1>FESTIVAL DEL PINO</h1>
</div>
<div class="contenido-fiestas">
    <img src="/img/festivales/logofenapin.png" alt="" class="imagen-fiesta fenapin">
    <p>
        <b>FESTIVAL NACIONAL DEL PINO (FENAPIN)</b> es un evento que cautiva a todos los ciudadanos de siguatepeque , el
        principal objetivo del festival es promover la protección y conservar el patrimonio ecológico y cultural del
        municipio por
        medio de actividade recreativas esta feria se realiza desde 1976 con el objetivo de incrementar el turismo
        interno
        y de igual forma hacer conciencia de la vital importancia de cuidar los pinos de país.
        <br><br>
        El Festival Nacional del Pino, es un evento que nació por la necesidad de mostrar a Honduras y el mundo la
        abundante foresta
        que tiene Siguatepeque, lo que deriva un clima agradable y cuantiosa agua.
        <br><br>
        Cuando inicio no tuvo un objetivo definido sobre lo que significaba el festival del Pino, ha medida han pasado
        los años se nombraron
        varias comisiones que trabajan presencialmente para que cada año se realice este gran festejo. Para que el
        público de la ciudad y
        turistas puedan disfrutar de todas las actividades realizadas durante la fecha. Siguatepeque es conocida como la
        Ciudad de los pinares
        debido a su flora abundante de pino, esto hace que puedan gozar de un clima fresco y agradable.

    </p>
    <u><b>Se desarrollan una serie de actividades:</b></u>
    <ul class="actividades">
        <br>
        <li>Jornada Artistica</li>
        <li>Jornada Cultural</li>
        <li>Desfile de carrozas</li>
        <li>Elección de la Señorita "Belleza FENAPIN"</li>
        <li>Actividades Deportivas</li>
        <li>Fiesta del Recuerdo</li>
        <li>Feria Agro-Industrial</li>
        <li>El carnaval el cual reúne conjuntos musicales y la Marimba</li>

    </ul>
    <div class="galeria">
        <div class="imagenes-galeria">
            <img src="/img/festivales/festivalPino5.jpg" alt="">
            <img src="/img/festivales/festivalPino1.jpg" alt="">
            <img src="/img/festivales/festivalPino2.jpg" alt="">
            <img src="/img/festivales/festivalPino3.jpg" alt="">
            <img src="/img/festivales/festivalPino4.jpg" alt="">

        </div>
        <div onclick="mover(-1)" class="izquiera">
            <span class="fas fa-angle-left"></span>
        </div>
        <div onclick="mover(1)" class="derecha">
            <span class="fas fa-angle-right"></span>
        </div>


    </div>

</div>
<!-- Footer -->
<?php require_once '../config/db.php'; ?>
<?php require_once '../layouts/footer.php'; ?>