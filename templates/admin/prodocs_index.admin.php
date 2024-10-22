<?php
include __DIR__ .'/base/header.admin.php'


?>

<div class="col-md-9">


<div class="container">
        <div class="row">
            <div class="col-md-12  ">
            <div class="d-flex justify-content-end"><a class="btn btn-info mt-3" href="./prodocs_add.php">Ajouter un produit</a></div>

                <div class="table-responsive ">
                    <table class="table ">
                        <thead >
                            <tr >
                                <td>ID</td>
                                <td>Nom</td>
                                <td >prix</td>
                                <td >quantite</td>
                                <td >categorie</td>
                                <td >image</td>
                                <td >Description</td>
                                <td >Actions</td>
                            </tr>
                        </thead>
                        <tbody>


                         <?php foreach($products as $product){?>

                    
                        <tr>
                           <td><?php echo $product['p_id'] ?></td>
                           
                           <td><?php echo $product['p_name'] ?></td>
                           <td><?php echo $product['p_price'] ?></td>
                           <td><?php echo $product['p_quantity'] ?></td>
                           <td><?php echo $product['c_name'] ?></td>
                           <?php $img = SITE_ROOT.'/public'.$product['p_image']; ?>
                           <td><img src="<?php echo normalizePath($img) ?>" alt=""></td>
                           <td><?php echo $product['p_description'] ?></td>
                            <td>
                                    <a class="btn btn-success"href="./prodocs_edit.php?id=<?php echo $product['p_id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a class="btn btn-danger" href="./prodocs_delete.php?id=<?php echo $product['p_id'] ?>"><i class="fa-solid fa-trash-can"></i></a>
                                    <a class="btn btn-info" href="./prodocs_consulte.php?id=<?php echo $product['p_id'] ?>"><i class="fa-solid fa-eye"></i></a>

                                </td>
                            </tr>
                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

            
        </div>
    </div>

</div>









<?php
include __DIR__ .'/base/footer.admin.php'
?>