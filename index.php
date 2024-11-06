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
<?php
session_start();



    if (isset($_SESSION['message'])) {
        echo "<p>" . $_SESSION['message'] . "</p>";
        // Supprimer le message après l'affichage
        unset($_SESSION['message']);
    }
    
?>
