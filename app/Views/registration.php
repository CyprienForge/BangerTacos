<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/style.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/connection.css">
    <script src="http://127.0.0.1:8000/scripts/burger-menu.js" defer></script>
    <title>BangerTacos</title>
</head>
<body>

<header>
    <img id="logo" src="http://127.0.0.1:8000/images/logo.png" alt="Logo de BangerTacos">
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
                <a href="/connexion">Mon panier</a>
            </li>
            <li>
                <img id="illustration" src="http://127.0.0.1:8000/images/compteIcon.png" alt="Icon de buste">
                <a href="/connexion">Mon compte</a>
            </li>
            <li>
                <img id="illustration" src="http://127.0.0.1:8000/images/contactIcon.png" alt="Icon de contact">
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>
</header>

<section class="sub-header">
    <img src="http://127.0.0.1:8000/images/compteBackground.jpg" alt="Immage de fond représentant des amis qui mangent un kebab entre eux">
</section>

<section class="mid-page">
    <h1>Inscription</h1>

    <form method="POST">
        <input id="champ" type="text" name="firstName" placeholder="Votre prénom" required>
        <br>
        <input id="champ" type="text" name="surName" placeholder="Votre nom" required>
        <br>
        <input id="champ" type="email" name="email" placeholder="Votre email" required pattern="^[a-zA-Z0-9._]+@[a-z]{2,}\.[a-zA-Z.]+$">
        <br>
        <input id="champ" type="tel" name="phone" placeholder="Votre téléphone (07XXXXXXXX)" required>
        <br>
        <input id="champ" type="password" name="password" placeholder="Votre mot de passe" required>
        <br>
        <input id="champ" type="password" name="repeatPassword" placeholder="Répéter votre mot de passe" required>
        <br>
        <input id="submit" type="submit" value="Créer le compte">
    </form>
    <a href="/inscription"><p>Vous possédez déjà un compte ? Connectez-vous !</p></a>
</section>

<?php

    use Classes\Register;
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $register = new Register($_POST['firstName'], $_POST['surName'], $_POST['email'], $_POST['phone'],
                                 $_POST['password'], $_POST['repeatPassword']);
        if(!$register->register())
        {
            echo '<p>Inscription échouée !</p>';
            exit(1);
        }
        echo '<p>Inscription réussie !</p>';
    }
?>

<footer>
    <img id="instagram-logo" src="http://127.0.0.1:8000/images/instagramIcon.png" alt="Logo d'Instagram">
    <img id="facebook-logo" src="http://127.0.0.1:8000/images/facebookIcon.png" alt="Logo de Facebook">
    <h4>@BangerTacos - 2024<br>Créé par FORGE Cyprien</h4>
</footer>

</body>
</html>