<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/style.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/command.css">
    <script src="http://127.0.0.1:8000/scripts/burger-menu.js" defer></script>
    <script src="http://127.0.0.1:8000/scripts/jquery-3.7.1.js"></script>
    <script src="http://127.0.0.1:8000/scripts/command.js" defer></script>
    <title>BangerTacos</title>
</head>
<body>

<header>
    <?php include('Common/menu.php'); ?>
</header>

<section class="sub-header">
    <img src="http://127.0.0.1:8000/images/commandBackground.jpg" alt="Background who represents a big tacos">
    <h2 id="title-command">PAYER</h2>
</section>

<section class="mid-page">
    <h1>Récap' de ma commande</h1>
        <h4><?=$commands['date']?> | <?=$commands['hour']?> : Commande N°<?=$commands['id']?> ----- <?=$commands['price']?>€</h4>
        <?php for($i = 0 ; $i < count($articles) ; $i++): ?>
        <h5> x<?=$quantities[$i]?> <?=$articles[$i]->getName()?> | <?=$articles[$i]->getDescription()?></h5>
        <?php endfor; ?>

    <hr>
    <br>

    <h6>Assurez-vous que l'ensemble des données présentes au-dessus sont valides <span>avant de procéder au paiement</span></h6>

    <a href="/"><button onclick="dropBasket(<?=$_GET['id']?>)" id="submit">PAYER MA COMMANDE</button></a>

    <p>BangerTacos décline toute responsabilité en cas de paiement avec une carte volée</p>

</section>

<footer>
    <img id="instagram-logo" src="http://127.0.0.1:8000/images/instagramIcon.png" alt="Logo d'Instagram">
    <img id="facebook-logo" src="http://127.0.0.1:8000/images/facebookIcon.png" alt="Logo de Facebook">
    <h4>@BangerTacos - 2024<br>Créé par FORGE Cyprien</h4>
</footer>

</body>
</html>