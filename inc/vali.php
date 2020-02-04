<?php $name = $_POST['contactName'];
$email = $_POST['contactEmail'];
$message = $_POST['contactMessage'];
$formcontent="From: $name \n Message: $message";
$recipient = "ksharook.csk@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader);
echo "Thank You!";
?>