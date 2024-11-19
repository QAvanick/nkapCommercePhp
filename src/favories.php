<?php

require_once './../templates/frontend/layout/header.views.php';
require './../config/database.php';

global $pdo;

$user_id = 1; // Remplacez par l'ID de l'utilisateur connecté

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = intval($_POST['product_id']);
    $action = $_POST['action'];

    if ($action === 'add') {
        ajouter_favori($user_id, $product_id);
        echo 'Produit ajouté aux favoris';
    } elseif ($action === 'remove') {
        supprimer_favori($user_id, $product_id);
        echo 'Produit supprimé des favoris';
    }
}

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

function recuperer_favoris_complets($user_id) {
    global $pdo;
    $sql = "SELECT p.id AS p_id, p.name AS p_name, p.price AS p_price, p.description AS p_description,
            p.quantity AS p_quantity, p.image AS p_image
            FROM product AS p
            JOIN product_favorites AS pf ON p.id = pf.product_id
            WHERE pf.user_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $user_id, PDO::PARAM_INT);
    $stmt->execute();
    $favoris = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stmt->closeCursor();
    return $favoris;
}

$favoris = recuperer_favoris_complets($user_id);

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body custom-width">
                    <h2 class="card-title text-danger">Vos Produits Favoris</h2>
                    <div class="list-group">
                        <?php if (empty($favoris)): ?>
                            <p>Vous n'avez aucun produit en favoris.</p>
                        <?php else: ?>
                            <?php foreach ($favoris as $product): ?>
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card product-card">
                                                <img src="<?php echo "../public".htmlspecialchars($product['p_image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['p_name']); ?>">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo htmlspecialchars($product['p_name']); ?></h5>
                                                    <p class="card-text">Prix: <?php echo htmlspecialchars($product['p_price']); ?> FCFA</p>
                                                    <p class="card-text">Quantité: <?php echo htmlspecialchars($product['p_quantity']); ?></p>
                                                    <p class="card-text"><?php echo htmlspecialchars($product['p_description']); ?></p>
                                                    <a href="#" class="btn btn-primary">Acheter</a>
                                                    <span class="btn btn-outline-danger remove-favorite-btn" data-id="<?php echo htmlspecialchars($product['p_id']); ?>"><i class="fa-regular fa-heart"></i> Supprimer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once './../templates/frontend/layout/footer.views.php';
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const removeFavoriteBtns = document.querySelectorAll('.remove-favorite-btn');

    removeFavoriteBtns.forEach(btn => {
        btn.addEventListener('click', function(event) {
            event.preventDefault();
            const productId = this.getAttribute('data-id');

            // Envoyer une requête AJAX pour supprimer le produit des favoris
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'favories.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText);
                    // Supprimer l'élément de la liste
                    btn.closest('.list-group-item').remove();
                }
            };
            xhr.send('product_id=' + productId + '&action=remove');
        });
    });
});
</script>
