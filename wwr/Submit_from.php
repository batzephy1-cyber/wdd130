<?php
// submit_from.php
// BYU Pathway Worldwide – Rafting Site Assignment

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Simple validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        echo "<h2>Thank you, $name!</h2>";
        echo "<p>We received your message:</p>";
        echo "<p><strong>$message</strong></p>";
        echo "<p>We’ll reply to you at <em>$email</em> soon.</p>";
    } else {
        echo "<h2>Error: Please fill in all fields.</h2>";
    }
} else {
    echo "<h2>Invalid request.</h2>";
}
?>
