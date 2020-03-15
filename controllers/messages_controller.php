<?php
require_once('../models/Message.class.php');
//demarrage session
session_start();

// try/catch pour lever les erreurs de connexion
try {

    // tableau d'erreurs initial, vide
    $errors = [];

    $action = isset($_GET['action']) ? $_GET['action'] : '';

    $message = new Message();

/*    $funcArr = ['add'];*/


    function index(){
        $message = new Message();
        $_SESSION['errors'] = [];
        $messages = $message->findAll($_SESSION);
        $_SESSION['messages'] = $messages;
        header('Location: ../views/messages_list.php');
    }

/*    function add(){
        if ($message->add($_POST)){
            index();
            die;
        }
        $_SESSION['errors'] = $messages->errors;
        header('Location: ../views/add_message.php');
    }*/

    switch ($action){
        case 'add':
            if ($message->add($_POST)){
                index();
                die;
            }
            $_SESSION['errors'] = $messages->errors;
            header('Location: ../views/add_message.php');
            break;


         default;
            index();
            break;
    }



} catch (Exception $e) {
    echo('cacaboudin exception');
    print_r($e);
}
?>
