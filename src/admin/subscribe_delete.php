<?php
require './../../config/database.php';

global $pdo;

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $sql = "DELETE FROM  WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        header("Location: ./subscribe.detail.php");
        exit;
    } catch (PDOException $e) {
        // Enregistrer l'erreur au lieu de l'afficher
        error_log("Erreur : " . $e->getMessage());
        // Optionnellement, rediriger vers une page d'erreur ou afficher un message convivial
        header("Location: ./error.php");
        exit;
    }
} else {
    // Gérer le cas où 'id' n'est pas défini ou n'est pas valide
    header("Location: ./subscribe.detail.php");
    exit;
}
?>
