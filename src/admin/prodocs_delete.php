<?php

require './../../config/database.php';



global $pdo;


$sql = "DELETE FROM product WHERE id= :id";
    
$stmt = $pdo->prepare($sql);
    
$stmt->execute([':id' => $_GET['id']]);


header( "Location: ./prodocs_index.php");




?>