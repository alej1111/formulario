<!--En un archivo separado que guardarás con extensión .php y el cual se debe llamar enviar.php, pega el siguiente código:
      
<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$projectname = $_POST['projectname'];
$contract = $_POST['contract'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$name = "Este mensaje fue enviado por: " . $name . " \r\n";
$mail .= "Su e-mail es: " . $mail . " \r\n";
$projectname .= "Nombre del proyecto: " . $projectname . " \r\n";
$contract .= "Contrato: " . $_POST['contract'] . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'support@invauditors.tech';
$asunto = 'Audit Request';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
