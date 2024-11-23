<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dohvaćanje podataka iz forme
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validacija podataka
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "<script>alert('All fields are required.'); window.history.back();</script>";
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email address.'); window.history.back();</script>";
        exit;
    }

    // E-mail konfiguracija
    $to = "colpasanita@gmail.com"; // Zamijeni sa svojom e-mail adresom
    $headers = "From: $name <$email>" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=utf-8";

    $fullMessage = "You have received a new message from your website:\n\n" .
                   "Name: $name\n" .
                   "Email: $email\n" .
                   "Subject: $subject\n" .
                   "Message:\n$message\n";

    // Slanje e-maila
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "<script>alert('Your message has been sent successfully.'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Sorry, there was an error sending your message.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Invalid request method.'); window.history.back();</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.html">homepage</a>.</p>
        
    </div>
</body>
</html>
