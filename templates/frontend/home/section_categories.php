<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <ul class="d-flex flex-wrap justify-content-around list-unstyled">
                <?php foreach ($categories as $category): ?>
                    <li class="nav-item mx-3 mb-3">
                        <a class="nav-link" href="#">
                            <h3><?php echo htmlspecialchars($category['title']); ?></h3>
                            <p><?php echo htmlspecialchars($category['description']); ?></p>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
