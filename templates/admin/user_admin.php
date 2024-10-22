

<?php
include __DIR__ .'/base/header.admin.php'


?>

<div class="col-md-9">




<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nom</td>
                            <td>Email</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($users)) { ?>
                            <?php foreach ($users as $user) { ?>
                                <tr>
                                    <td><?php echo $user['id']; ?></td>
                                    <td><?php echo $user['username']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td>
                                        <a class="btn btn-success" href="./user_edit.php?id=<?php echo $user['id'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a class="btn btn-danger" href="./user_delete.php?id=<?php echo $user['id'] ?>"><i class="fa-solid fa-trash-can"></i></a>
                                        <a class="btn btn-info" href="./user_consulte.php?id=<?php echo $user['id'] ?>"><i class="fa-solid fa-eye"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="4">Aucun utilisateur trouvé.</td>
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



