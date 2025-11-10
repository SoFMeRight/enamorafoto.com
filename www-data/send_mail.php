<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/usr/share/php/libphp-phpmailer/autoload.php';
require '/media/timecapsule/Server/PHPMailer_AstralFocus/config.php';

if (isset($_POST['sender_name']) && isset($_POST['sender_email']) && isset($_POST['sender_phone']) && isset($_POST['sender_message'])) {
    $name = $_POST['sender_name'];
    $email = $_POST['sender_email'];
    $phone = $_POST['sender_phone'];
    $message = $_POST['sender_message'];
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'astralfocal@gmail.com';
        $mail->Password   = SMTP_PASSWORD;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        //Recipients
        $mail->setFrom('astralfocal@gmail.com', "$name");
        $mail->addAddress('kai.hamil@gmail.com');

        // Set the "Reply-To" address to the email entered in the form
        $mail->addReplyTo($email, "$name");

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Contact Form: Enamora Fotographía Inquiry";
        $mail->Body    = "Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
