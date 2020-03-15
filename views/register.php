<?php
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];

$sql = `SELECT * FROM users`;

?>

<?php require_once('../components/nav.php') ?>

<html>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://hedinoamane.fr/_css/normalize.css"/>
<link rel="stylesheet" href="https://hedinoamane.fr/_css/skeleton.css"/>
<ul class="errors">
    <?php
    foreach ($errors as $error) {
        echo("<li>" . $error . "</li>");
    }
    ?>
</ul>
    <form action="../controllers/users_controller.php?action=register" method="post">
        <label for="login" >Login</label>
        <input type="text" name="login" value="<?php echo !empty($_POST['login']) ? ($_POST['login']) : '' ?>">
        <label for="">Password</label>
        <input type="password" name="password" value="">
        <label for="lastname">Nom</label>
        <input type="text" name="lastname" value="<?php echo !empty($_POST['lastname']) ? ($_POST['lastname']) : '' ?>">
        <label for="firstname">Prenom</label>
        <input type="text" name="firstname" value="<?php echo !empty($_POST['firstname']) ? ($_POST['firstname']) : '' ?>">
        <input type="submit" value="subscribe">
    </form>
</html>


