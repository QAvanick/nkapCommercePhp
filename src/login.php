<?php

require './../config/database.php';

global $pdo;

$message = '';

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
        $_SESSION['user_id'] = $user['id']; // Définir l'ID utilisateur dans la session
        $_SESSION['username'] = $user['username'];
        $message = '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa-solid fa-check-circle"></i>
  Connexion réussie avec succès !
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
        
        header('Location: ./home.php'); // Rediriger vers la page de profil
        exit(); 
    } else {
        $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fa-solid fa-triangle-exclamation"></i>
  Email ou mot de passe incorrect. 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    }
}

include './../templates/frontend/auth/login_views.php';
?>
