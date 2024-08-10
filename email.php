<?php
//https://www.youtube.com/watch?v=gfuuohGgD9I
//https://www.webhostingargentina.net/web-hosting.php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
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
        //Server settings
        $mail->SMTPDebug = 0;                                       //Enable verbose debug output 0: Inactivo
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'server9.webhostingargentina.net';      //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'contacto@chargefix.com.ar';            //SMTP username
        $mail->Password   = 'MhM9DDYYRwkcyai?';                     //SMTP password
        $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('contacto@chargefix.com.ar', 'Chargefix');
        $mail->addAddress('pas.suarez@gmail.com', 'Web Site');     //Add a recipient
        //$mail->addAddress('ellen@example.com');               //Name is optional
        //$mail->addReplyTo('info@example.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');
    
        //Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'WebSite Contact';
    
        // $file = fopen("bodyEmail.html", "r");
        // $str = fread($file, filesize("bodyEmail.html"));
        // $str = trim($str);
        // fclose($file);
        //$mail->Body    = $str;
    
        $Mybody ="
                    <html>
                        <body>
                            <div>
                                <p>Nombre: {$myName} <br>Correo: {$myEmail} <br>Teléfono: {$myPhone}</p>
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
        //debug_to_console("PhP Mailer -> Success!");
        //$alert= "<div class='formSuccess'><span><p class='formSuccessText'>¡Mensaje enviado! Muchas gracias, en breve nos pondremos en contacto.</p></span></div>";
        $alert= "   <div class = 'formeMessage'>
                        <div> <img width='80' height='80' img src='images/emailSent.png'> </div> 
                        <div> <p>¡Mensaje enviado!</p> <p>Muchas gracias, en breve nos pondremos en contacto.</p> </div> 
                    </div>
                ";
    } 
    
    catch (Exception $e) {
        //debug_to_console("PhP Mailer -> Error!");
        $alert= "   <div class = 'formeMessage'> 
                        <div> <img width='80' height='50' img src='images/emailError.png'> </div> 
                        <div> <p>¡Hubo un error al enviar el mensaje!</p> <p>Por favor, reintente más tarde.</p> </div> 
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