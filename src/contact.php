
<?php



require_once './../templates/frontend/layout/header.views.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Simple data validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        $destination = "vanicknjoum@gmail.com";
        $sujet = "Formulaire de contact";
        $messageContent = "Bienvenue dans ma messagerie \n
        Nom : $name \n
        Email : $email \n
        Message : $message";
        $entete = "From: $name \nReply-To: $email";

        if (mail($destination, $sujet, $messageContent, $entete)) {
            echo "<p class='success'>Message envoyé avec succès.</p>";
        } else {
            echo "<p class='error'>Échec de l'envoi du message.</p>";
        }
    } else {
        echo "<p class='error'>Veuillez remplir tous les champs.</p>";
    }
}

require_once './../templates/frontend/contact.views.php';
require_once './../templates/frontend/layout/footer.views.php';
?>