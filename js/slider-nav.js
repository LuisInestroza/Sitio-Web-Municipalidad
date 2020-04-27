// Implementacion de secuencias de JavaScript para animaciones
var slideIndex = 1;
showSlide(slideIndex);

function currentSlides(n) {
  showSlide((slideIndex = n));
}

// Mostrar los slides
function showSlide(n) {
  var i;
  var slide = document.getElementsByClassName("mySlide");
  var dot = document.getElementsByClassName("dot");
  if (n > slide.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slide.length;
  }
  for (i = 0; i < slide.length; i++) {
    slide[i].style.display = "none";
  }
  for (i = 0; i < dot.length; i++) {
    dot[i].className = dot[i].className.replace(" active", "");
  }
  slide[slideIndex - 1].style.display = "block";
  dot[slideIndex - 1].className += " active";
}
