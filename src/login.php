<?php

require './../config/database.php';

global $pdo;

if (isset($_POST['email'], $_POST['password'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC); 

    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['username'] = $user['username'];
        echo('reussi');
        
   
        header('Location: ../home.php');
        exit(); 
    } else {
        echo "Email ou mot de passe incorrect.";
    }
}

include './../templates/frontend/auth/login_views.php';