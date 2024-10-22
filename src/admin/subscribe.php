<?php


require './../../config/database.php';



global $pdo;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    var_dump($_POST);
    die();
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "nkap_commerce";

        try {
           
            $stmt = $pdo->prepare("INSERT INTO subscribers (email) VALUES (:email)");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            echo "Vous êtes abonné avec succès!";
        } catch(PDOException $e) {
            echo "Erreur: " . $e->getMessage();
        }

        $pdo = null;
    } else {
        echo "Adresse e-mail invalide.";
    }
}



include './../../templates/admin/subscribe.admin.php';
?>
