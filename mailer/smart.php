<?php 
// echo var_dump($_POST)

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'Arkadi29081994@gmail.com';                 // Наш логин
$mail->Password = 'ark$29$08$1994';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('Arkadi29081994@gmail.com', 'Pulse');   // От кого письмо 
$mail->addAddress('Arkadi29081994@gmail.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Details';
$mail->Body    = '
    User from site portfolio left a message <br> 
	Имя: ' . $name . ' <br>
	E-mail: ' . $email . '<br>
	Message: ' . $Message . '';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>