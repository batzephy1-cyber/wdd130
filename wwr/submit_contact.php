<?php
// submit_contact.php
// Form Processing "Contact us"

// Step 1: Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Step 2: Retrieve and sanitize the data
    $name    = htmlspecialchars(trim($_POST["name"] ?? ""));
    $email   = htmlspecialchars(trim($_POST["email"] ?? ""));
    $subject = htmlspecialchars(trim($_POST["subject"] ?? ""));
    $message = htmlspecialchars(trim($_POST["message"] ?? ""));

    // Step 3: Basic validation
    $errors = [];

    if (empty($name)) {
        $errors[] = "The name is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required.";
    }
    if (empty($subject)) {
        $errors[] = "The subject is required.";
    }
    if (empty($message)) {
        $errors[] = "The message is required.";
    }

    // Step 4: If errors, display a message
    if (!empty($errors)) {
        echo "<h3>Error(s):</h3><ul>";
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "</ul><a href='contact.php'>Back to the form</a>";
        exit;
    }

    // Step 5: Prepare the email
    $to      = "contact@example.com"; // Replace with your actual recipient email
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Step 6: Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "<h3>Thank you, your message has been sent successfully!</h3>";
    } else {
        echo "<h3>Sorry, there was a problem sending your message. Please try again later.</h3>";
    }
} else {
    echo "<h3>No form submission detected.</h3>";
}
?>
