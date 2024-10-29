
<?php
include __DIR__ .'/../layout/header.views.php';
?>

<div class="container mt-5" style="margin-bottom: 10rem;">
    <div class="card">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="https://securityintelligence.com/wp-content/uploads/2014/10/businessconceptemailondi_115451.jpg" class="card-img" alt="Image">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Réinitialisation de mot de passe</h5>
                    <form action="verify_reset_code.php" method="post">
                        <div class="form-group">
                            <label for="reset_code">Code de réinitialisation:</label>
                            <input type="text" class="form-control" name="reset_code" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Vérifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

























<?php
include __DIR__ .'/../layout/footer.views.php';
?>
