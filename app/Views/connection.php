<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/style.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/styles/connection.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="http://127.0.0.1:8000/scripts/burger-menu.js" defer></script>
    <title>BangerTacos</title>
</head>
<body>

<header>
    <?php include('Common/menu.php'); ?>
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

<?php
    use Classes\Loger;
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        $loger = new Loger($_POST['email'], $_POST['password']);

        if(!$loger->login())
        {
            echo '<p>Connexion échouée !</p>';
            exit(1);
        }

        echo
        "<script>swal({
            title: 'Connecté !',
            text: 'Bienvenue à toi', 
            icon: 'success',
            button: {
                text: 'Merci',
                className: 'buttonRedirect',
            }
            }).then(function(){
               window.location = '/'; 
            });
        </script>";
    }
?>

<footer>
    <img id="instagram-logo" src="http://127.0.0.1:8000/images/instagramIcon.png" alt="Logo d'Instagram">
    <img id="facebook-logo" src="http://127.0.0.1:8000/images/facebookIcon.png" alt="Logo de Facebook">
    <h4>@BangerTacos - 2024<br>Créé par FORGE Cyprien</h4>
</footer>

</body>
</html>