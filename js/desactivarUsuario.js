document.addEventListener("DOMContentLoaded", function() {
  const modalButtons = document.querySelectorAll('.eliminar-btn');
  const usuarioIdInput = document.createElement("input");
  usuarioIdInput.type = "hidden";
  usuarioIdInput.name = "usuario_id";
  
  modalButtons.forEach(button => {
    button.addEventListener('click', function() {
      const usuarioId = this.getAttribute('data-id');

      usuarioIdInput.value = usuarioId;

      const form = document.querySelector('#popup-modal form');
      form.appendChild(usuarioIdInput);
    });
  });
});