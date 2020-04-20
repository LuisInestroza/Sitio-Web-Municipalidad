function mostrarOcultar(id) {
  var btnBuscador = document.getElementById(id);
  if (!btnBuscador) {
    return true;
  }
  if (btnBuscador.style.display == "block") {
    btnBuscador.style.display = "none";
  } else {
    btnBuscador.style.display = "block";
  }
  return true;
}
