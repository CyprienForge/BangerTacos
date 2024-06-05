<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/style.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/account.css">
    <script src="http://127.0.0.1:8000/scripts/burger-menu.js" defer></script>
    <title>BangerTacos</title>
</head>
<body>
<header>
    <a href="/"><img id="logo" src="http://127.0.0.1:8000/images/logo.png" alt="Logo de BangerTacos"></a>
    <img id="iconMenu" src="http://127.0.0.1:8000/images/burgerMenu.png" alt="Icon d'hamburger pour le menu déroulant">

    <nav id="menu">
        <ul>
            <li>
                <img id="quit" src="http://127.0.0.1:8000/images/quitMenu.png" alt="Icon d'hamburger pour le menu déroulant">
            </li>
            <li>
                <img id="illustration" src="http://127.0.0.1:8000/images/tacosIcon.png" alt="Icon de tacos">
                <a href="/carte">Notre carte</a>
            </li>
            <li>
                <img id="illustration" src="http://127.0.0.1:8000/images/panierIcon.png" alt="Icon de caddie">
                <?php
                if(empty($_SESSION['id']))
                {
                    echo "<a href=/connection>Mon panier</a>";
                }
                else
                {
                    echo "<a href='/panier?id=$id'>Mon panier</a>";
                }
                ?>
            </li>
            <li>
                <img id="illustration" src="http://127.0.0.1:8000/images/compteIcon.png" alt="Icon de buste">
                <?php
                if(empty($_SESSION['id']))
                {
                    echo "<a href='/connection'>Mon compte</a>";
                }
                else
                {
                    echo "<a href='/account?id=$id'>Mon compte</a>";
                }
                ?>
            </li>
            <li>
                <img id="illustration" src="http://127.0.0.1:8000/images/contactIcon.png" alt="Icon de contact">
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>
</header>

<section class="sub-header">
    <img src="http://127.0.0.1:8000/images/compteBackground.jpg" alt="Immage de fond représentant des amis mangeant un kebab">
    <h2>COMPTE</h2>
</section>

<section class="mid-page">
    <h3>Bonjour <span><?= $user->getFirstName(); ?> !</span></h3>

    <h1>Récap' de mes infos !</h1>
    <img src="http://127.0.0.1:8000/images/editer.png" alt="Icon of pen to edit a form">
    <ul>
        <li>NOM : <?= $user->getSurName(); ?></li>
        <li>PRENOM : <?= $user->getFirstName(); ?> </li>
        <li>ADRESSE MAIL : <?= $user->getEmail(); ?></li>
        <li>N° TÉLÉPHONE : <?= $user->getPhone(); ?> </li>
        <li>POINTS FIDÉLITÉ : <?= $user->getLoyaltyPoints(); ?> </li>
    </ul>
</section>

<button>MON PANIER</button>

<footer>
    <img id="instagram-logo" src="http://127.0.0.1:8000/images/instagramIcon.png" alt="Logo d'Instagram">
    <img id="facebook-logo" src="http://127.0.0.1:8000/images/facebookIcon.png" alt="Logo de Facebook">
    <h4>@BangerTacos - 2024<br>Créé par FORGE Cyprien</h4>
</footer>
</body>
</html>