<?php

require './../config/database.php';

global $pdo;





if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reset_code = $_POST['reset_code'];

    try {
        // Vérifier le code de réinitialisation
        $sql = "SELECT email FROM password_resets WHERE token = :reset_code AND token_expiry > NOW()";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['reset_code' => $reset_code]);
        $user = $stmt->fetch();

        if ($user) {
            $email = $user['email'];
            // Stocker l'email dans la session pour l'utiliser dans le prochain formulaire
            session_start();
            $_SESSION['email'] = $email;
            header("Location: new_password_views.php");
            exit();
        } else {
            echo "Le code de réinitialisation est invalide ou a expiré.";
        }
    } catch (PDOException $e) {
        echo "Erreur: " . $e->getMessage();
    }
}










include './../templates/frontend/auth/reset_password_views.php';
?>