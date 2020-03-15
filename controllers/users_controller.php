<?php
require_once('../models/User.class.php');
//demarrage session
session_start();

// try/catch pour lever les erreurs de connexion
try {


    $action = isset($_GET['action']) ? $_GET['action'] : '';

    $user = new User();

    $funcArr = ['register', 'listing', 'login', 'deco', 'compte'];

    function register() {
        $user = new User();

        if ($user->save($_POST)){
            header('Location: ../views/users_list.php');
        } else {
            $_SESSION['errors'] = $user->errors;
            header('Location: ../views/register.php');
        }
    }

        if (!empty($_SESSION['user_id'])) {

        }


    function listing(){
        $user = new User();
        $_SESSION['errors'] = [];
        $users = $user->findAll();
        $_SESSION['users'] = $users;
        header('Location: ../views/users_list.php');
    }

    function compte(){
        $user = new User();
        $_SESSION['errors'] = [];
        $users = $user->findAll();
        $_SESSION['users'] = $users;
        header('Location: ../views/compte.php');
    }

    function login(){
        $user = new User();

        if ($user->login($_POST)){
            $_SESSION['errors'] = [];
            $users = $user->findAll();
            $_SESSION['users'] = $users;
            header('Location: ../views/compte.php');
            die;
        }
        // put errors in $session
        $_SESSION['errors'] = $user->errors;
        header('Location: ../views/users_login.php');
    }

    function deco()
    {
        $user = new User();
        $users = $user->deco();
        header('Location: ../views/users_login.php');
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