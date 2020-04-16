// Codigo para las ventanas modales

// Declaración de variables
var modalContenido = document.getElementById("modalImagen");
var modalImagenContenido = document.getElementById("modalContenedor");
var cerrarModal = document.getElementsByClassName("cerrarVentana")[0];

// Funciones

modalContenido.onclick = function () {
  modalImagenContenido.style.display = "block";
};

cerrarModal.onclick = function () {
  modalImagenContenido.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == this.modalImagenContenido) {
    this.modalImagenContenido.style.display = "none";
  }
};
