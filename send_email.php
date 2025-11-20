<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "ekkehard.barth@cloudconsulting-aws.de";
    $subject = "Neue Nachricht von Ihrer Website";
    
    $email_content = "Name: $name\n";
    $email_content .= "E-Mail: $email\n\n";
    $email_content .= "Nachricht:\n$message\n";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Vielen Dank! Ihre Nachricht wurde erfolgreich gesendet.";
    } else {
        echo "Es tut uns leid, beim Senden Ihrer Nachricht ist ein Fehler aufgetreten.";
    }
} else {
    echo "Zugriff verweigert";
}
?>
