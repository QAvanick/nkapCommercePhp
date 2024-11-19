<?php
require_once './../templates/frontend/layout/header.views.php';
require './../config/database.php';

global $pdo;

// Récupérer les catégories de bijoux
$sql = "SELECT * FROM categories WHERE titre LIKE '%bijoux%'";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Récupérer les produits associés aux catégories de bijoux
$sql = "SELECT p.id AS p_id, p.name AS p_name, p.price AS p_price, p.description AS p_description,
        p.quantity AS p_quantity, p.image AS p_image, c.id AS c_id, c.titre AS c_name
        FROM product AS p 
        LEFT JOIN categories AS c ON p.category_id = c.id
        WHERE c.titre LIKE '%bijoux%'";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body custom-width">
                    <h2 class="card-title text-danger">Catégories de Bijoux</h2>
                    <div class="list-group">
                        <?php if (empty($categories)): ?>
                            <p>Aucune catégorie disponible pour les bijoux.</p>
                        <?php else: ?>
                            <?php foreach ($categories as $category): ?>
                                <div class="list-group-item">
                                    <h4 class="category-title"><?php echo htmlspecialchars($category['titre']); ?></h4>
                                    <p><?php echo htmlspecialchars($category['description']); ?></p>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                    <h2 class="card-title text-danger mt-4">Produits de Bijoux</h2>
                    <div class="list-group">
                        <?php if (empty($products)): ?>
                            <p>Aucun produit disponible pour les bijoux.</p>
                        <?php else: ?>
                            <?php foreach ($products as $product): ?>
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
                                                    <span class="btn btn-outline-danger favorite-btn" data-id="<?php echo htmlspecialchars($product['p_id']); ?>"><i class="fa-regular fa-heart"></i></span>
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
require_once './../templates/frontend/layout/footer.views.php'
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
