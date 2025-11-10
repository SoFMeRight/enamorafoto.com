<?php
	
	//reciving address
	$mail_to = 'astralfocal@gmail.com'; 
	
	// specify your email here


	// Assigning data from $_POST array to variables

	$name = $_POST['sender_name'];
	$mail_from = $_POST['sender_email'];
	$phone = $_POST['sender_phone'];
	$message = $_POST['sender_message'];
	$checkbbox = $_POST['custom_object'];
    $startmonth = $_POST['StartMonth'];


if( $checkbbox == 'Yes') 
{
    $Custom_Object = "want Custom Object";
}
else
{
    $Custom_Object = "Do not want Custom Object";
}  



	
	// Construct subject of the email


	$subject = 'www.mysite.com Message from visitor ' . $name;

	// Construct email body


	$body_message = 'From: ' . $name . "\r\n";
	$body_message .= 'E-mail: ' . $mail_from . "\r\n";
	$body_message .= 'Phone: ' . $phone . "\r\n";

	// Check box

	$body_message .= 'custom obj: ' . $Custom_Object . "\r\n";
	// drop down
	$body_message .= 'Start Month: ' . $startmonth . "\r\n";

	$body_message .= 'Message: ' . $message;

	// Construct headers of the message


	$headers = 'From: ' . $mail_from . "\r\n";
	$headers .= 'Reply-To: ' . $mail_from . "\r\n";

	$mail_sent = mail($mail_to, $subject, $body_message, $headers);

	if ($mail_sent == true){ ?>



		<script language="javascript" type="text/javascript">

		alert('Thank you for the message. We will contact you shortly.');
		window.location = 'contact.html';

		</script>




	<?php } else { ?>




    <script language="javascript" type="text/javascript">

        alert('Message not sent. Please, notify site administrator astralfocal@gmail.com');
        window.location = 'contact.html';

    </script>




	<?php
	}


?>