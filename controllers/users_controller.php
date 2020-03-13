<?php
require_once('../models/User.class.php');
//demarrage session
session_start();

// try/catch pour lever les erreurs de connexion
try {


    $action = isset($_GET['action']) ? $_GET['action'] : '';

    $user = new User();

    function register() {
        if ($user->save($_POST)){
            $_SESSION['errors'] = [];
            header('Location: ../views/users_list.php');
        }
        $_SESSION['errors'] = $user->errors;
        header('Location: ../views/users_register.php');
    }


} catch (Exception $e) {
    echo('cacaboudin exception');
    print_r($e);
}
?>