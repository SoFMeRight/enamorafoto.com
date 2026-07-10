<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $services = $_POST['services'];

    if(!empty($_POST['checkboxes[]'])) {
        foreach($_POST['checkboxes[]'] as $check) {
            echo $check;

    $message = $_POST['message'];
    $from = 'From: 3D Buildtower ';
    $to = 'info@amorweddingservice.com';
    $subject = 'You have a New 3D Buildtower Inquiry!';
    $human = $_POST['human'];

    $body = "From: $firstname\n $lastname\n E-Mail: $email\n Message: $message\n Services: $services\n Topics: $checkboxes\n ";

    if ($_POST['submit'] && $human == '4') {
        if (mail ($to, $subject, $body, $from)) {
	    echo '<p>Your message has been sent!</p>';
	} else {
	    echo '<p>Something went wrong, go back and try again!</p>';
	}
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
?>
