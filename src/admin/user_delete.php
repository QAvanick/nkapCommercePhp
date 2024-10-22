<?php

require './../../config/database.php';



global $pdo;


$sql = "DELETE FROM users WHERE id= :id";
    
$stmt = $pdo->prepare($sql);
    
$stmt->execute([':id' => $_GET['id']]);


header( "Location: ./user.php");




?>