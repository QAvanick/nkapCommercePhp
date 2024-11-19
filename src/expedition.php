<?php
require_once './../templates/frontend/layout/header.views.php';
?>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
<ol class="breadcrumb bg-light shadow-sm rounded" style="display: flex; justify-content: center; margin-bottom: 0;">
  <li class="breadcrumb-item" style="margin: 0 5px;"><a href="./home.php">Accueil</a></li>
  <li class="breadcrumb-item active" aria-current="page" style="margin: 0 5px;">Expédition</li>
</ol>
</nav>

<div class="container mb-5" style="margin-top: 0;">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow-sm rounded bg-light">
                <div class="card-body custom-width">
                    <h2 class="card-title text-success">Informations d'Expédition</h2>
                    <h3>Options de Livraison</h3>
                    <ul>
                        <li><strong>Livraison Standard :</strong> 3-5 jours ouvrables</li>
                        <li><strong>Livraison Express :</strong> 1-2 jours ouvrables</li>
                        <li><strong>Livraison Internationale :</strong> 7-14 jours ouvrables</li>
                    </ul>
                    <h3>Délais de Livraison</h3>
                    <p>Les délais de livraison peuvent varier en fonction de votre emplacement et de la méthode de livraison choisie. Veuillez noter que les délais de livraison sont estimés et peuvent être affectés par des facteurs externes.</p>
                    <h3>Frais de Livraison</h3>
                    <ul>
                        <li><strong>Livraison Standard :</strong> Gratuit pour les commandes de plus de 50€, sinon 5€</li>
                        <li><strong>Livraison Express :</strong> 10€</li>
                        <li><strong>Livraison Internationale :</strong> 20€</li>
                    </ul>
                    <h3>Zones de Livraison</h3>
                    <p>Nous livrons dans les zones suivantes :</p>
                    <ul>
                        <li>Douala</li>
                        <li>yaoundé</li>
                        <li>Kribi</li>
                        <li>Bafoussam</li>
                    </ul>
                    <h3>Suivi de Commande</h3>
                    <p>Une fois votre commande expédiée, vous recevrez un e-mail de confirmation avec un numéro de suivi. Vous pouvez utiliser ce numéro pour suivre votre commande sur notre site web.</p>
                    <h3>Politique de Retour</h3>
                    <p>Si vous n'êtes pas satisfait de votre achat, vous pouvez retourner les articles dans les 30 jours suivant la réception pour un remboursement complet. Les articles doivent être retournés dans leur état d'origine. Veuillez contacter notre service client pour obtenir une étiquette de retour.</p>
                    <h3>Contact</h3>
                    <p>Pour toute question relative à l'expédition, veuillez nous contacter à l'adresse suivante : <a href="mailto:support@e-nkap.com">support@e-nkap.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once './../templates/frontend/layout/footer.views.php'
?>
