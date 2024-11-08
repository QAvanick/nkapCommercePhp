<?php
include __DIR__ . '/base/header.admin.php';
?>

<div class="col-md-9">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-end mb-3">
                    <a class="btn btn-info me-3" href="./subscribe.add.php"> + Ajouter un produit</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($subscribers as $subscriber): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($subscriber['id'] ?? ''); ?></td>
                                    <td><?php echo htmlspecialchars($subscriber['email'] ?? ''); ?></td>
                                    <td>
                                        <a class="btn btn-success me-2" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a class="btn btn-danger me-2" href="./subscribe_delete.php?id=<?php echo htmlspecialchars($subscriber['id'] ?? ''); ?>"><i class="fa-solid fa-trash-can"></i></a>
                                        <a class="btn btn-info" href="#"><i class="fa-solid fa-eye"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include __DIR__ . '/base/footer.admin.php';
?>
