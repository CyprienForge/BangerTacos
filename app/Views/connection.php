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
    <h1>Connexion</h1>

    <form method="POST">
        <input id="champ" type="email" name="email" placeholder="Votre email" required pattern="^[a-zA-Z0-9._]+@[a-z]{2,}\.[a-zA-Z.]+$">
        <br>
        <input id="champ" type="password" name="password" placeholder="Votre mot de passe" required>
        <br>
        <input id="submit" type="submit" value="Se connecter">
    </form>
    <a href="/registration"><p>Vous ne possédez pas de compte ? Créez en un !</p></a>
</section>

<footer>
    <img id="instagram-logo" src="http://127.0.0.1:8000/images/instagramIcon.png" alt="Logo d'Instagram">
    <img id="facebook-logo" src="http://127.0.0.1:8000/images/facebookIcon.png" alt="Logo de Facebook">
    <h4>@BangerTacos - 2019<br>Créé par FORGE Cyprien</h4>
</footer>

</body>
</html>