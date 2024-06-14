<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/style.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/basket.css">
    <script src="http://127.0.0.1:8000/scripts/burger-menu.js" defer></script>
    <script src="http://127.0.0.1:8000/scripts/carte.js" defer></script>
    <title>BangerTacos</title>
</head>
<body>

<header>
    <?php include('Common/menu.php'); ?>
</header>

<section class="sub-header">
    <img src="http://127.0.0.1:8000/images/basketBackground.png" alt="Background who represents a big tacos">
    <h2 id="title-basket">PANIER</h2>
</section>

<section class="mid-page">
    <h1>Ma commande en cours</h1>
    <?php for($i = 0; $i < count($baskets); $i++) : ?>
        <h4><?= $namesProduct[$i] ?> : <span id="count">xX</span> / <span id="price"><?=$pricesProduct[$i]?>€</span></h4>
    <?php endfor; ?>

    <hr>
    <br>
    <h4 id="total"><span id="count">TOTAL</span> / <span id="price"><?=$priceTotal?>€</h4>
    <h4 id="total"><span id="count">TOTAL</span> / <span id="price"><?=$reduction?>PTS</h4>

</section>

<section class="end-page">
    <input id="champ" type="time" name="time">
    <label for="time">Heure voulue : </label>
    <input id="submit" type="submit" value="PAYER">
</section>

<footer>
    <img id="instagram-logo" src="http://127.0.0.1:8000/images/instagramIcon.png" alt="Logo d'Instagram">
    <img id="facebook-logo" src="http://127.0.0.1:8000/images/facebookIcon.png" alt="Logo de Facebook">
    <h4>@BangerTacos - 2024<br>Créé par FORGE Cyprien</h4>
</footer>

</body>
</html>