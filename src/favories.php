<?php

require_once './../templates/frontend/layout/header.views.php';
require './../config/database.php';

global $pdo;

function ajouter_favori($user_id, $product_id) {
    global $pdo;
    $sql = "INSERT INTO product_favorites (user_id, product_id) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $user_id, PDO::PARAM_INT);
    $stmt->bindParam(2, $product_id, PDO::PARAM_INT);
    $stmt->execute();
    $stmt->closeCursor();
}

function supprimer_favori($user_id, $product_id) {
    global $pdo;
    $sql = "DELETE FROM product_favorites WHERE user_id = ? AND product_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $user_id, PDO::PARAM_INT);
    $stmt->bindParam(2, $product_id, PDO::PARAM_INT);
    $stmt->execute();
    $stmt->closeCursor();
}

function recuperer_favoris($user_id) {
    global $pdo;
    $sql = "SELECT product.id, product.name, product.description
            FROM product
            JOIN product_favorites ON product.id = product_favorites.product_id
            WHERE product_favorites.user_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $user_id, PDO::PARAM_INT);
    $stmt->execute();
    $favoris = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $favoris;
}



require_once './../templates/frontend/layout/footer.views.php';
?>
