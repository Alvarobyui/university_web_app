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
let abrirVentana = document.getElementById("editar-permiso-btn");
let cerrarBtn = document.getElementById("cerrar-permiso-btn");
let cerrarX = document.getElementById("cerrar-ventana-x");

let ventanaEditar = document.getElementById("modal");

abrirVentana.addEventListener("click", ()=> {
  ventanaEditar.showModal();
});

cerrarBtn.addEventListener("click", (e)=> {
  ventanaEditar.close();
  e.preventDefault();
})
cerrarX.addEventListener("click", ()=> {
  ventanaEditar.close();
})
