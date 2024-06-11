<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/style.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/carte.css">
    <script src="http://127.0.0.1:8000/scripts/burger-menu.js" defer></script>
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

    <?php
        foreach ($menus as $menu)
        {
            $name = $menu->getName();
            $description = $menu->getDescription();
            $price = $menu->getPrice();
            echo "<img id='icon-add' src='http://127.0.0.1:8000/images/iconAddMenu.png' alt='Icon pour ajouter un menu'>";
            echo "<h4>$name : <span>$description ... {$price}€</span></h4>";
        }
    ?>

    <h6>Les viandes aux choix : </h6>
    <ul class="meat-choice">
        <li>- Kebab</li>
        <li>- Poulet</li>
        <li>- Steak haché</li>
        <li>- Tenders</li>
        <li>- Cordon bleu</li>
        <li>- Merguez</li>
    </ul>

</section>

</body>
</html>