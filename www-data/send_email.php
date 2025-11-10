<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '/usr/share/php/libphp-phpmailer/autoload.php';
require '/media/timecapsule/Server/PHPMailer_AstralFocus/config.php';

if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
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
        $mail->setFrom('astralfocal@gmail.com', "$name $surname");
        $mail->addAddress('kai.hamil@gmail.com');

        // Set the "Reply-To" address to the email entered in the form
        $mail->addReplyTo($email, "$name $surname");

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Contact Form: $subject";
        $mail->Body    = "Name: $name $surname<br>Email: $email<br>Phone: $phone<br>Subject: $subject<br>Message: $message";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
