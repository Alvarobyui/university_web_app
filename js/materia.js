document.addEventListener('DOMContentLoaded', (event) => {

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

  //Abrir y cerrar la ventana "editar maestro o alumno"
  let abrirMaestros = document.querySelectorAll(".editar-maestro-btn");
  let cerrarMaestroBtn = document.getElementById("cerrar-maestro-btn");
  let cerrarMaestroX = document.getElementById("cerrar-maestro-x");

  let borrarMaestros = document.querySelectorAll(".borrar-maestro-btn");

  let maestroVentana = document.getElementById("editar-maestro");


  cerrarMaestroBtn.addEventListener("click", (e) => {
      maestroVentana.close();
      e.preventDefault();
  });

  cerrarMaestroX.addEventListener("click", () => {
      maestroVentana.close();
  });

  // Si quieres agregar un listener a los botones de borrar, puedes hacer algo similar al de editar
  borrarMaestros.forEach(borrarMaestro => {
      borrarMaestro.addEventListener("click", () => {
          // Código que deseas ejecutar para borrar
      });
  });

  
  //Capturar inputs y poner valores por defecto en alumnos.php
  abrirMaestros.forEach(button => {
    button.addEventListener('click', function() {
/*       let maestroEmail = this.getAttribute('data-maestro-email')
 */      let idMateria = this.getAttribute('data-id-materia')
      let materia = this.getAttribute('data-materia');
      let des = this.getAttribute('data-des');
      
      maestroVentana.showModal();      
/*       document.getElementById('maestro-email').value = maestroEmail;
 */      document.getElementById('materia-id').value = idMateria;
      document.getElementById('materia-name').value = materia;
      document.getElementById('materia-des').value = des;
    });
  });
});
