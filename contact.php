<?php

if(isset($_POST['submit'])) {
&mailto = "colpsanita@gmail.com;

$name = $_POST['name'];
$fromEmail = $_POST['email'];
$subject = $_POST['subject'];
$subject2 = "Confirmation: Messaged was submitted succesfully | Sanita DEV



$message = "Client name: " . $name . "\n"
. "Client message: " . "\n" . $_POST['message']


$message2 = "Dear" . $name . "\n"
. "Thank you for contacting me. I will get back to you shortly!" . "n\n\"
. "You submitted the following message: " . "\n" . $_POST['message']  "n\n\"
. "Regards," "\n" - Sanita DEV


$headers = "From: " . $fromEmail;
$headers2 = "From: " . $mailto; 

$result1 = mail($mailto, $subject, $message, $headers);
$result2 = mail($fromEmail, $subject2, $message2, $headers2);

if($result1 && $result2) {
$success = "Message was sent succesfully!"
} else {
$failed = "Sorry! Message was not sent, Try again later."

}

?>
