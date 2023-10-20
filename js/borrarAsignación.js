document.addEventListener("DOMContentLoaded", function() {
  const modalButtons = document.querySelectorAll('.eliminar-relacion');
  
  modalButtons.forEach(button => {
    const usuarioIdInput = document.createElement("input");
    usuarioIdInput.type = "hidden";
    usuarioIdInput.name = "usuario_id";
    
    const materiaIdInput = document.createElement("input");
    materiaIdInput.type = "hidden";
    materiaIdInput.name = "materia_id";
    
    button.addEventListener('click', function() {
      const usuarioId = this.getAttribute('data-id-usuario');
      const materiaId = this.getAttribute('data-id-materia');

      usuarioIdInput.value = usuarioId;
      materiaIdInput.value = materiaId;

      console.log(usuarioId);
      console.log(materiaId);
      const form = document.querySelector('#popup-modal form');
      form.appendChild(usuarioIdInput);
      form.appendChild(materiaIdInput);
    });
  });
});