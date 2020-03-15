<nav>

    <a href="../controllers/users_controller.php?action=register">S'enregister</a>
    <a href="../controllers/users_controller.php?action=login">Se connecter</a>

    <?php

    if (!empty($_SESSION['user_id'])) {
        ?>
        <a href="../controllers/users_controller.php?action=compte">Mon compte</a>
        <?php
    }

    ?>

    <a href="../controllers/users_controller.php?action=deco">Déconnexion</a>

</nav>
