<?php

require './../config/database.php';

global $pdo;

if (isset($_POST['username'], $_POST['email'], $_POST['password'], $_POST['confirm_password'])) {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);

    if ($password === $confirm_password) {
        // Hacher le mot de passe avant de le stocker
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);

        if ($stmt->execute()) {
            echo "Inscription réussie !";
            
            header('Location: ../home.php');
            exit();
        } else {
            echo "Erreur lors de l'insertion.";
        }
    } else {
        echo "Les mots de passe ne correspondent pas.";
    }
}

include './../templates/frontend/auth/register_views.php';