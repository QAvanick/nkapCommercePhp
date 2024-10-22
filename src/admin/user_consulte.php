<?php

require './../../config/database.php';



global $pdo;




    $sql = "SELECT * FROM users WHERE id= :id";
     
     $stmt = $pdo->prepare($sql);
     
     $stmt->execute([':id' => $_GET['id']]);
     $user=$stmt->fetch(PDO::FETCH_ASSOC);
 
 
     
 




include './../../templates/admin/user_consulte.admin.php';

?>