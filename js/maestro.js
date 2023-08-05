//Abrir y cerrar la ventana "editar maestro"
let abrirMaestro = document.getElementById("editar-maestro-btn");
let cerrarMaestroBtn = document.getElementById("cerrar-maestro-btn");
let cerrarMaestroX = document.getElementById("cerrar-maestro-x");

let borrarMaestro = document.getElementById("borrar-maestro-btn");

let maestroVentana = document.getElementById("editar-maestro");

abrirMaestro.addEventListener("click", ()=> {
  maestroVentana.showModal();
});

cerrarMaestroBtn.addEventListener("click", (e)=> {
  maestroVentana.close();
  e.preventDefault();
})
cerrarMaestroX.addEventListener("click", ()=> {
  maestroVentana.close();
})



//Abrir y cerrar la ventana "crear maestro"
let nuevoMaestro = document.getElementById("crear-maestro-btn");
let cerrarNuevoBtn = document.getElementById("cerrar-nuevo-btn");
let cerrarNuevoX = document.getElementById("cerrar-nuevo-x");

let nuevoVentana = document.getElementById("nuevo-maestro");

nuevoMaestro.addEventListener("click", ()=> {
  nuevoVentana.showModal();
});

cerrarNuevoBtn.addEventListener("click", (e)=> {
  nuevoVentana.close();
  e.preventDefault();
})
cerrarNuevoX.addEventListener("click", ()=> {
  nuevoVentana.close();
})


