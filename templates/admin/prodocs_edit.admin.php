<?php
include __DIR__ . '/base/header.admin.php'


?>




<div class="col-md-9">



    <div class="container mt-5">

        <h2 class="text-center">Modifier un produit</h2>
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <label for="productName">Nom du Produit</label>
                    <input type="text" class="form-control" name="productName" placeholder="Entrez le nom du produit" value="<?php echo $product['p_name']; ?>">
                </div>
                <div class="col">
                    <label for="productPrice">Prix</label>
                    <input type="number" class="form-control" name="productPrice" placeholder="Entrez le prix" value="<?php echo $product['p_price']; ?>">
                </div>
            </div>
            <div class="form-group p-3 mb-2 bg-light text-dark">
                <label for="image">Image</label>
                <input type="file" class="form-control-file " name="image">
            </div>


            <div class="row">
                <div class="col-md-6">
                    <label for="exampleFormControlSelect1">Categories</label>
                    <select class="form-control" name="nom_categorie">
                        <?php foreach ($categories as $category) { ?>
                            <option <?= $category['id'] ==  $product['c_id'] ? 'selected' : '' ?> value="<?php echo $category['id']; ?>"><?php echo $category['titre'] ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="productQuantity">Quantité</label>
                    <input type="number" class="form-control" name="productQuantity" placeholder="Entrez la quantité" value="<?php echo $product['p_quantity']; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="productDescription">Description</label>
                <textarea class="form-control" name="productDescription" rows="3" placeholder="Entrez la description"><?php echo $product['p_description'] ?></textarea>
            </div>
            <button type="submit" class="btn btn-outline-success mt-3">modifier</button>
        </form>
    </div>


</div>

</div>



















<?php
include __DIR__ . '/base/footer.admin.php'
?>