<!-- Header -->
<?php 
  $tittle ="Balneario Water Island - Municipalidad de Siguatepeque";
  require_once '../layouts/header.php'; 
?>

<div class="tittle">
    <h1>Balneario Water Island</h1>
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
                        <a href="https://www.facebook.com/Water-Island-Siguatepeque-1391323324433228/"
                            class="facebook">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/waterislandsigua/?hl=es-la" class="instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div>
            <h4>UBICACIÓN</h4>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.4211142032686!2d-87.83662678575817!3d14.575063889818683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6595c1c5d18fc1%3A0x3a15fe9496841c5b!2sWater%20Island!5e0!3m2!1ses!2shn!4v1583937918634!5m2!1ses!2shn"></iframe>

        </div>

    </aside>

    <div class="informacion-lugar">

        <img src="/img/lugares/waterislan.jpg" alt="">
        <p>
            Somos un centro de recreación contamos con: piscinas con toboganes para adultos y niños, restaurante y bar,
            áreas
            de juegos, champas típicas para tu comodidad y descanso, salón para eventos y mucho más.

            <br><br>
            Piscinas con toboganes para adultos y niños, restaurante y bar, áreas de juegos, champas típicas para tu
            comodidad
            y descanso, salón para eventos y mucho más.
        </p>
    </div>

</div>

<!-- footer -->
<?php require_once '../config/db.php'; ?>
<?php require_once '../layouts/footer.php'; ?>