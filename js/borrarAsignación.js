document.addEventListener("DOMContentLoaded", function() {
  const modalButtons = document.querySelectorAll('.eliminar-relación');
  const usuarioIdInput = document.createElement("input");
  usuarioIdInput.type = "hidden";
  usuarioIdInput.name = "usuario_id";
  
  const materiaIdInput = document.createElement("input");
  materiaIdInput.type = "hidden";
  materiaIdInput.name = "materia_id";

  modalButtons.forEach(button => {
    button.addEventListener('click', function() {
      const usuarioId = this.getAttribute('data-usuario-id');
      const materiaId = this.getAttribute('data-materia-id');

      usuarioIdInput.value = usuarioId;
      materiaIdInput.value = materiaId;

      const form = document.querySelector('#popup-modal form');
      form.appendChild(usuarioIdInput);
      form.appendChild(materiaIdInput);
    });
  });
});