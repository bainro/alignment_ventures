
<?php

$headers =  'MIME-Version: 1.0\r\n'; 
$headers .= 'From: Robert Bain <rbainQT3.14@gmail.com>\r\n';
$headers .= 'Content-type: text/html; charset=iso-8859-1\r\n'; 
$headers .= 'X-Mailer: PHP/' . phpversion() . "\r\n";

$email_to = "michael@alignmentventures.com";
$email_subject = "Contact Alignment Ventures Email";
$name = $_GET['name']; // required
$email_from = $_GET['email']; // required
$msg = $_GET['msg'];
#use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

$email_message = "Name: ". $name ."\n";
$email_message .= "Email: ". $email_from ."\n";
$email_message .= "Message Body: ". $msg ."\n";
 
mail($email_to, $email_subject, $email_message, $headers);  
?>
