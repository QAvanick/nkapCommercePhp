<?php
include __DIR__ .'/base/header.admin.php'


?>




<div class="col-md-9">

<div class="container mt-5">
<div class="d-flex justify-content-end"><a class="btn btn-info mb-1" href="./category_detail.php">Retour</a></div>
    <h2>Modifier une categorie</h2>
    <form action="category_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $category['id']; ?>">
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre" value="<?=$category['titre'] ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required><?php echo $category['description'] ?></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-3">Modifier</button>
    </form>
</div>
</div> 








<?php
include __DIR__ .'/base/footer.admin.php'
?>