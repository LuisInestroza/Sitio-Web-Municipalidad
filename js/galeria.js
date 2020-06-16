// Codigo para las galerias de imagenes
// Delcaracion de variable
var indexValue = 1;
// Llamar la funcion de mostrar las imagenes
mostrarGaleria(indexValue);

// Funcion de mover las imagenes
function mover(e) {
  mostrarGaleria((indexValue += e));
}

// Funcion de mostrar las imagenes
function mostrarGaleria(e) {
  // Declaracion de variables
  var i;
  const desplazar = document.querySelectorAll(".galeria img"); // Detectar la clase que contiene las imagenes
  // Verificar si hay desplazamiento
  if (e > desplazar.length) {
    indexValue = 1;
  }
  if (e < 1) {
    indexValue = desplazar.length;
  }
  for (i = 0; i < desplazar.length; i++) {
    //   Oculat cadad imagen a avanzar
    desplazar[i].style.display = "none";
  }
  // Mostrar las imagnes
  desplazar[indexValue - 1].style.display = "block";
}
