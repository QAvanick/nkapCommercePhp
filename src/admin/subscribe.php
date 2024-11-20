<?php
session_start();
require './../../config/database.php';

global $pdo;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        try {
            $stmt = $pdo->prepare("INSERT INTO subscribers (email) VALUES (:email)");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $_SESSION['message'] = 'Vous êtes abonné avec succès!';
        } catch(PDOException $e) {
            $_SESSION['message'] = 'Erreur: ' . $e->getMessage();
        }

        $pdo = null;
    } else {
        $_SESSION['message'] = 'Adresse e-mail invalide.';
    }

    header('Location: ./../home.php');
    exit();
}
?>
