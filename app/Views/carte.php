<?php session_start(); if(!empty($_SESSION['id'])) $id = $_SESSION['id']; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/style.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/carte.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="http://127.0.0.1:8000/scripts/burger-menu.js" defer></script>
    <script src="http://127.0.0.1:8000/scripts/jquery-3.7.1.js"></script>
    <script src="http://127.0.0.1:8000/scripts/carte.js" defer></script>
    <title>BangerTacos</title>
</head>
<body>

<header>
    <?php include('Common/menu.php'); ?>
</header>

<section class="sub-header">
    <img src="http://127.0.0.1:8000/images/carteBackground.webp" alt="Immage de fond représentant un menu tacos">
    <h2 id="title-menu">MENUS</h2>
</section>

<section class="mid-page">
    <?php foreach($menus as $menu) : ?>
            <?php if(!empty($_SESSION['id'])) : ?>
                <input class="add-icon" type="image" src="http://127.0.0.1:8000/images/iconAddMenu.png" onclick='addIntoBasket(<?=$_SESSION['id']?>, <?=$menu->getId()?>)' />
                <?php else : ?>
                <input class="add-icon" type="image" src="http://127.0.0.1:8000/images/iconAddMenu.png" onclick='userDontConnect()' />
        <?php endif ?>
            <h4><?= $menu->getName() ?> : <span><?= $menu->getDescription() ?> ... <?= $menu->getPrice() ?>€</span></h4>
    <?php endforeach; ?>

    <h6>Les viandes aux choix : </h6>
    <ul class="meat-choice">
        <li>- Kebab</li>
        <li>- Poulet</li>
        <li>- Steak haché</li>
        <li>- Tenders</li>
        <li>- Cordon bleu</li>
        <li>- Merguez</li>
    </ul>

    <div class="sub-header">
        <img src="http://127.0.0.1:8000/images/extrasIcon.png" alt="Image for background who represents a icecream">
        <h2 id="title-menu">EXTRAS</h2>
    </div>

    <?php foreach($extras as $extra) : ?>
        <?php if(!empty($_SESSION['id'])) : ?>
            <input class="add-icon" type="image" src="http://127.0.0.1:8000/images/iconAddMenu.png" onclick='addExtraIntoBasket(<?=$_SESSION['id']?>, <?=$extra->getId()?>)' />
        <?php else : ?>
            <input class="add-icon" type="image" src="http://127.0.0.1:8000/images/iconAddMenu.png" onclick='userDontConnect()' />
        <?php endif ?>
        <h4><?= $extra->getName() ?> : <span>..... <?= $extra->getPrice() ?>€</span></h4>
    <?php endforeach; ?>

    <h6>Les parfums aux choix : </h6>
    <ul class="cream-choice">
        <li>- Fraise</li>
        <li>- Vanille</li>
        <li>- Framboise</li>
        <li>- Citron</li>
        <li>- Café</li>
        <li>- Chocolat</li>
        <li>- Rhum raisin</li>
    </ul>

    <h3>Écoutez votre ventre !</h3>

</section>

<footer>
    <img id="instagram-logo" src="http://127.0.0.1:8000/images/instagramIcon.png" alt="Logo d'Instagram">
    <img id="facebook-logo" src="http://127.0.0.1:8000/images/facebookIcon.png" alt="Logo de Facebook">
    <h4>@BangerTacos - 2024<br>Créé par FORGE Cyprien</h4>
</footer>

</body>
</html>