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
    <h4>P'tit creux : <span>Tacos S, Frites, Boisson ... 7€</span></h4>
    <img src="http://127.0.0.1:8000/images/iconAddMenu.png" alt="Icon pour ajouter un menu">
    <h4>Gourmand : <span>Tacos M, Frites, Boisson ... 8.5€</span></h4>
    <h4>La Dalle : <span>Tacos L, Frites, Boisson ... 10€</span></h4>
    <h4>Le Final : <span>Tacos Xl, Frites++, Boisson ... 12.5€</span></h4>
</section>

</body>
</html>