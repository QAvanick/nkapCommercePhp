<?php

require './../../config/database.php';

global $pdo;

if ($_SERVER['REQUEST_METHOD'] === "POST") {

    

    $name = $_POST['email'];

    $sql = "INSERT INTO subscribers(email) VALUES(:email)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $name);

    if ($stmt->execute()) {
        echo "insertion ok";
    }
}

include './../../templates/admin/subscribe_add.admin.php';

?>
