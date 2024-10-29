<?php

require './../config/database.php';

global $pdo;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $reset_code = rand(100000, 999999); // Générer un code à 6 chiffres
    $token_expiry = date("Y-m-d H:i:s", strtotime('+1 hour')); // Date et heure d'expiration

    try {
        // Préparer la requête d'insertion
        $sql = "INSERT INTO password_resets (email, token, token_expiry) VALUES (:email, :reset_code, :token_expiry)";
        $stmt = $pdo->prepare($sql);

        // Exécuter la requête avec les paramètres
        $stmt->execute(['email' => $email, 'reset_code' => $reset_code, 'token_expiry' => $token_expiry]);

        // Envoyer l'e-mail
        $subject = "Code de réinitialisation de mot de passe";
        $message = "Votre code de réinitialisation est : $reset_code";
        $headers = "From: no-reply@votre-site.com";

        if (mail($email, $subject, $message, $headers)) {
            // Rediriger vers le formulaire pour entrer le code de réinitialisation
            header("Location:reset_password.php");
            exit();
        } else {
            echo "Erreur lors de l'envoi de l'e-mail.";
        }
    } catch (PDOException $e) {
        echo "Erreur: " . $e->getMessage();
    }
}

include './../templates/frontend/auth/password_reset_views.php';
?>
