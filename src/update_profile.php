<?php
session_start();
require_once './../config/database.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET username = :username, email = :email WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':id', $user_id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        $_SESSION['username'] = $username;
        header("Location: profil_user.php?success=1");
        exit();
    } else {
        echo "Erreur lors de la mise à jour du profil.";
    }
}
?>
