// Codigo para dar funcinamiento a los submenus en modo responsive

$(document).ready(function () {
  // Captar el nombre de la clase de la etiqueta <li></li>
  $(".subMenu > a").click(function (e) {
    e.preventDefault();

    $(this)
      // mostrar los elementos de la etiqueta <li></li>
      .next(".children")
      .slideToggle();

    // Rotar la flecha
    $(".fa-angle-down").toggleClass("rotar");
  });
});
