<?php
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$users = isset($_SESSION['users']) ? $_SESSION['users'] : [];
?>

<?php require_once('../components/nav.php') ?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://hedinoamane.fr/_css/normalize.css"/>
    <link rel="stylesheet" href="https://hedinoamane.fr/_css/skeleton.css"/>
    <style>
        fieldset {
            border: 0.25rem solid rgba(225, 225, 225, 0.5);
            border-radius: 4px;
            padding: 1rem 2rem;
        }

        .errors {
            color: #ff5555;
        }
    </style>
</head>
    <body>
    <div class="container">
        <div class="row">
            <h2>Mon compte</h2>
        </div>
        <a href=""></a>

    </div>


    <nav>
        
        <?php

        if (!empty($_SESSION['user_id'])) {
            ?>
            <a href="../controllers/users_controller.php?action=compte">Retour à mon compte </a>
            <?php
        }
        ?>
    </nav>

    <div class="container">
        <div class="row">

            <h5>Liste des utilisateurs</h5>
            <table class="u-full-width">
                <thead>
                <tr>
                    <th>id</th>
                    <th>login</th>

                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($users as $user) {
                    ?>
                    <tr>
                        <td><?= $user->id ?></td>
                        <td><?= $user->login ?></td>

                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>


        </div>


        </div>

    </body>
</html>
