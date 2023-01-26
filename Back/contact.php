<?php
if(isset($_POST['submit']))

$email = $_POST['email'];
$to = "lanetejlad@gmail.com";
$subject = "Web Services Inquiry";
$message = $_POST['inquiry'];
$headers = "From: $email\r\n";

mail($to, $subject, $message, $headers);
echo 'hay naku';
if(mail($to,$subject,$message,$headers)){
    echo 'Message Sent!';
}
// else{
//     header('Location:../index.php');
//     exit();
// }
?>