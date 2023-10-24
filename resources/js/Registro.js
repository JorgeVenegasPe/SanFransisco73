// Agrega esto al final de tu archivo app.js

// Espera a que el documento esté completamente cargado
document.addEventListener("DOMContentLoaded", function () {
  // Obtiene las referencias a los botones y el contenedor
  const sign_in_btn = document.querySelector("#sign-in-btn");
  const sign_up_btn = document.querySelector("#sign-up-btn");
  const container = document.querySelector(".container");

  // Agrega la clase "sign-up-mode" al contenedor para activar el modo de registro
  container.classList.add("sign-up-mode");
});
