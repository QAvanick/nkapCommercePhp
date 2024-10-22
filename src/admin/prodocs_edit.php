<?php

require './../../config/database.php';

define ('UPLOAD_ROOT', realpath(dirname(__FILE__).'/../../public'));

global $pdo;


$sql = "SELECT p.id AS p_id, p.name AS p_name, p.price AS p_price, p.description AS p_description,
    p.quantity AS p_quantity, p.image AS p_image, c.id AS c_id, c.titre AS c_name
    FROM product AS p 
    LEFT JOIN categories AS c ON p.category_id = c.id
    WHERE p.id = :p_id";

$stmt = $pdo->prepare($sql);
$stmt->execute([':p_id' => $_GET['id']]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);


$sql = "SELECT * FROM categories";
$stmt2 = $pdo->prepare($sql);
$stmt2->execute();
$categories = $stmt2->fetchAll(PDO::FETCH_ASSOC);

try {
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $name = $_POST['productName']; 
        $price = $_POST['productPrice'];
        $quantity = $_POST['productQuantity'];
        $category_id = $_POST['nom_categorie']; 
        $description = $_POST['productDescription'];
        
        $image = $product['p_image']; 
        if (!empty($_FILES['image']['name'])) {
            $image = '/uploads/product/' . basename($_FILES['image']['name']);
            $destination = UPLOAD_ROOT . $image;

            $destination_dir = dirname($destination);
            if (!is_dir($destination_dir)) {
                mkdir($destination_dir, 0755, true);
            }

            if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
                if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
                    echo "Le fichier de photo de profil a été téléchargé avec succès.<br>";
                } else {
                    echo "Erreur lors du déplacement du fichier de photo de profil téléchargé.<br>";
                }
            } else {
                echo "Erreur de téléchargement du fichier de photo de profil : " . $_FILES['image']['error'] . "<br>";
            }
        }

        $sql = "UPDATE product SET name = :name, price = :price, quantity = :quantity, category_id = :category_id, description = :description, image = :image WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute([
            ":id" => $_GET['id'], 
            ":name" => $name,
            ":price" => $price,
            ":quantity" => $quantity,
            ":category_id" => $category_id,
            ":description" => $description,
            ":image" => $image
        ]);

        if ($stmt->rowCount() > 0) {
            echo "Mise à jour réussie";
            header("Location: ./prodocs_index.php");
            exit;
        } else {
            echo "Erreur lors de la mise à jour du produit.";
        }
    }
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}

        
include './../../templates/admin/prodocs_edit.admin.php';
