


<?php
include __DIR__ .'/../layout/header.views.php'
?>




<div class="container mt-5" style="margin-bottom: 15rem;">
        <div class="card shadow-sm">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="https://www.perkins.org/wp-content/uploads/2017/10/Password-cover.png" class="card-img" alt="Image">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <form action="reset_password.php" method="post">
                            <div class="form-group">
                                <label for="password">Nouveau mot de passe:</label>
                                <input type="password" class="form-control" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-outline-primary">Réinitialiser</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>










<?php
include __DIR__ .'/../layout/footer.views.php'
?>
