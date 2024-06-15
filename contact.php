<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Validate input
    $errors = [];

    if (empty($fullname) || strlen($fullname) > 100) {
        $errors[] = "Full name must be between 1 and 100 characters.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    if (empty($subject) || strlen($subject) > 100) {
        $errors[] = "Subject must be between 1 and 100 characters.";
    }

    if (empty($message)) {
        $errors[] = "Message cannot be empty.";
    }

    if (empty($errors)) {
        // Proceed with form processing (e.g., send email, save to database, etc.)
        echo "Form submitted successfully!";
        // Example: mail($to, $subject, $message, $headers);
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>
