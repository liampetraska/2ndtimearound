<?php 
$toemail = 'contact@2ndtimeokemos.com';
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
if(mail($toemail, 'A Message from Your Contact Form', $message, 'From: ' . $email)) {
	echo 'Your email was sent successfully.';
} else {
	echo 'There was a problem sending your email.';
}
?>