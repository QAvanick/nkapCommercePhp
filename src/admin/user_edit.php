<?php


require './../../config/database.php';

global $pdo;

if ($_SERVER['REQUEST_METHOD'] === "GET") {
 

    $sql = "SELECT * FROM users WHERE id= :id";
   
     $stmt = $pdo->prepare($sql);
     
     $stmt->execute([':id' => $_GET['id']]);
     $user=$stmt->fetch(PDO::FETCH_ASSOC);
 
 
     
 }



 try{
    
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
      

        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
       
    
       
        $sql = "UPDATE users SET username  = :username , email= :email WHERE id= :id";
        $stmt= $pdo->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':username',$username);
        $stmt->bindParam(':email',$email);


 
        if ($user=$stmt->execute()){
            echo "update ok";
        }
    
        header( "Location: ./user.php");
    
    
    }


}catch (PDOException $e) {
      $e->getMessage();
}



include './../../templates/admin/user_edit.admin.php';