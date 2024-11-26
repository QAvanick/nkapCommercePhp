<?php
require './../config/database.php';

global $pdo;

if (isset($_GET['query'])) {
    $query = $_GET['query'];

    try {
        $stmt = $pdo->prepare("SELECT * FROM products WHERE name LIKE :query OR description LIKE :query");
        $stmt->execute(['query' => '%' . $query . '%']);

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($results) {
            foreach ($results as $row) {
                echo "Nom: " . htmlspecialchars($row["name"]) . " - Description: " . htmlspecialchars($row["description"]) . "<br>";
            }
        } else {
            echo "Aucun produit trouvé";
        }
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
}
?>
