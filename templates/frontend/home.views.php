<?php
include __DIR__ .'/layout/header.views.php';
?>

<?php
include 'home/hero-section.views.php';
?>

<?php
require dirname(__FILE__) . '/../../config/database.php';

global $pdo;

$user_id = 1; // Remplacez par l'ID de l'utilisateur connecté

// Récupérer les favoris de l'utilisateur
function recuperer_favoris($user_id) {
    global $pdo;
    $sql = "SELECT product_id FROM product_favorites WHERE user_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1, $user_id, PDO::PARAM_INT);
    $stmt->execute();
    $favoris = $stmt->fetchAll(PDO::FETCH_COLUMN);
    $stmt->closeCursor();
    return $favoris;
}

$favoris = recuperer_favoris($user_id);

$sql = "SELECT p.id AS p_id, p.name AS p_name, p.price AS p_price, p.description AS p_description,
        p.quantity AS p_quantity, p.image AS p_image, c.id AS c_id, c.titre AS c_name
        FROM product AS p 
        LEFT JOIN categories AS c ON p.category_id = c.id";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Regrouper les produits par catégorie
$categories = [];
foreach ($products as $product) {
    $categories[$product['c_name']][] = $product;
}
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body custom-width">
                    <h2 class="card-title text-danger">
                        <span class="favorite-icon" data-id="<?php echo htmlspecialchars($product['p_id']); ?>">
                            <i class="fa-regular fa-heart"></i>
                        </span>
                        &nbsp;Votre Mode en un Clic.&nbsp;
                    </h2>
                    <p>E-nkap vous propose une large gamme de vêtements pour toutes les occasions. Que vous soyez à la recherche de tenues décontractées, professionnelles ou de soirée, nous avons ce qu’il vous faut. Découvrez les meilleures offres en ligne et en magasin, et profitez d’une expérience d’achat unique.</p>
                    <div class="list-group">
                        <?php foreach ($categories as $categoryName => $products): ?>
                            <div class="list-group-item">
                                <h4 class="category-title"><i class="fa-regular fa-gem"></i><?php echo htmlspecialchars($categoryName); ?></h4>
                                <div class="row">
                                    <?php foreach ($products as $product): ?>
                                        <div class="col-md-4">
                                            <div class="card product-card">
                                                <img src="<?php echo "../public".htmlspecialchars($product['p_image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($product['p_name']); ?>">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo htmlspecialchars($product['p_name']); ?></h5>
                                                    <p class="card-text">Prix: <?php echo htmlspecialchars($product['p_price']); ?> FCFA</p>
                                                    <p class="card-text">Quantité: <?php echo htmlspecialchars($product['p_quantity']); ?></p>
                                                    <p class="card-text"><?php echo htmlspecialchars($product['p_description']); ?></p>
                                                    <a href="#" class="btn btn-primary">Acheter</a>
                                                    <span class="btn btn-outline-danger favorite-btn" data-id="<?php echo htmlspecialchars($product['p_id']); ?>">
                                                        <i class="fa-regular fa-heart <?php echo in_array($product['p_id'], $favoris) ? 'fa-solid' : ''; ?>"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'home/section_fin.php';
?>

<?php
include 'home/parteners.php';
?>

<?php
include 'home/temoignages.php';
?>

<?php
include __DIR__ .'/layout/footer.views.php';
?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const favoriteIcons = document.querySelectorAll('.favorite-icon, .favorite-btn');

    favoriteIcons.forEach(icon => {
        icon.addEventListener('click', function(event) {
            event.preventDefault();
            const productId = this.getAttribute('data-id');
            let favorites = JSON.parse(localStorage.getItem('favorites')) || [];

            if (favorites.includes(productId)) {
                favorites = favorites.filter(id => id !== productId);
                this.querySelector('i').classList.remove('fa-solid');
                this.querySelector('i').classList.add('fa-regular');
            } else {
                favorites.push(productId);
                this.querySelector('i').classList.remove('fa-regular');
                this.querySelector('i').classList.add('fa-solid');
            }

            localStorage.setItem('favorites', JSON.stringify(favorites));

            // Envoyer une requête AJAX pour mettre à jour les favoris dans la base de données
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'favories.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log(xhr.responseText);
                }
            };
            xhr.send('product_id=' + productId + '&action=' + (favorites.includes(productId) ? 'add' : 'remove'));
        });
    });
});
</script>

