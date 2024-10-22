<?php
require './../../config/database.php';



global $pdo;



if ($_SERVER['REQUEST_METHOD'] === "GET") {

   $sql = "SELECT * FROM categories WHERE id= :id";
    
    $stmt = $pdo->prepare($sql);
    
    $stmt->execute([':id' => $_GET['id']]);
    $category=$stmt->fetch(PDO::FETCH_ASSOC);


    
}






try{
    
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
       
    
        $id= $_POST['id'];
        $name= $_POST['titre'];
        $description= $_POST['description'];
        $sql = "UPDATE categories SET titre = :titre , description= :description WHERE id= :id";
        $stmt= $pdo->prepare($sql);
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':titre',$name);
        $stmt->bindParam(':description',$description);
    
 
        if ($category=$stmt->execute()){
            echo "update ok";
        }
    
        header( "Location: ./category_detail.php");
    
    
    }


}catch (PDOException $e) {
      $e->getMessage();
}





include './../../templates/admin/category_edit.admin.php';
?>
