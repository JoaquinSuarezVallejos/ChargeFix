// Menú de Navegación (Sticky NavBar) y Flecha Scroll Up (Volver a Inicio)
let nav = document.querySelector("nav");
let scrollBtn = document.querySelector(".scroll-up-button a");
console.log(scrollBtn);
let val;
window.onscroll = function() 
{
  if (document.documentElement.scrollTop > 60) {
    nav.classList.add("sticky");
    scrollBtn.style.display = "block";
  }
  else {
    nav.classList.remove("sticky");
    scrollBtn.style.display = "none";
  }
}

// NavBar: Botón "Inicio"
let navbar_home_btn = document.querySelector(".navbarHome-btn");
navbar_home_btn.onclick = function() {
  window.scrollTo(0, 0);
}

// NavBar: Botón "Nosotros"
let navbar_about_btn = document.querySelector(".navbarAbout-btn");
navbar_about_btn.onclick = function() {
  window.scrollTo(0, 577);
}

// NavBar: Botón "Servicio"
let navbar_service_btn = document.querySelector(".navbarService-btn");
navbar_service_btn.onclick = function() {
  window.scrollTo(0, 1180);
}

// NavBar: Botón "Tecnologías"
let navbar_tech_btn = document.querySelector(".navbarTechnologies-btn");
navbar_tech_btn.onclick = function() {
  window.scrollTo(0, 1850);
}

// NavBar: Botón "Contacto"
let navbar_contact_btn = document.querySelector(".navbarContact-btn");
navbar_contact_btn.onclick = function() {
  window.scrollTo(0, document.documentElement.scrollHeight);
}

// Botón "Contáctenos" - Inicio
let contactBtn = document.querySelector(".contact-us-btn");
contactBtn.onclick = function() {
  window.scrollTo(0, document.documentElement.scrollHeight);
}

// Menú de Navegación para Mobile (Side Navigation for Mobile)
let body = document.querySelector("body");
let navBar = document.querySelector(".navbar");
let menuBtn = document.querySelector(".menu-btn");
let cancelBtn = document.querySelector(".cancel-btn");
menuBtn.onclick = function() {
  navBar.classList.add("active");
  menuBtn.style.opacity = "0";
  menuBtn.style.pointerEvents = "none";
  body.style.overflow = "hidden";
  scrollBtn.style.pointerEvents = "none";
}
cancelBtn.onclick = function() {
  navBar.classList.remove("active");
  menuBtn.style.opacity = "1";
  menuBtn.style.pointerEvents = "auto";
  body.style.overflow = "auto";
  scrollBtn.style.pointerEvents = "auto";
}

// Barra de Desplazamiento Lateral inactiva cuando clickeamos en links de navegación
let navLinks = document.querySelectorAll(".menu li a");
for (var i = 0; i < navLinks.length; i++) {
  navLinks[i].addEventListener("click" , function() {
    navBar.classList.remove("active");
    menuBtn.style.opacity = "1";
    menuBtn.style.pointerEvents = "auto";
  });
}
