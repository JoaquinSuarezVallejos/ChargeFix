<?php
// https://www.youtube.com/watch?v=gfuuohGgD9I
// https://www.webhostingargentina.net/web-hosting.php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$alert = '';

debug_to_console("PhP Mailer running");

if(isset($_POST['formSubmit'])){
    
    debug_to_console("PhP Mailer submit");

    $myName = $_POST["name"];
    $myEmail = $_POST["email"];
    $myPhone = $_POST["phone"];
    $myMessage = $_POST["message"];

    try {
        // Server settings
        $mail->SMTPDebug = 0;                                       // Enable verbose debug output 0: Inactivo
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'server9.webhostingargentina.net';      // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'contacto@chargefix.com.ar';            // SMTP username
        $mail->Password   = 'MhM9DDYYRwkcyai?';                     // SMTP password
        $mail->SMTPSecure = 'ssl';                                  // Enable implicit TLS encryption
        $mail->Port       = 465;                                    // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        // Set proper encoding
        $mail->CharSet = 'UTF-8'; // Set character encoding to UTF-8
        $mail->Encoding = 'base64'; // Use base64 encoding for content
     
        // Recipients
        $mail->setFrom('contacto@chargefix.com.ar'); // Add a sender
        $mail->addAddress('alejandro@chargefix.com.ar'); // Add a recipient

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Nuevo Correo | ChargeFix';
    
        // Build email body
        $Mybody ="
                    <html>
                        <body>
                            <div>
                                <p>Nombre: {$myName} <br>Email: {$myEmail} <br>Teléfono: {$myPhone}</p>
                            </div>
                            <div>
                                <p>Mensaje:</p>
                                <p>{$myMessage}</p>
                            </div>
                        </body>
                    </html>
        ";
    
        $mail->Body = $Mybody;

        $mail->send();
        $alert= "   <div class = 'formMessage'>
                        <div> <img width='80' height='80' img src='images/emailSent.png'> </div> 
                        <div> <p>Mensaje enviado, ¡muchas gracias!</p> </div> 
                    </div>
                ";
    } 
    
    catch (Exception $e) {
        $alert= "   <div class = 'formMessage'> 
                        <div> <img width='80' height='50' img src='images/emailError.png'> </div> 
                        <div> <p>Ocurrió un error al enviar el mensaje...</p> <p>Por favor, reintente más tarde.</p> </div> 
                    </div>
                ";
    }
}

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
?>