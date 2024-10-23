
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

<div class="d-flex justify-content-center align-items-center vh-90 mt-5">


<div class="card p-4 shadow-sm shadow-lg p-3 mb-5 bg-body rounded" style="width: 30rem; height: 500px;">
          <h2 class="text-center  text-success"><i class="fa-solid fa-user"></i></h2>  
        <h2 class="mb-4 text-center">Connexion</h2>
        <?php if (!empty($message)) echo $message; ?>  
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group position-relative">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required>
                    <i class="fas fa-eye position-absolute" id="togglePassword" style="top: 59%; right: 10px; cursor: pointer;"></i>
                </div>
                <button type="submit" class="btn btn-success btn-block">Se connecter</button>
            </form>
            <div class="d-flex justify-content-between mt-4">
                <a href="register.php">S'inscrire</a>
                <a href="./reset_password.php">Mot de passe oublié ?</a>
            </div>
        </div>
    </div>




    <script>
        document.querySelector('#togglePassword').addEventListener('click', function (e) {
            const password = document.querySelector('#password');
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>

<?php
include __DIR__ .'/../layout/footer.views.php'
?>
