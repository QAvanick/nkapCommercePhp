<?php 
require('config.php');

$dns = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try {
    $pdo = new PDO($dns, DB_USER, DB_PASSWORD, $options);

    

} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>