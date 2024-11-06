<?php
session_start();
require './../../config/database.php';

global $pdo;

try {
    $stmt = $pdo->query("SELECT email FROM subscribers");
    $subscribers = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
?>