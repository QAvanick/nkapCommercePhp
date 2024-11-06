
<?php
include __DIR__ .'/base/header.admin.php'


?>

<div class="col-md-9">

<div class="container mt-5">
    <div class="d-flex justify-content-end">
        <a class="btn btn-info mt-3" href="subscribe.detail.php">Retour</a>
    </div>
    <h2 class="text-center">Ajouter une EmailNewsletter</h2>
    <form action="subscribe.add.php" method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Soumettre</button>
        </div>
    </form>
</div>

</div>











</div>






    
<?php
include __DIR__ .'/base/footer.admin.php'
?>