

<?php
include __DIR__ .'/base/header.admin.php'


?>

<div class="col-md-9">

<div class="container mt-5">
    <h2 class="text-center">Modifier Utilisateur</h2>
    <form action="user_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <div class="form-group">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" class="form-control" id="username" name="username" value="<?=$user['username'] ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?=$user['email'] ?>" required>
        </div>
        <div class="d-grid gap-2 mt-3">
            <button class="btn btn-info" type="submit">Mettre à jour</button>
        </div>
    </form>
</div>


    
<?php
include __DIR__ .'/base/footer.admin.php'
?>