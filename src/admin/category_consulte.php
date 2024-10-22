<?php

require './../../config/database.php';



global $pdo;




    $sql = "SELECT * FROM categories WHERE id= :id";
     
     $stmt = $pdo->prepare($sql);
     
     $stmt->execute([':id' => $_GET['id']]);
     $category=$stmt->fetch(PDO::FETCH_ASSOC);
 
 
     
 




include './../../templates/admin/category_consulte.admin.php';

?>
