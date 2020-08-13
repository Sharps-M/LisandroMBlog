<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message \n Email: $email";
$recipient = "filmmaker@lisandromariani.ml";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

if ($mail->Send()) { 
    header("http://lisandromariani.ml/");            
};
?>