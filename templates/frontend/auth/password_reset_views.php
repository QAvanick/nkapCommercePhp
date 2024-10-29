
<?php
include __DIR__ .'/../layout/header.views.php'
?>

<div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow-sm" style="border-radius: 10px; width: 65rem;">
            <div class="row g-0" style="background: #fff;  border-radius: 10px; box-shadow: 0 0 150px rgba(0, 0, 0, 0.1); border-left: 5px solid green;">
                <div class="col-md-6 d-none d-md-block">
                    <img src="https://res.cloudinary.com/dte7upwcr/image/upload/v1643939898/blog/blog2/como-comprar-por-internet/sitios-para-comprar-por-internet.jpg" alt="Image de réinitialisation" class="img-fluid card-img">
                </div>
                <div class="col-md-6">
                    <div class="card-body"style="border-radius: 10px; box-shadow: 0 0 150px rgba(0, 0, 0, 0.1);">
                        <h2 class="text-center text-success"><i class="fa-solid fa-key"></i></h2>
                        <h3 class="mb-4 text-center">Réinitialisation du mot de passe</h3>
                        <form action="./password_reset.php" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse e-mail :</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre adresse e-mail" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Envoyer le lien de réinitialisation</button>
                        </form>
                        <div class="text-center mt-3">
                            <p>Vous n'avez pas encore de compte? <a href="register.php">S'inscrire</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include __DIR__ .'/../layout/footer.views.php'
?>























