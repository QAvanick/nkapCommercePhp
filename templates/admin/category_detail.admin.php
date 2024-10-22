<?php
include __DIR__ .'/base/header.admin.php'

?>
<div class="col-md-9">

    <div class="container">
        <div class="row">
            <div class="col-md-12  ">
            <div class="d-flex justify-content-end"><a class="btn btn-success mb-4" href="./category_ajout.php">ajouter une categorie</a></div>
                
                <div class="table-responsive ">
                    <table class="table ">
                        <thead >
                            <tr >
                                <td class="btn btn-info">ID</td>
                                <td>Nom</td>
                                <td class="btn btn-info">Description</td>
                                <td >Actions</td>
                            </tr>
                        </thead>
                        <tbody>


                         <?php foreach($categories as $category){?>

                    
                        <tr>
                           <td><?php echo $category['id'] ?></td>
                           <td><?php echo $category['titre'] ?></td>
                           <td><?php echo $category['description'] ?></td>
                            <td>
                                    <a class="btn btn-success"href="./category_edit.php?id=<?php echo $category['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a class="btn btn-danger" href="./category_delete.php?id=<?php echo $category['id'] ?>"><i class="fa-solid fa-trash-can"></i></a>
                                    <a class="btn btn-info" href="./category_consulte.php?id=<?php echo $category['id'] ?>"><i class="fa-solid fa-eye"></i></a>

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