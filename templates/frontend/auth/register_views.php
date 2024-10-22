<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../public/assets/css/utils.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Bundle with Popper -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<?php
include __DIR__ .'/../layout/header.views.php'
?>

    <div class="container mt-5 "  >
        <div class="row justify-content-center ">
            <div class="col-md-6">
            
                <div class="card p-4 shadow-sm shadow-lg p-3 mb-5 bg-body rounded">
                    <h2 class="text-center"><i class="fa-solid fa-address-card"></i></h2>
              <h2 class="mb-4 text-center">Inscription</h2>
                    <form action="./register.php" method="post">
                        <div class="form-group">
                            <label for="name">Nom</label>
                            <input type="text" class="form-control" id="name" name="username" placeholder="Votre nom" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Votre mot de passe" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirmer le mot de passe</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmez votre mot de passe" required>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">S'inscrire</button>
                    </form>
                    <div class="d-flex justify-content-around mt-3 ">
                       <p>Déjà inscrit ?</p><a href="login.php"> Se connecter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   


















<?php
include __DIR__ .'/../layout/footer.views.php'
?>
