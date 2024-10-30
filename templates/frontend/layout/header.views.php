<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/bootstrap.css">
    <link rel="stylesheet" href="../public/assets/css/utils.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <script src="https://www.google.com/recaptcha/api.js?render=6Ldy73AqAAAAAHsBKUR7xxUqds7LzV0_czfEDrNz"></script>
<script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6Ldy73AqAAAAAHsBKUR7xxUqds7LzV0_czfEDrNz', {action: 'homepage'}).then(function(token) {
            // Vous pouvez envoyer le token à votre serveur ici si nécessaire
        });
    });
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


    </style>


</head>

    <title>E-commence</title>
</head>
<body>
 

<?php
include __DIR__ .'/_partial/navbar_top.views.php'
?>

<?php
include __DIR__ .'/_partial/navbar_midder.views.php'
?>