<?php
$name =$_POST['Name'];
$email =$_POST['E-mail'];
$website =$_POST['Website'];
$mobile =$_POST['Mobile'];
$message =$_POST['Message'];

$email_form = {$email};
$email_subject = "New Form Submission";
$email_body ="User Nmae: $name.\n"."User Email: $email.\n". "User website: $website.\n". "User mobile : $mobile.\n". "User message: $message.\n";

$to = "gauravnarnaware3112003@gmail.com";
$headers = "From: $email_form\r\n";
$headers = "Reply-To $email\r\n";
mail($to,$email_subject,$email_body,$headers);

headers("Location: index.html");


?>
