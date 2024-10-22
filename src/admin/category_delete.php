<?php

require './../../config/database.php';



global $pdo;


$sql = "DELETE FROM categories WHERE id= :id";
    
$stmt = $pdo->prepare($sql);
    
$stmt->execute([':id' => $_GET['id']]);


header( "Location: ./category_detail.php");




?>