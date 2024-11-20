<?php

require './../config/database.php';

global $pdo;

session_start();

if (isset($_POST['email'], $_POST['password'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC); 

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id']; // Définir l'ID utilisateur dans la session
        $_SESSION['username'] = $user['username'];
        $_SESSION['messages'] = 'Connexion réussie avec succès!';
        
        header('Location: ./home.php'); // Rediriger vers la page d'accueil
        exit(); 
    } else {
        $_SESSION['message'] = 'Email ou mot de passe incorrect.';
    }
}

include './../templates/frontend/auth/login_views.php';
?>
