// Implementacion de secuencias de JavaScript para animaciones
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}

$(document).ready(main);

var contador = 1;

function main() {
  $(".fa.fa-bars").click(function() {
    // $('nav').toggle();

    if (contador == 1) {
      $("nav").animate({
        left: "0"
      });
      contador = 0;
    } else {
      contador = 1;
      $("nav").animate({
        left: "-100%"
      });
    }
  });
}
