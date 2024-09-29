<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'janbutta242@gmail.com';
    $subject = 'Neue Nachricht von SexToy Review Seite';
    $body = "Name: $name\nEmail: $email\nNachricht:\n$message";
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo "Nachricht erfolgreich gesendet!";
    } else {
        echo "Es gab ein Problem beim Senden der Nachricht.";
    }
}
?>
