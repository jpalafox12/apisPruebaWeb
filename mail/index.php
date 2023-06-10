<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
$input = file_get_contents('php://input');
$data = json_decode($input, true);
$correo =$data["correo"];
$password = $data["password"];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'om4rrzs@gmail.com';                     //SMTP username
    $mail->Password   = 'bonyfzjmsisnsrpy';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    
    $mail->setFrom('om4rrzs@gmail.com', 'MR. Can');
    $mail->addAddress($correo , 'Joe User'); 
       //Add a recipient
   
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Correo de recuperacion';
    $mail->Body    = ' <html> 
   
    <body> 
    <div style="text-align:center;">
    <img src="https://d1kvlp4er3agpe.cloudfront.net/resources/images/groups/5/9/3/5/1/720_5hdsenq02q.jpeg" alt="Imagen" />
        <h1>Mr. Can</h1>
        <p> 
        Correo:  '.$correo .'  <br>
        Contraseña:  '.$password .'  <br>
    </p> 
    </div>
   
</body>
</html>';
    

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
