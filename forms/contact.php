<?php

  //check empty fields
if(empty($_POST['name'])        || 
empty($_POST['email'])      ||
empty($_POST['message'])    ||
!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
echo "No arguments Provided!";
return false;
}

$name = $_POST['name'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = 'moonmojtaba5566@gmail.com'; 
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website fanalatqan.com contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail:              

$email_address\n\nsubject: $subject\n\nMessage:\n$message";
$headers = "From: contact@fanalatqan.com\n"; //No email on the host, tried postmark inbound email address but no go.
$headers .= "Reply-To: $email_address"; 
mail($to,$email_subject,$email_body,$headers);
return true;            


?>
