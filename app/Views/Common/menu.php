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