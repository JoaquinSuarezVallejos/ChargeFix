// Menú de Navegación (NavBar) y Flecha Scroll Up (Volver a Inicio)
let nav = document.querySelector("nav");
let scrollBtn = document.querySelector(".scroll-up-button a");
window.onscroll = function() {
  if (document.documentElement.scrollTop > 100) {
    scrollBtn.style.display = "block";
  }
  else {
    scrollBtn.style.display = "none";
  }
}
scrollBtn.onclick = function() {
  window.scrollTo(0, 0);
}

// Botón "Contáctenos" - Inicio
let contactBtn = document.querySelector(".contact-us-btn");
contactBtn.onclick = function() {
  window.scrollTo(0, document.documentElement.scrollHeight);
}