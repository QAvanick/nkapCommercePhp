<?php
session_start();
require_once './../templates/frontend/layout/header.views.php';
require_once './../config/database.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$sql = "SELECT username, email FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $user_id, PDO::PARAM_INT);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$username = $user['username'];
$email = $user['email'];
?>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb" style="display: flex; justify-content: center;">
        <li class="breadcrumb-item" style="margin: 0 5px;"><a href="./home.php">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page" style="margin: 0 5px;">profil</li>
    </ol>
</nav>

<div class="container" >
    <div class="row justify-content-center">
        <div class="col-12" style="margin-top: -20px; ">
            <div class="card shadow-sm rounded">
                <div class="card-body">
                    <h2 class="card-title text-success">Profil Utilisateur</h2>
                    <form action="update_profile.php" method="POST">
                        <div class="form-group">
                            <label for="username">Nom d'utilisateur :</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email :</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('success')) {
            const popup = document.getElementById('popup_');
            popup.style.display = 'block';
            setTimeout(function() {
                popup.style.display = 'none';
            }, 3000); // Le pop-up disparaît après 3 secondes

            // Supprimer le paramètre 'success' de l'URL
            urlParams.delete('success');
            window.history.replaceState(null, null, window.location.pathname);
        }
    });
</script>

    <?php
    require_once './../templates/frontend/layout/footer.views.php';
    ?>

