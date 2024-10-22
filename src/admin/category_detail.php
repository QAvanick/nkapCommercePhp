<?php
require './../../config/database.php';



global $pdo;

$sql="SELECT* FROM  categories ";
$stmt=$pdo->prepare($sql);
$stmt->execute();

 $categories=$stmt->fetchAll(PDO::FETCH_ASSOC);

 

include './../../templates/admin/category_detail.admin.php';

?>


