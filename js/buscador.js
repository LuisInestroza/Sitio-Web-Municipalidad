var changeBtnColor = document.getElementById("buscarResponsive");

function mostrarOcultar(id) {
  var btnBuscador = document.getElementById(id);
  if (!btnBuscador) {
    return true;
  }
  if (btnBuscador.style.display == "block") {
    btnBuscador.style.display = "none";
    changeBtnColor.style.background = "#000000";
  } else {
    btnBuscador.style.display = "block";
    changeBtnColor.style.background = "#6c757d";
  }
  return true;
}
