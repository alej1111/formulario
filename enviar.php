<!--En un archivo separado que guardarás con extensión .php y el cual se debe llamar enviar.php, pega el siguiente código:
      
<?php
require_once 'PHPMailer/Exception.php';
require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';

$name = $_POST['name'];
$mailForm = $_POST['mail'];
$projectname = $_POST['projectname'];
$contract = $_POST['contract'];
$message = $_POST['message'];

// Desde localhost
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;


// try {
//     //Server settings
//     $mail->SMTPDebug = 0;                      //Enable verbose debug output
//     $mail->isSMTP();                                            //Send using SMTP
//     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
//     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//     $mail->Username   = 'nome.ahumada@gmail.com';                     //SMTP username
//     $mail->Password   = 'secret';                               //SMTP password
//     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//     //Recipients
//     $mail->setFrom($mailForm, $name);
//     $mail->addAddress('nome.ahumada@gmail.com', 'Joe User');     //Add a recipient
    

//     //Attachments
//     $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//     $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//     //Content
//     $mail->isHTML(true);                                  //Set email format to HTML
//     $mail->Subject = 'Audit Request';
//     $mail->Body    = 'Mensaje: '.$message. " Enviado el: " .date('d/m/Y', time());
    
//     $mail->send();
//     echo 'Correo enviado';
// } catch (Exception $e) {
//     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
// }

// cPanel
try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.cpaneluser.dominio';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'correo@dominio.com';                     //SMTP username
    $mail->Password   = 'secret';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 'port cpanel';                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($mailForm, $name);
    $mail->addAddress('nome.ahumada@gmail.com', 'Joe User');     //Add a recipient
    

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Audit Request';
    $mail->Body    = 'Mensaje: '.$message. " Enviado el: " .date('d/m/Y', time());
    
    $mail->send();
    echo 'Correo enviado';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// Ejemplo
// $name = $_POST['name'];
// $mail = $_POST['mail'];
// $projectname = $_POST['projectname'];
// $contract = $_POST['contract'];
// $message = $_POST['message'];

// $header = 'From: ' . $mail . " \r\n";
// $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
// $header .= "Mime-Version: 1.0 \r\n";
// $header .= "Content-Type: text/plain";

// $name = "Este mensaje fue enviado por: " . $name . " \r\n";
// $mail .= "Su e-mail es: " . $mail . " \r\n";
// $projectname .= "Nombre del proyecto: " . $projectname . " \r\n";
// $contract .= "Contrato: " . $_POST['contract'] . " \r\n";
// $message .= "Mensaje: " . $_POST['message'] . " \r\n";
// $message .= "Enviado el: " . date('d/m/Y', time());

// $para = 'support@invauditors.tech';
// $asunto = 'Audit Request';

// mail($para, $asunto, utf8_decode($message), $header);

// header("Location:index.html");
?>
