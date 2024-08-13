// Scroll Up Arrow Button
let scrollBtn = document.querySelector(".scroll-up-button a");

window.onscroll = function () {
  if (document.documentElement.scrollTop > 150) {
    scrollBtn.classList.add("show");
  } else {
    scrollBtn.classList.remove("show");
  }
};

scrollBtn.onclick = function () {
  window.scrollTo(0, 0);
};

// "Contact Us" Button - Home Section
let contactBtn = document.querySelector(".contact-us-btn");
contactBtn.onclick = function () {
  window.scrollTo(0, document.documentElement.scrollHeight);
};

// Delete form history when page is reloaded
if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

/*----------------- Contact Form Validation -------------------------*/

const formName = document.getElementById("name");
const formPhone = document.getElementById("phone");
const formEmail = document.getElementById("email");
const formMessage = document.getElementById("message");
const form = document.getElementById ("contactForm");
const formError = document.getElementById ('formError');
const formAdvIcon = document.getElementById ('formAdvIcon');
const formInfo = document.getElementById ('formInfo');

formName.addEventListener('input', (e) => {
  // Remove any characters that are not letters in the 'name' field
  e.target.value = e.target.value.replace(/[^a-zA-Z\s]/g, ''); 
});

form.addEventListener('submit', (e) =>{
  let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  let errorMessage = '';

  if (formName.value === '' || formName.value == null) { errorMessage ='Por favor, ingrese su nombre.'; }
  else if (formName.value.length < 2) { errorMessage = 'Por favor, verifique su nombre.'; }
  else if (!formEmail.value.match(mailformat)) { errorMessage ='Por favor, verifique su dirección de correo.'; }
  else if (formPhone.value.length < 10) { errorMessage = 'Por favor, verifique su número de teléfono e incluya el código de área.'; }
  else if (formMessage.value === '') { errorMessage = 'Por favor, ingrese su mensaje.'; }
  
  if (errorMessage.length > 0){ 
    e.preventDefault(); 
    formError.innerText = errorMessage;
    formAdvIcon.hidden = false;
  }
  else{
    formError.innerText ='Enviando, aguarde...';
    formAdvIcon.hidden = true;
  }
});

form.addEventListener('click', (e) =>{
  formInfo.hidden = true;
});