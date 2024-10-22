<?php

require './../../config/database.php';



global $pdo;


if ($_SERVER['REQUEST_METHOD']=== "POST"){

$name= $_POST['titre'];
$description= $_POST['description'];


$sql="INSERT INTO categories(titre, description) VALUES(:titre,:description)";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(':titre',$name);
$stmt->bindParam(':description',$description);

if ($stmt->execute()){
    echo "insertion ok";
}

}
include './../../templates/admin/category_ajout.admin.php';

?>
