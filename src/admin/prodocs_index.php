<?php

require './../../config/database.php';



global $pdo;



$sql="SELECT p.id AS p_id, p.name AS p_name, p.Price AS p_price, p.description AS p_description,
    p.quantity AS p_quantity, p.image AS p_image , c.id  AS c_id, c.titre AS c_name
    FROM  product AS p 
    LEFT JOIN categories AS c
    ON p.category_id = c.id
    ";
$stmt=$pdo->prepare($sql);
$stmt->execute();

 $products=$stmt->fetchAll(PDO::FETCH_ASSOC);


 
     




     include './../../templates/admin/prodocs_index.admin.php';


?>





