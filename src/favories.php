<?php
session_start();
require_once './../templates/frontend/layout/header.views.php';
require './../config/database.php';

// Définir la fonction getProductById
function getProductById($productId) {
    global $pdo;

    // Préparer et exécuter la requête SQL
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id");
    $stmt->bindParam(':id', $productId, PDO::PARAM_INT);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    return $product;
}

// Récupérer les favoris du stockage local
$favorites = isset($_COOKIE['favorites']) ? json_decode($_COOKIE['favorites'], true) : [];

?>

<div class="container mt-5">
    <h2 class="text-center">Vos Favoris</h2>
    <div class="row">
        <?php foreach ($favorites as $productId): ?>
            <?php
            // Récupérer les informations du produit à partir de l'ID
            $product = getProductById($productId);
            if ($product): // Vérifier si le produit existe
            ?>
            <div class="col-md-4">
                <div class="card product-card">
                    <img src="<?php echo "../public".htmlspecialchars($product['p_image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['p_name']); ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($product['p_name']); ?></h5>
                        <p class="card-text">Prix: <?php echo htmlspecialchars($product['p_price']); ?> FCFA</p>
                        <p class="card-text">Quantité: <?php echo htmlspecialchars($product['p_quantity']); ?></p>
                        <p class="card-text"><?php echo htmlspecialchars($product['p_description']); ?></p>
                        <a href="#" class="btn btn-primary">Acheter</a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>

<?php
require_once './../templates/frontend/layout/footer.views.php';
?>
