<?php
session_start();
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];


$sql = `SELECT * FROM users`;

?>
<html>
<ul class="errors">
    <?php
    foreach ($errors as $error) {
        echo("<li>" . $error . "</li>");
    }
    ?>
</ul>
    <form action="../controllers/users_controller.php?action=register" method="post">
        <label for="login">Login</label>
        <input type="text" name="login">
        <label for="">Password</label>
        <input type="password" name="password">
        <label for="lastname">Nom</label>
        <input type="text" name="lastname">
        <label for="firstname">Prenom</label>
        <input type="text" name="firstname">
        <input type="submit" value="subscribe">
    </form>
</html>


