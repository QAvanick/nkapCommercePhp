<?php
include __DIR__ .'/base/header.admin.php'


?>




<div class="col-md-9">

<div class="container mt-5">
<div class="d-flex justify-content-end"><a class="btn btn-info mb-1" href="./category_detail.php">Retour</a></div>
        <h2>Ajouter une Catégorie</h2>
        <form action="category_ajout.php" method="POST">
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre" placeholder="Entrez le titre" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Entrez la description" required></textarea>
            </div>
            <button type="submit" value="ajouter" class="btn btn-success mt-3">Enregistrer</button>
        </form>
    </div>
</div>

</div> 








<?php
include __DIR__ .'/base/footer.admin.php'
?>