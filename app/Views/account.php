<?php session_start(); if(!empty($_SESSION['id'])) $id = $_SESSION['id']; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/style.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/account.css">
    <script src="http://127.0.0.1:8000/scripts/burger-menu.js" defer></script>
    <script src="http://127.0.0.1:8000/scripts/account.js" defer></script>
    <title>BangerTacos</title>
</head>
<body>
<header>
    <?php include('Common/menu.php'); ?>
</header>

<section class="sub-header">
    <img src="http://127.0.0.1:8000/images/compteBackground.jpg" alt="Immage de fond représentant des amis mangeant un kebab">
    <h2>COMPTE</h2>
</section>

<section class="mid-page">
    <h3>Bonjour <span><?= $user->getFirstName(); ?> !</span></h3>

    <h1>Récap' de mes infos !</h1>
    <img src="http://127.0.0.1:8000/images/editer.png" alt="Icon of pen to edit a form">
    <ul class="recap">
        <li>NOM : <?= $user->getSurName(); ?></li>
        <li>PRENOM : <?= $user->getFirstName(); ?> </li>
        <li>ADRESSE MAIL : <?= $user->getEmail(); ?></li>
        <li>N° TÉLÉPHONE : <?= $user->getPhone(); ?> </li>
        <li>POINTS FIDÉLITÉ : <?= $user->getLoyaltyPoints(); ?> </li>
    </ul>

    <form method="POST" class="infos-changer">
        <input id="champ" type="text" name="firstName" placeholder="Votre prénom" required>
        <br>
        <input id="champ" type="text" name="surName" placeholder="Votre nom" required>
        <br>
        <input id="champ" type="email" name="email" placeholder="Votre email" required pattern="^[a-zA-Z0-9._]+@[a-z]{2,}\.[a-zA-Z.]+$">
        <br>
        <input id="champ" type="tel" name="phone" placeholder="Votre téléphone (07XXXXXXXX)" required>
        <br>
        <input id="submit" type="submit" value="VALIDER">
    </form>

</section>

<button>MON PANIER</button>

<footer>
    <img id="instagram-logo" src="http://127.0.0.1:8000/images/instagramIcon.png" alt="Logo d'Instagram">
    <img id="facebook-logo" src="http://127.0.0.1:8000/images/facebookIcon.png" alt="Logo de Facebook">
    <h4>@BangerTacos - 2024<br>Créé par FORGE Cyprien</h4>
</footer>
</body>
</html>