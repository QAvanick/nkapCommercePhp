<?php
require_once './../templates/frontend/layout/header.views.php';
?>

<div style="width: 50%; margin: auto; background: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-top: 50px;">
    <h2>Produit</h2>
    <div style="margin-bottom: 15px;">
        <img src="chemin/vers/image_du_produit.jpg" alt="Image du produit" style="width: 100%; height: auto;">
    </div>
    <div style="margin-bottom: 15px;">
        <h3>Caractéristiques du produit</h3>
        <ul>
            <li>Caractéristique 1</li>
            <li>Caractéristique 2</li>
            <li>Caractéristique 3</li>
        </ul>
    </div>
    <div style="margin-bottom: 15px;">
        <button onclick="ajouterAuPanier()">Ajouter au panier</button>
        <button onclick="window.location.href='payment_form.html'">Payer</button>
    </div>
</div>

<div style="width: 50%; margin: auto; background: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-top: 50px;">
    <h2>Formulaire de Paiement</h2>
    <form action="/submit_payment" method="POST">
        <div style="margin-bottom: 15px;">
            <label for="name" style="display: block; margin-bottom: 5px;">Nom Complet</label>
            <input type="text" id="name" name="name" required style="width: 100%; padding: 10px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="email" style="display: block; margin-bottom: 5px;">Email</label>
            <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="address" style="display: block; margin-bottom: 5px;">Adresse</label>
            <input type="text" id="address" name="address" required style="width: 100%; padding: 10px; box-sizing: border-box;">
        </div>
        <div style="margin-bottom: 15px;">
            <label for="product" style="display: block; margin-bottom: 5px;">Produit</label>
            <select id="product" name="product" required style="width: 100%; padding: 10px; box-sizing: border-box;">
                <option value="tshirt">T-shirt - 5000 FCFA</option>
                <option value="versace">Versace - 7000 FCFA</option>
                <option value="air_nike">Chaussures AIR Nike - 20000 FCFA</option>
            </select>
        </div>
        <div style="margin-bottom: 15px;">
            <label for="payment" style="display: block; margin-bottom: 5px;">Méthode de Paiement</label>
            <select id="payment" name="payment" required style="width: 100%; padding: 10px; box-sizing: border-box;">
                <option value="momo">Mobile Money</option>
                <option value="visa">Visa</option>
                <option value="mastercard">MasterCard</option>
            </select>
        </div>
        <div style="margin-bottom: 15px;">
            <button type="submit" style="background: #5cb85c; color: #fff; padding: 10px 15px; border: none; cursor: pointer;">Payer</button>
        </div>
    </form>
</div>

<script>
function ajouterAuPanier() {
    alert("Produit ajouté au panier!");
    // Vous pouvez ajouter ici le code pour gérer l'ajout au panier
}
</script>

<?php
require_once './../templates/frontend/layout/footer.views.php';
?>
