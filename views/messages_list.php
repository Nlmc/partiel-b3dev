<?php
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$messages = isset($_SESSION['messages']) ? $_SESSION['messages'] : [];
?>

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
<?php require_once('../components/nav.php') ?>

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
        <h2>Messages</h2>
        <table class="u-full-width">
            <thead>
            <tr>
                <th>content</th>
                <th>created</th>
                <th>user_id</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($messages as $message) {
                ?>
                <tr>
                    <td><?= $message->content ?></td>
                    <td><?= $message->created ?></td>
                    <td><?= $message->user_id ?></td>
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