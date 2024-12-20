<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$isLoggedIn = isset($_SESSION['user_id']); // Vérifiez si l'utilisateur est connecté
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Navigation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


  </head>

<body>
<nav class="navbar navbar-expand-lg bg-white navbar-fixed" id="navbar3">
  <div class="container">
    <a class="navbar-brand" href="./home.php">E-Nkap</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./home.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./produits.php">Produits</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Catégories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="./categories_hommes.php">Hommes</a></li>
            <li><a class="dropdown-item" href="./categories_bijoux.php">Bijoux</a></li>
            <li><a class="dropdown-item" href="./categories_chaussures.php">Chaussures</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item me-3">
          <form action="./produits.php" method="GET" class="d-flex position-relative" role="search">
            <input class="form-control me-2" name="search" type="search" placeholder="Nom du produit" aria-label="Search" required>
            <i class="fa-light fa-magnifying-glass position-absolute" style="right:140px; top: 50%; transform: translateY(-50%);"></i>
            <button class="btn btn-outline-success" type="submit">Rechercher</button>
          </form>
        </li>
        <li class="nav-item me-3">
          <a href="#" id="favIcon"><i class="fa-thin fa-heart"></i></a>
        </li>
        <li class="nav-item">
          <i class="fa-thin fa-cart-shopping"></i>
        </li>
      </ul>
    </div>
  </div>
</nav>


<script>
  // Variable pour stocker l'état de connexion de l'utilisateur
  var isLoggedIn = <?php echo json_encode($isLoggedIn); ?>;

  document.getElementById("favIcon").addEventListener("click", function(event) {
    event.preventDefault();
    if (!isLoggedIn) {
      alert("Vous devez vous connecter.");
      window.location.href = "./login.php";
    } else {
      // Code pour gérer le cas où l'utilisateur est connecté
      window.location.href = "./favories.php";
    }
  });
</script>


<nav class="navbar navbar-dark bg-dark-subtle" >
  <div class="container-fluid d-flex justify-content-center ">
  <span id="blinkText" class="navbar-brand mb-0 h1 text-danger">⚡Bonnes affaires pour les fêtes sur tout⚡</span>
  </div>
</nav>


<script>function blinkText() {
    const text = document.getElementById('blinkText');
    setInterval(() => {
        text.style.visibility = (text.style.visibility === 'hidden' ? '' : 'hidden');
    }, 900); 
}

window.onload = blinkText;</script>




<script>
  document.getElementById("favIcon").addEventListener("click", function(event) {
    event.preventDefault();
    alert("Vous devez vous connecter.");
    window.location.href = "./login.php";
  });
</script>
