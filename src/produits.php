<?php
require_once './../templates/frontend/layout/header.views.php';
require './../config/database.php';

global $pdo;


// Récupérer tous les produits
$sql = "SELECT p.id AS p_id, p.name AS p_name, p.price AS p_price, p.description AS p_description,
        p.quantity AS p_quantity, p.image AS p_image, c.id AS c_id, c.titre AS c_name
        FROM product AS p 
        LEFT JOIN categories AS c ON p.category_id = c.id";

if(isset($_GET['search'])){
    $search = '%' . $_GET['search'] . '%';
    $sql .= " WHERE p.name LIKE :search";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':search', $search, PDO::PARAM_STR);
} else {
    $stmt = $pdo->prepare($sql);
}

$stmt->execute();

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>





<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body custom-width">
                    <h2 class="card-title text-danger">Tous les Produits</h2>
                    <div class="row">
                        <?php if (empty($products)): ?>
                            <p>Aucun produit disponible.</p>
                        <?php else: ?>
                            <?php foreach ($products as $product): ?>
                                <div class="col-md-4 mb-4">
                                    <div class="card product-card">
                                        <img src="<?php echo "../public".htmlspecialchars($product['p_image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['p_name']); ?>">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo htmlspecialchars($product['p_name']); ?></h5>
                                            <p class="card-text">Prix: <?php echo htmlspecialchars($product['p_price']); ?> FCFA</p>
                                            <p class="card-text">Quantité: <?php echo htmlspecialchars($product['p_quantity']); ?></p>
                                            <p class="card-text"><?php echo htmlspecialchars($product['p_description']); ?></p>
                                            <a href="#" class="btn btn-primary">Acheter</a>
                                            <span class="btn btn-outline-danger favorite-btn" data-id="<?php echo htmlspecialchars($product['p_id']); ?>"><i class="fa-regular fa-heart"></i></span>
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
require_once './../templates/frontend/layout/footer.views.php'
?>

