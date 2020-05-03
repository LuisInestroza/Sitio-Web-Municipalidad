// Captar el botón de mostrar el buscador
var changeBtnColor = document.getElementById("buscarResponsive");

// Función de ocultar y mostrar el buscador
function mostrarOcultar(id) {
  // Captar el div del buscador
  var btnBuscador = document.getElementById(id);
  // Verificar si esta activo
  if (!btnBuscador) {
    return true;
  }
  // Si el div esta mostrado
  if (btnBuscador.style.display == "block") {
    // Ocultar el div y cambiar el color al hacer click
    btnBuscador.style.display = "none";
    // changeBtnColor.style.background = "transparent";
  } else {
    // Mostrar el div y cambiar el color del button
    btnBuscador.style.display = "block";
    // changeBtnColor.style.background = "#000000";
  }
  return true;
}
