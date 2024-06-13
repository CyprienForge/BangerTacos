<?php session_start(); if(!empty($_SESSION['id'])) $id = $_SESSION['id']; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/style.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/contact.css">
    <script src="http://127.0.0.1:8000/scripts/burger-menu.js" defer></script>
    <title>BangerTacos</title>
</head>
<body>

<header>
    <?php include('Common/menu.php'); ?>
</header>

<section class="sub-header">
    <img src="http://127.0.0.1:8000/images/contactBackground.png" alt="A man who chat in his phone">
    <h2 id="title-contact">CONTACT</h2>
</section>

<section class="mid-page">
    <h1>Nos réseaux sociaux</h1>

    <div class="social-medias">
        <img id="instagram-logo" src="http://127.0.0.1:8000/images/instagramIcon.png" alt="Logo d'Instagram">
        <img id="facebook-logo" src="http://127.0.0.1:8000/images/facebookIcon.png" alt="Logo de Facebook">
    </div>

    <h1>Nous appeler</h1>

    <div class="phone">
        <img id="call" src="http://127.0.0.1:8000/images/iconCall.png" alt="Icon of phone to call">
        <h4>06 XX XX XX XX</h4>
    </div>
    <br>
    <div class="phone">
        <img id="call" src="http://127.0.0.1:8000/images/iconCall.png" alt="Icon of phone to call">
        <h4>06 XX XX XX XX</h4>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2779.9739281230036!2d4.0139146142944515!3d45.83180421933398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1716669000047!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <h5>27, Rue .................. , Saint-Germain Laval 42260</h5>

</section>

<footer>
    <img id="instagram-logo" src="http://127.0.0.1:8000/images/instagramIcon.png" alt="Logo d'Instagram">
    <img id="facebook-logo" src="http://127.0.0.1:8000/images/facebookIcon.png" alt="Logo de Facebook">
    <h4>@BangerTacos - 2024<br>Créé par FORGE Cyprien</h4>
</footer>
</body>
</html>