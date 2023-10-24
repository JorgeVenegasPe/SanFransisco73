// const sign_in_btn = document.querySelector("#sign-in-btn");
// const sign_up_btn = document.querySelector("#sign-up-btn");
// const container = document.querySelector(".container");

// sign_up_btn.addEventListener("click", () => {
//   container.classList.add("sign-up-mode");
// });

// sign_in_btn.addEventListener("click", () => {
//   container.classList.remove("sign-up-mode");
// });

// Espera a que el documento esté completamente cargado
document.addEventListener("DOMContentLoaded", function () {
  // Obtiene las referencias a los elementos necesarios
  const container = document.querySelector(".container");
  const signInButton = document.querySelector("#sign-in-btn");

  // Agrega un controlador de eventos para el botón de "Sign up"
  signInButton.addEventListener("click", function () {
    container.classList.remove("sign-up-mode");
  });
});
