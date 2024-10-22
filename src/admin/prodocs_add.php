<?php


define ('UPLOAD_ROOT', realpath(dirname(__FILE__).'/../../public'));

require './../../config/database.php';

global $pdo;

$sql = "SELECT * FROM categories";
$stmt = $pdo->prepare($sql);
$stmt->execute();

$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);






if ($_SERVER['REQUEST_METHOD'] === "POST") {
   
    $name = $_POST['productName'];
    $quantity = $_POST['productQuantity'];
    $category_id = $_POST['nom_categorie'];
    $price = $_POST['productPrice'];
    $description = $_POST['productDescription'];
    $image ='';
    if (!empty($_FILES['image']['name'])){
        // Définir le chemin de destination
        $image = '/uploads/product/'.basename($_FILES['image']['name']);
        $destination = UPLOAD_ROOT . $image;
        
        // Vérifier si le dossier de destination existe, sinon le créer
        $destination_dir = dirname($destination);
        if (!is_dir($destination_dir)) {
            mkdir($destination_dir, 0755, true); // Créer les dossiers récursivement avec les bonnes permissions
        }

        // Vérifier les erreurs de téléchargement de fichiers
        if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
            // Tenter de déplacer le fichier téléchargé
            if (move_uploaded_file($_FILES['image']['tmp_name'], $destination)) {
                echo "Le fichier de photo de profil a été téléchargé avec succès.<br>";
            } else {
                echo "Erreur lors du déplacement du fichier de photo de profil téléchargé.<br>";
            }
        } else {
            echo "Erreur de téléchargement du fichier de photo de profil : " . $_FILES['image']['error'] . "<br>";
        }

    }

    $sql = "INSERT INTO product (name, price, description, quantity, category_id, image)
            VALUES (:name, :price, :description, :quantity, :category_id, :image)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':quantity', $quantity);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':category_id', $category_id);
    $stmt->bindParam(':description', $description);

    if ($stmt->execute()) {
        echo "Produit ajouté avec succès!";
    } else {
        echo "Erreur lors de l'ajout du produit.";
    }
}

include './../../templates/admin/prodocs_add.admin.php';
?>
