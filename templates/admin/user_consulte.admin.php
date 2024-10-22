<?php
include __DIR__ .'/base/header.admin.php'


?>

<div class="col-md-9">


<div class="container mt-5">
<div class="d-flex justify-content-end">
                <a class="btn btn-info mt-3" href="./user.php">Retour à la liste</a>
            </div>
    <h2 class="text-center">Consultation de l'utilisateur</h2>
    <form action="update_user.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <div class="form-group">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" class="form-control" id="username" disabled ="username" value="<?=$user['username'] ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email"    disabled  name="email"  value="<?=$user['email'] ?>" required>
        </div>
       
    </form>
</div>

    
<?php
include __DIR__ .'/base/footer.admin.php'
?>