window.addEventListener("DOMContentLoaded", (event) => {
  const menu = document.getElementById("toggle-menu");
  const menuBtn = document.getElementById("toggle-btn");
  const mediaQuery = window.matchMedia("(min-width: 768px)");

  function handleMediaChange(e) {
    if (e.matches) {
      // Si estamos en la vista de escritorio, asegurémonos de que el menú esté visible
      menu.classList.add("desktop-active");
    } else {
      // Si estamos en la vista móvil, asegurémonos de que el menú esté oculto
      menu.classList.remove("desktop-active");
    }
  }

  // Escucha los cambios en el tamaño de la pantalla
  mediaQuery.addListener(handleMediaChange);
  
  // Asegúrate de que el estado del menú sea correcto cuando se carga la página
  handleMediaChange(mediaQuery);

  menuBtn.addEventListener("click", (event) => {
    event.stopPropagation();
    menu.classList.toggle("active");
  });

  document.body.addEventListener("click", (event) => {
    if (event.target !== menu && !menu.contains(event.target)) {
      menu.classList.remove("active");
    }
  });
});