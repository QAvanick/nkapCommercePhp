
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


<div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-sm" style="width: 30rem;">
            <h2 class="text-center text-success"><i class="fa-solid fa-key"></i></h2>
            <h2 class="mb-4 text-center">Réinitialisation du mot de passe</h2>
            <form action="/reset-password" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Adresse e-mail :</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre adresse e-mail" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Envoyer le lien de réinitialisation</button>
            </form>
        </div>
    </div>




<?php
include __DIR__ .'/../layout/footer.views.php'
?>
