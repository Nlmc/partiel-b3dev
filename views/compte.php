
<?php
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$users = isset($_SESSION['users']) ? $_SESSION['users'] : [];
$messages = isset($_SESSION['messages']) ? $_SESSION['messages'] : [];
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

    <a href="../controllers/users_controller.php?action=listing">Liste des utilisateurs</a>
    <a href="../views/messages_list.php">Liste des Messages</a>

</nav>
