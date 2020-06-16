<!-- Header -->
<?php
  $tittle ="Feria Patronal - Municipalidad de Siguatepeque";
  require_once '../layouts/header.php';
?>


<div class="tittle">
  <h1>FERIA PATRONAL</h1>
</div>
<!-- Contenido -->
<div class="contenido-fiestas">

  <img src="/img/festivales/FERIA-PATRON.jpg" alt="" class="imagen-fiesta fiesta-patronal">
  <p> 
    La feligresía católica de esta ciudad celebrará del 17 al 25 de enero de este año la feria patronal en honor a San
    Pablo Apóstol.
    <br><br>
    La parroquia San Pablo Apóstol, celebra el día de su santo patrón, con varias actividades religiosas,
    culturales y artísticas: Eucaristías, en honor a San Pablo, procesión por las calles de la ciudad y
    conciertos con grupos musicales de la zona.
    <br><br>
    Los fieles cristianos manifiestan, que la fiesta patronal es muy concurrida por fieles de la zona y peregrinos de
    diferentes partes del país, quienes vienen a ofrecer su acción de gracias y pedir la intercesión de San Pablo.
    Otro ingrediente en la feria patronal es la participación de los grupos con las típicas comidas de la localidad.
    <br><br>
    El 25 de enero, a la 5:00 de la mañana, se desarrollará una alborada y mañanitas al patrón San Pablo, a las 7:00 de 
    la mañana venta de comida durante todo el día, a las 8:00 de la mañana animación y alabanzas y a las 10:00 de la mañana 
    Santa Eucaristía presidida por el vicario general de la Diócesis
    <br><br>
    Al mediodía repique de campanas con música de banda, a las 5:00 de la tarde el desarrollo del Santo Rosario y Novena, 
    a las 6:00 de la tarde la celebración de la Santa Eucaristía, 7:00 de la noche la procesión con el patrón San Pablo, 
    a las 8:00 de la noche la animación y música de banda y a las 9:00 de la noche el show de luces y quema del toro fuego
  </p>

  <div class="galeria">
    <div class="imagenes-galeria">
      <img src="/img/festivales/feria-aptrol-san-pablo3.jpg" alt="">
      <img src="/img/festivales/feriaSanPablo1.jpg" alt="">
      <img src="/img/festivales/feriaSanPablo4.jpg" alt="">
      <img src="/img/festivales/feriaSanPablo3.jpg" alt="">
      <img src="/img/festivales/feriaSanPablo2.jpg" alt="">
    </div>
    <div onclick="mover(-1)" class="izquiera">
      <span class ="fas fa-angle-left"></span>
    </div>
    <div onclick="mover(1)" class="derecha">
      <span class ="fas fa-angle-right"></span>
    </div>
  </div>
</div>



<!-- Footer -->
<?php require_once '../layouts/footer.php'; ?>