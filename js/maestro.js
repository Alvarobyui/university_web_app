document.addEventListener('DOMContentLoaded', (event) => {
    //Abrir y cerrar la ventana "editar maestro"
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


  /* abrirMaestros.forEach(abrirMaestro => {
    abrirMaestro.addEventListener("click", () => {
        maestroVentana.showModal();
    });
  }); */
  //Capturar inputs y poner valores por defecto en alumnos.php
  abrirMaestros.forEach(button => {
    button.addEventListener('click', function() {
      let email = this.getAttribute('data-email');
      let nombre = this.getAttribute('data-nombre');
      let apellido = this.getAttribute('data-apellido');
      let contacto = this.getAttribute('data-contacto');
      
      maestroVentana.showModal();
      document.getElementById('alumno-email').value = email;
      document.getElementById('alumno-name').value = nombre;
      document.getElementById('alumno-surname').value = apellido;
      document.getElementById('alumno-contact').value = contacto;
    /*  document.getElementById('editar-maestro').showModal(); */
    });
  });
});

