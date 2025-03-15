<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $wunschzeitraum = htmlspecialchars($_POST["wunschzeitraum"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "DEINE-EMAIL@DOMAIN.COM";  // Hier deine E-Mail-Adresse eintragen
    $subject = "Neue Anfrage von $name";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    $emailBody = "Name: $name\nE-Mail: $email\nWunschzeitraum: $wunschzeitraum\n\nNachricht:\n$message";

    if (mail($to, $subject, $emailBody, $headers)) {
        echo "Die Anfrage wurde erfolgreich gesendet!";
    } else {
        echo "Fehler beim Senden der Anfrage.";
    }
} else {
    echo "Ungültige Anfrage.";
}
?>
