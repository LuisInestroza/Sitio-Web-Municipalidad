// Declaracion de variables
var indexValue = 1;

// LLamar la funcion de mostrar las imagenes del slider
showImg(indexValue);

// LLamar la funcion de los botones de cada slider
function btnSlide(e) {
  showImg((indexValue = e));
}

// Funcion de cambio de cada slider
// Por cada 4 segundos
setInterval(function tiempo() {
  showImg((indexValue += 1));
}, 4000);

// Funcion de mostrar imagenes
function showImg(e) {
  // Declaración de variables
  var i;
  const img = document.querySelectorAll(".images  .hero-slider");
  const sliders = document.querySelectorAll(".btn-sliders span");

  // Condicion de verificar el conteo de cada slider
  // Segun de derecha a izquierda
  if (e > img.length) {
    indexValue = 1;
  }
  if (e < 1) {
    indexValue = img.length;
  }
  // Ciclo que hace el conteo de cada slider y su contenido
  for (i = 0; i < img.length; i++) {
    // Por cada slider que se vaya muestrando se ira ocultado con la
    // propidad none de css
    img[i].style.display = "none";
  }
  // Clido de hace el conteo de cada botones del slider
  for (i = 0; i < sliders.length; i++) {
    // Los slider y su contenido se mostrar
    sliders[i].style.background = "rgba(255,255,255,0.1)";
  }
  // Mostrar el slider actual
  img[indexValue - 1].style.display = "block";
  // Dar estilo de color al contenido que muestre
  sliders[indexValue - 1].style.background = "white";
}
