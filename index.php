<!DOCTYPE html>

<?php include 'email.php' ?>

<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>ChargeFix</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/media-queries.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" /> <!-- Fontawesome CDN Link -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>

  <body>
    <!-- Scroll Up Arrow Button -->
    <div class="scroll-up-button"> <a><i class="fas fa-arrow-up"></i></a> </div>

    <!-- Navbar -->
    <!----------------------------------------------------------------------------------------------------------->
    <nav>
      <div class="navbar" id="navbar">
        <div class="logo"><a>ChargeFix</a></div>
        <ul class="menu">
          <li><a href="#about" class="navbarAbout-btn">Nosotros</a></li>
          <li><a href="#services" class="navbarService-btn">Servicio</a></li>
          <li><a href="#technologies" class="navbarTechnologies-btn">Tecnologías</a></li>
          <li><a href="#contact" class="navbarContact-btn">Contacto</a></li>
        </ul>
        <div class="navbar-contactButtons">
          <a class="far fa-envelope emailBtn-navbar" href="#contact"></a>
          <a class="fab fa-whatsapp whatsappBtn-navbar" href="https://wa.me/5491173690835" target="_blank"></a>
        </div>
    </nav>
    <!----------------------------------------------------------------------------------------------------------->


    <!-- Home -->
    <!----------------------------------------------------------------------------------------------------------->
    <section class="home" id="home">
      <div class="home-content">
        <div class="text">
          <img class="ChargeFix_Logo" src="images/ChargeFix_Logo.svg" alt="ChargeFix Logo"/>
          <div class="text-one">Su cargador,</div>
          <div class="text-two">nuestra especialidad</div>
          <div class="text-three"><span>Somos expertos en la reparación de cargadores de baterías 
            para autoelevadores y sistemas industriales.</span></div>
          <div class="contact-us-btn">    
            <button>
              <div class="contact-us-icon"> <i class="fas fa-paper-plane"></i> </div>
              <span>Contáctenos</span>
            </button>
          </div>
        </div>
      </div>
    </section>
    <!----------------------------------------------------------------------------------------------------------->


    <!-- About Us -->
    <!----------------------------------------------------------------------------------------------------------->
    <section class="about" id="about">
      <div class="content">
        <div class="titleNosotros"><span>Sobre nosotros</span></div>
        <div class="about-details">
          <div class="left">
            <img src="images/AboutUs1.jpg" alt="" />
          </div>
          <div class="right">
            <div class="topicMision">¿A qué nos dedicamos?</div>
            <div class="textMision">Nos enfocamos en brindar soluciones rápidas y confiables 
              para mantener sus equipos en funcionamiento óptimo. Con personal altamente capacitado y 
              utilizando componentes de última generación, repararemos sus cargadores para que operen de manera 
              eficiente y segura, maximizando así la productividad de su empresa. <br> En <b>ChargeFix</b>, 
              su cargador es nuestra especialidad, <br> y su satisfacción es nuestro compromiso.
            </div>
            <div class="experience">
              <div class="num">15</div>
              <div class="exp">
                Años de experiencia <br>
                en la industria
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!----------------------------------------------------------------------------------------------------------->


    <!-- Services -->
    <!----------------------------------------------------------------------------------------------------------->
    <section class="services" id="services">
      <div class="content">
        <div class="titleServicio"><span>Servicio</span></div>
        <div class="boxes">
          <div class="box">
            <div class="icon">
              <i class="fas fa-comments"></i>
            </div>
            <div class="topicBoxes1">1. Contacto</div>
            <p class="textBoxes1"> Para solicitar el servicio puede contactarnos por <a href="#contact">este medio.</a> </p>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fas fa-truck-loading"></i>
            </div>
            <div class="topicBoxes1">2. Recepción</div>
            <p class="textBoxes1">Coordinaremos cómo y cuándo recibir el equipo en nuestra oficina.</p>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fas fa-file-invoice"></i>
            </div>
            <div class="topicBoxes1">3. Presupuesto</div>
            <p class="textBoxesAlt1">Luego de la revisión, se le enviará una descripción completa del desperfecto, 
              detalles del procedimiento de reparación, costo y plazo de entrega.</p>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fas fa-tools"></i>
            </div>
            <div class="topicBoxes1">4. Reparación</div>
            <p class="textBoxes1">Con la aprobación del presupuesto, se procederá con el arreglo y 
              ensayo del equipo en el lapso estipulado.</p>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fas fa-dolly-flatbed"></i>
            </div>
            <div class="topicBoxes1">5. Entrega</div>
            <p class="textBoxes1">Finalizada la reparación, haremos la entrega en tiempo y forma.</p>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fas fa-shield-alt"></i>
            </div>
            <div class="topicBoxes1">6. Garantía</div>
            <p class="textBoxes1">Nuestras restauraciones cuentan con garantía de seis meses.</p>
          </div>
        </div>
      </div>
    </section>
    <!----------------------------------------------------------------------------------------------------------->


    <!-- Technologies -->
    <!----------------------------------------------------------------------------------------------------------->
    <section class="technologies" id="technologies">
      <div class="content">
        <div class="titleTecnologias"><span>Tecnologías</span></div>
        <div class="boxes">
          <div class="box">
            <div class="icon">
              <i class="fas fa-wave-square"></i>
            </div>
            <div class="topicBoxes2">Alta Frecuencia</div>
            <p class="textBoxes2">Cargadores que implementan tecnologías MOSFET o IGBT para operar
              en alta frecuencia con transformador de ferrite.</p>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fas fa-bolt"></i>
            </div>
            <div class="topicBoxes2">Clásicos 50Hz</div>
            <p class="textBoxes2">Cargadores con transformador de hierro de baja frecuencia y
              rectificador convencional o bien con tiristores controlados.</p>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fas fa-car-battery"></i>
            </div>
            <div class="topicBoxes2">Baterías</div>
            <p class="textBoxes2">Cargadores aplicables a todas las tecnologías de baterías como 
              Plomo-Calcio inundadas o AGM, Niquel-Cadmio e Ion de Litio.</p>
          </div>
          <div class="box">
            <div class="icon">
              <i class="fas fa-tags"></i>
            </div>
            <div class="topicBoxes2">Marcas</div>
            <p class="textBoxes2">Reparamos cargadores de marcas tanto nacionales como importadas 
              (ejemplos: EnerSys, Benning, Micropower, Polar, ENERGIT, VERBAT, etc).</p>
          </div>
      </div>
    </section>
    <!----------------------------------------------------------------------------------------------------------->


    <!-- Contact -->
    <!----------------------------------------------------------------------------------------------------------->
    <section class="contact" id="contact">
      <div class="content">
        <div class="titleContacto"><span>Contacto</span></div>
        <div class="text">
          <div class="topicContacto">¿En qué podemos ayudar?</div>
          <div class="textContacto">Envíenos un mensaje por WhatsApp <br> o por Email, responderemos a la brevedad. </div>
          <div class="contactButtons">  
            <a href="https://wa.me/5491173690835" target="_blank">
              <button class="btnWhatsApp">
                <div class="contactIcons"> <i class="fab fa-whatsapp"></i> </div>
                <span>WhatsApp</span>
              </button>
            </a>
          </div>

        <span id="formInfo">
          <?php echo $alert;?> <!-- Form feedback -->
        </span>

          <img id="formAdvIcon" hidden="true" width="50" height="45" img src="images/adv.png" alt="">
          </img> <p class="formErrorStyle" id="formError"></P>

          <br>

          <h3 class="contact-form-title-text">Formulario de Contacto (Email):</h3>

          <form id="contactForm" method="post">
            <div>
              <div class="formFields">
                <input class="fontFamily" type="text" name="name" placeholder="Nombre *" id="name">
              </div>
    
              <div class="formFields">
                <input class="fontFamily" type="email" name="email" placeholder="Email *" id="email">
              </div>
    
              <div class="formFields">
                <input class="fontFamily" type="text"  name="phone" placeholder="Teléfono de contacto *" id="phone">
              </div>
    
              <div class="formFields">
                <textarea class="fontFamily" name="message" rows="6" id="message" placeholder="Mensaje *"></textarea>
              </div>
              
              <div class="contactButtons">
                <button class="submitButton" id="formSubmit" name="formSubmit" type="submit">
                <span>Enviar</span>
                </button>
              </div>
            </div>
          </form>

          <br>

          <div class="text-ubicacion">📍 San Isidro, Provincia de Buenos Aires, Argentina.</div>
          <div class="emailContactoText">contacto@chargefix.com.ar</div>
        </div>
      </div>
    </section>
    <!----------------------------------------------------------------------------------------------------------->

    <!-- Footer -->
    <footer>
      <div class="textFooter"> <span> © 2024 ChargeFix </span> | Todos los derechos reservados </div>
    </footer>

    <script src="js/script.js"></script>

  </body>
</html>