// Código para las ventanas modales

// Declaración de variables
var modal = document.getElementById("modalContenedor");
var showModal = document.getElementById("modalImagen");
var cerrarModal = document.getElementsByClassName("cerrarVentana")[0];

// Funciones

// Mostrar las ventanas modales
showModal.onclick = function () {
  modal.style.display = "block";
};

// cerrar la ventana modal
cerrarModal.onclick = function () {
  modal.style.display = "none";
};

// Verificar si la ventana se esta mostrando
// en pantalla
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
