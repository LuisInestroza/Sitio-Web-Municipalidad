// Implementacion de secuencias de JavaScript para animaciones
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

// Mostrar los slides
function showSlides(n) {
  var i;
  var slides = document.querySelectorAll(
    ".servicios .servicios-contenedor .item-servicio"
  );
  var dots = document.querySelectorAll(".btn-slider span");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].style.background = "rgba(255, 255, 255, 0.1)";
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].style.background = "black";
}
