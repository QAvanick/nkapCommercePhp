
<?php
session_start(); 


require_once './../templates/frontend/layout/header.views.php';

// Définir la langue en fonction de l'URL
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
} elseif (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'fr'; // Langue par défaut
}

// Inclure le fichier de langue approprié
if ($_SESSION['lang'] == 'en') {
    include('../lang/en.php');
} else {
    include('../lang/fr.php');
}

$current_url = $_SERVER['REQUEST_URI'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Simple data validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        $destination = "vanicknjoum@gmail.com";
        $sujet = "Formulaire de contact";
        $messageContent = "Bienvenue dans ma messagerie E-NKAP \n
        Nom : $name \n
        Email : $email \n
        Message : $message";
        $entete = "From: $name \nReply-To: $email";

        if (mail($destination, $sujet, $messageContent, $entete)) {
            echo "<script>showPopup();</script>";
        } else {
            echo "<p class='error'>Échec de l'envoi du message.</p>";
        }
    } else {
        echo "<p class='error'>Veuillez remplir tous les champs.</p>";
    }
}
require_once 'C:/wamp64/www/php/nkapCommercePhp/src/recaptcha/autoload.php';






// function verifyRecaptcha($recaptcha_response) {
//     $recaptcha_secret = '6Ldy73AqAAAAAGpqvl4A-BetrtsASer0Nwrt474E';
//     $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
//     $response_keys = json_decode($response, true);
//     return intval($response_keys["success"]) === 1;
// }

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
//     $recaptcha_response = $_POST['g-recaptcha-response'];
//     if (verifyRecaptcha($recaptcha_response)) {
//         // Traitez le formulaire ici
//         echo 'Formulaire soumis avec succès.';
//     } else {
//         echo 'Veuillez vérifier le reCAPTCHA.';
//     }
// }



require_once './../templates/frontend/contact.views.php';
require_once './../templates/frontend/layout/footer.views.php';
?>
