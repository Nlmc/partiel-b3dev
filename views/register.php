<?php
session_start();

echo '<pre>';
var_dump( $_SESSION);
echo '</pre>';
?>
<html>
    <form action="../controllers/users_controller.php?action=register" method="post">
        <label for="login">Login</label>
        <input type="text" name="login">
        <label for="">Password</label>
        <input type="password" name="password">
        <label for="lastname">Nom</label>
        <input type="text" name="lastname">
        <label for="firstname">Prenom</label>
        <input type="text" name="lastname">
        <label for="image">Photo de profil</label>
        <input type="file" name="image" accept="image/png, image/jpeg">
        <input type="submit" value="subscribe">
    </form>
</html>


