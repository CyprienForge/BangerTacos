<?php if(!empty($_SESSION['id'])) $id = $_SESSION['id']; ?>
<a href="/"><img id="logo" src="http://127.0.0.1:8000/images/logo.png" alt="Logo de BangerTacos"></a>
<img id="iconMenu" src="http://127.0.0.1:8000/images/burgerMenu.png" alt="Icon d'hamburger pour le menu déroulant">

<nav id="menu">
    <ul>
        <li>
            <img id="quit" src="http://127.0.0.1:8000/images/quitMenu.png" alt="Icon d'hamburger pour le menu déroulant">
        </li>
        <li>
            <a href="/carte"><img id="illustration" src="http://127.0.0.1:8000/images/tacosIcon.png" alt="Icon de tacos"></a>
            <a id="link" href="/carte">Notre carte</a>
        </li>
        <li>
            <?php
            if(empty($_SESSION['id']))
            {
                echo "<a href='/connection'><img id='illustration' src='http://127.0.0.1:8000/images/panierIcon.png' alt='Icon de caddie'></a>";
                echo "<a id='link' href=/connection>Mon panier</a>";
            }
            else
            {
                echo "<a href='/basket?id=$id'><img id='illustration' src='http://127.0.0.1:8000/images/panierIcon.png' alt='Icon de caddie'></a>";
                echo "<a id='link' href='/basket?id=$id'>Mon panier</a>";
            }
            ?>
        </li>
        <li>
            <?php
            if(empty($_SESSION['id']))
            {
                echo "<a href='/connection'><img id='illustration' src='http://127.0.0.1:8000/images/compteIcon.png' alt='Icon de buste'></a>";
                echo "<a id='link' href='/connection'>Mon compte</a>";
            }
            else
            {
                echo "<a href='/account?id=$id'><img id='illustration' src='http://127.0.0.1:8000/images/compteIcon.png' alt='Icon de buste'></a>";
                echo "<a id='link' href='/account?id=$id'>Mon compte</a>";
            }
            ?>
        </li>
        <li>
            <a href="/contact"><img id="illustration" src="http://127.0.0.1:8000/images/contactIcon.png" alt="Icon de contact"></a>
            <a id='link' href="/contact">Contact</a>
        </li>
    </ul>
</nav>