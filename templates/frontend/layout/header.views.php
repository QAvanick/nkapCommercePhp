<!DOCTYPE html>
<html lang="?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <title>E-Nkap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/bootstrap.css">
    <link rel="stylesheet" href="../public/assets/css/utils.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <script src="https://www.google.com/recaptcha/api.js?render=6Ldy73AqAAAAAHsBKUR7xxUqds7LzV0_czfEDrNz"></script>
<script>

var element = document.getElementById('elementID');
if (element) {
    element.style.display = 'block';
}
    grecaptcha.ready(function() {
        grecaptcha.execute('6Ldy73AqAAAAAHsBKUR7xxUqds7LzV0_czfEDrNz', {action: 'homepage'}).then(function(token) {
            // Vous pouvez envoyer le token à votre serveur ici si nécessaire
        });
    });
</script>
<script>
        function showPopup() {
            var popup = document.getElementById("popup");
            popup.style.display = "block";
            setTimeout(function() {
                popup.style.display = "none";
            }, 3000); // Le pop-up disparaît après 3 secondes
        }
    </script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Bundle with Popper -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<style>
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f7f7f7;
        }
        .login-form {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);


        }


        header {
    background-color: #333;
    color: #fff;
    padding: 1rem;
    text-align: center;
}

section {
    padding: 2rem;
    max-width: 800px;
    margin: auto;
}
body {
    background-image: url('https://images.unsplash.com/photo-1729955031370-88d645538891?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
    width: 100%;
    margin: 0;
    padding: 0;
    
    
}

.custom-width {
        max-width: 100%; /* Ajustez ce pourcentage selon vos besoins */
        
    }


.mod {
    display: block;
    unicode-bidi: isolate;
    max-width: 3000px;
    position: relative;
}

.inner-banner {
    background: url('https://plus.unsplash.com/premium_photo-1690820317533-8baf7dbf7ffc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
    background-position: center;
    background-size: cover;
    height: 400px;
    padding: 50px 0 0; /* Ajusté */
    display: flex;
    align-items: flex-start; /* Ajusté */
    justify-content: center;
}

.cus-btn.light {
    color: green;
    background: #FAFAFA;
    border: 2px solid green;
    
}
.inner-banner .content h2 {
    font-weight: 600;
    line-height: 120%;
    font-family: "Jost", sans-serif;
    letter-spacing: -0.03em;
    color: #FAFAFA;
}

.inner-banner .content h3 {
    font-weight: 600;
    line-height: 130%;
    letter-spacing: -0.02em;
    text-transform: uppercase;
    font-family: "Jost", sans-serif;
    margin-bottom: 0px;
    color: #2C2D2F;
}


.below-content {
    clear: both;
    overflow: hidden;
    padding-top: 2rem;
    padding-bottom: 1.7em;
    border-top: 2px solid green;
    text-align: center; /* Centrer le contenu */
}

.col-full {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
}

.widget_text {
    margin: 10px;
}

.gamma.widget-title {
    font-size: 1.5em;
    font-weight: bold;
    
}

.textwidget p {
    margin: 5px 0;
}
.icon-spacing {
    margin-right: 10px;
}
.green-icon {
    color: green; 
}


.drapeau {
  width: 20px; 
  height: auto;
  margin-right: 5px; 
}

.popup {
        display: none;
        position: fixed;
        top: 0;
        left: 87%;
        transform: translateX(-50%);
        background-color: #4CAF50;
        color: white;
        padding: 15px;
        z-index: 1000;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

  
    .category-title {
        color: #3498db; /* Remplacez par la couleur de votre choix */
    }

    .product-card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            margin-bottom: 20px;
        }
        .product-card img {
            height: 200px;
            object-fit: cover;
        }


        .partners-section {
            padding: 50px 0;
            background-color: #f9f9f9;
        }
        .partner-logo {
            max-width: 150px;
            margin: 20px;
        }


        .testimonial { margin-bottom: 30px;
           
         } 
        .card-img-top_ { width: 100%; height: auto;
            border-radius: 10%; object-fit: cover;
        
            width: 80px; /* Réduire la taille du cercle */ 
            height: 80px; /* Réduire la taille du cercle */ 
            border-radius: 50%; object-fit: cover; 
            border-bottom: 3px solid red; /* Ajouter une bordure inférieure rouge */ 
            margin: 0 auto; /* Centrer l'image */ display: block;}



            .favorite-btn {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: white;
    border: none;
    color: red;
    font-size: 1.5rem;
    cursor: pointer;
}

.favorite-btn:hover {
    color: darkred;
}

    </style>


</head>

    <title>E-commence</title>
</head>
<body>
 <div id="popup" class="popup">Message envoyé avec succès.</div>

<?php
include __DIR__ .'/_partial/navbar_top.views.php'
?>

<?php
include __DIR__ .'/_partial/navbar_midder.views.php'
?>