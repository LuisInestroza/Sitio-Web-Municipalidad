// Codigo para dar funcinamiento a los submenus en modo responsive

// Mostrar el Sub-menu
if (!(screen.width < 1366)) {
  $(document).ready(function () {
    // Captar el nombre de la clase de la etiqueta <li></li>
    $(".menu li").hover(function (e) {
      e.preventDefault();
      // mostrar los elementos de la etiqueta <li></li>
      $(this).children(".menu ul").stop(true, false, true).slideToggle(400);
    });
  });
} else {
  $(document).ready(function () {
    // Captar el nombre de la clase de la etiqueta <li></li>
    $(".subMenu > a").click(function (e) {
      e.preventDefault();

      $(this)
        // mostrar los elementos de la etiqueta <li></li>
        .next(".children")
        .slideToggle();
    });
  });
}

// Función para girar el icono de la flecha al hacer click
// En la etiqueta <a></a> de departamentos
function girarFlechaDepartamentos(id) {
  // Declarar variable
  var btnDepartamentos = document.getElementById(id);
  // Validar que retorne un valor
  if (!btnDepartamentos) {
    return true;
  }
  // Verificar si la flecha esta rotada a 180°
  if (btnDepartamentos.style.transform == "rotate(180deg)") {
    // En el caso que se presente  que rote a 0°
    btnDepartamentos.style.transform = "rotate(0deg)";
    btnDepartamentos.style.transition = "0.4s all";
  } else {
    // Sino que gire 180° para mostrar los elementos del
    // Sub-menú
    btnDepartamentos.style.transform = "rotate(180deg)";
  }
  return true;
}

// Función para girar el icono de la flecha al hacer click
// En la etiqueta <a></a> de conoce siguatepeque
function girarFlechaConoce(id) {
  // Declarar variables
  var btnConoce = document.getElementById(id);

  // Validar que retorne un valor
  if (!btnConoce) {
    return true;
  }
  // Verificar si la flecha esta rotada a 180°
  if (btnConoce.style.transform == "rotate(180deg)") {
    // En el caso que se presente  que rote a 0°
    btnConoce.style.transform = "rotate(0deg)";
    btnConoce.style.transition = "0.4s all";
  } else {
    // Sino que gire 180° para mostrar los elementos del
    // Sub-menú
    btnConoce.style.transform = "rotate(180deg)";
  }
  return true;
}
