<?php
//get data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$to = "jbfrancis60@gmail.com";

$text = "Name = ". $name . "\r\n Email = ". $email . "\Message = " . $message;

$headers = "From: noreply@gmail.com" . "\r\n" . "CC: somebodyelse@example.com";
if($email != NULL){
    mail($to, $subject, $text, $headers);
}
//
header("Location: index.html");

?>