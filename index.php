<?php
header( 'Location: ./src/home.php');


session_start();
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
} elseif (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'fr';
}


$titre=array('Contactez-nous','Contact us');
$nom=array('Nom','Name');

?>
