<?php


require './../../config/database.php';



global $pdo;




$sql = "SELECT * FROM users";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


include './../../templates/admin/user_admin.php';