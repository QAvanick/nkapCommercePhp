<?php

require './../config/database.php';

global $pdo;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['reset_code']) && !empty($_POST['reset_code'])) {
        $reset_code = $_POST['reset_code'];
        $new_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        try {
            // Vérifier le code de réinitialisation
            $sql = "SELECT email FROM password_resets WHERE token = :reset_code AND token_expiry > NOW()";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['reset_code' => $reset_code]);
            $user = $stmt->fetch();
          
            if ($user) {
                $email = $user['email'];
                echo "Email trouvé : " . $email; // Message de débogage

                // Mettre à jour le mot de passe de l'utilisateur
                $sql = "UPDATE users SET password = :password WHERE email = :email";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['password' => $new_password, 'email' => $email]);

                // Supprimer le code de réinitialisation
                $sql = "DELETE FROM password_resets WHERE token = :reset_code";
                $stmt = $pdo->prepare($sql);
                $stmt->execute(['reset_code' => $reset_code]);

                echo "Votre mot de passe a été réinitialisé avec succès.";
            } else {
                echo "Le code de réinitialisation est invalide ou a expiré.";
            }
        } catch (PDOException $e) {
            echo "Erreur: " . $e->getMessage();
        }
    } else {
        echo "Le code de réinitialisation est manquant.";
    }
}






include './../templates/frontend/auth/reset_password_views.php';
?>