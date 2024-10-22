<?php
include __DIR__ .'/base/header.admin.php'


?>




<div class="col-md-9">

<div class="container mt-5">
    <h2 class="text-center">Consultation du produit</h2>
    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <label for="productName">Nom du Produit</label>
                <input type="text" class="form-control" name="productName" disabled placeholder="Entrez le nom du produit" value="<?php echo htmlspecialchars($product['p_name']); ?>">
            </div>
            <div class="col">
                <label for="productPrice">Prix</label>
                <input type="number" class="form-control" name="productPrice" disabled placeholder="Entrez le prix" value="<?php echo htmlspecialchars($product['p_price']); ?>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleFormControlSelect1">Catégories</label>
                <select class="form-control" disabled name="nom_categorie">
                    <?php foreach ($categories as $category) { ?>
                        <option <?= $category['id'] == $product['c_id'] ? 'selected' : '' ?> value="<?php echo htmlspecialchars($category['id']); ?>"><?php echo htmlspecialchars($category['titre']); ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-6">
                <label for="productQuantity">Quantité</label>
                <input type="number" class="form-control" name="productQuantity" disabled placeholder="Entrez la quantité" value="<?php echo htmlspecialchars($product['p_quantity']); ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="productDescription">Description</label>
            <textarea class="form-control" name="productDescription" rows="3" disabled placeholder="Entrez la description"><?php echo htmlspecialchars($product['p_description']); ?></textarea>
        </div>
    </form>
</div>

</div>





<?php
include __DIR__ .'/base/footer.admin.php'
?>