

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>


<?php
$current_url = $_SERVER['REQUEST_URI'];
?>


    <nav class="navbar navbar-expand-lg bg-white navbar-fixed " id="navbar2"  >
        <div class="container">
            <a class="navbar-brand text-primary" href="./home.php"><i class="fa-thin fa-truck me-2"></i>livraison gratuite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://flagpedia.net/data/flags/w580/fr.webp" class="drapeau" alt="Français" /> Français
                        </a>
                        <ul class="dropdown-menu">
                            <li ><a class="dropdown-item" href="<?php echo $current_url; ?>?lang=fr" target="_self"><img src="https://flagpedia.net/data/flags/w580/fr.webp" class="drapeau" alt="Français" /> Français</a></li>
                            <li ><a class="dropdown-item" href="<?php echo $current_url; ?>?lang=en" target="_self"><img src="https://flagpedia.net/data/flags/w580/gb.webp" class="drapeau" alt="Anglais" /> Anglais</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="./expedition.php">Expédition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./about.php">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li class="nav-item ml-4">
                            <a class="btn btn-outline-primary" href="./profil_user.php"><i class="fa-solid fa-user"></i> Profil</a>
                        </li>
                        <li class="nav-item ml-2">
                            <a class="btn btn-outline-danger" href="./logout.php"><i class="fa-solid fa-right-from-bracket"></i> Déconnexion</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item ml-4">
                            <a class="btn btn-outline-primary" href="./login.php"><i class="fa-solid fa-right-to-bracket"></i> Connexion</a>
                        </li>
                        <li class="nav-item ml-2">
                            <a class="btn btn-outline-success" href="./register.php"><i class="fa-solid fa-user"></i> Inscription</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
