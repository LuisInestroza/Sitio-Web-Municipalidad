// Declaración de variables
var slideIndex = 1;

// LLamar la funcion de mostrar el slider de los servicios
showSlides(slideIndex);

// LLamar la funcion de los botones de cada slider
function plusSlides(n) {
  showSlides((slideIndex += n));
}

// LLamar la funcion de los botones de cada slider
function currentSlide(n) {
  showSlides((slideIndex = n));
}

// Mostrar los slides
function showSlides(n) {
  // Declaracion de varaibles
  var i;
  var slides = document.querySelectorAll(
    ".servicios .servicios-contenedor .item-servicio"
  );
  var dots = document.querySelectorAll(".btn-slider span");

  // Condicion de verificar el conteo de cada slider
  // Segun de derecha a izquierda
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }

  // Ciclo que hace el conteo de cada slider y su contenido
  for (i = 0; i < slides.length; i++) {
    // Por cada slider que se vaya muestrando se ira ocultado con la
    // propidad none de css
    slides[i].style.display = "none";
  }

  // Clido de hace el conteo de cada botones del slider
  for (i = 0; i < dots.length; i++) {
    // Los slider y su contenido se mostrar
    dots[i].style.background = "rgba(255, 255, 255, 0.1)";
  }
  // Mostrar el slider actual
  slides[slideIndex - 1].style.display = "block";
  // Dar estilo de color al contenido que muestre
  dots[slideIndex - 1].style.background = "black";
}
