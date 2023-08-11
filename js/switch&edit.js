// Switch para inactividad
document.getElementById('checkboxSwitch').addEventListener('change', function() {
  let labelActivo = document.getElementById('activo');
  let labelInactivo = document.getElementById('inactivo');
  
  if (this.checked) {
    labelActivo.style.display = "inline"; // Mostrar 'activo'
    labelInactivo.style.display = "none"; // Ocultar 'inactivo'
  } else {
    labelActivo.style.display = "none"; // Ocultar 'activo'
    labelInactivo.style.display = "inline"; // Mostrar 'inactivo'
  }
});


//Abrir y cerrar la ventana "editar permiso"
let abrirVentanas = document.querySelectorAll(".editar-permiso-btn");
let cerrarBtn = document.getElementById("cerrar-permiso-btn");
let cerrarX = document.getElementById("cerrar-ventana-x");

let ventanaEditar = document.getElementById("modal");

abrirVentanas.forEach(function(btn) {
  btn.addEventListener("click", function() {
    ventanaEditar.showModal();
    let email = this.getAttribute('data-email');
    document.getElementById('editar-email').value = email;
  });
});

cerrarBtn.addEventListener("click", (e)=> {
  ventanaEditar.close();
  e.preventDefault();
});

cerrarX.addEventListener("click", ()=> {
  ventanaEditar.close();
});


