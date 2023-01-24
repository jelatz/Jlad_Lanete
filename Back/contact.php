<?php
if(isset($_POST['submit']))

$email = $_POST['email'];
$to = "lanetejlad@gmail.com";
$subject = "Web Services Inquiry";
$message = $_POST['inquiry'];
$headers = "From: $email";

mail($to, $subject, $message, $headers);
echo 'hay naku';
if(mail($to,$subject,$message,$headers)){
    echo 'Message Sent!';
    header('Location:../index.html?sent="Message Sent Successfully!"');
    exit();
}else{
    header('Location:../index.html');
    exit();
}
?>