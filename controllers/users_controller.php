<?php
require_once('../models/User.class.php');
//demarrage session
session_start();

// try/catch pour lever les erreurs de connexion
try {


    $action = isset($_GET['action']) ? $_GET['action'] : '';

    $user = new User();

    $funcArr = ['register', 'listing'];

    function register() {
        $user = new User();

        if ($user->save($_POST)){
            header('Location: ../index.php?controller=users&action=listing');
        } else {
            $_SESSION['errors'] = $user->errors;
            die('oui');
            header('Location: ../index.php?');
        }
    }

    function listing(){
        $user = new User();
        $_SESSION['errors'] = [];
        $users = $user->findAll();
        $_SESSION['users'] = $users;
        header('Location: ../views/users_list.php');
    }


    if (in_array($action, $funcArr)){
        call_user_func($action);
    } else {
        echo "cette fonction n'existe pas";
    }
} catch (Exception $e) {
    echo('cacaboudin exception');
    print_r($e);
}
?>