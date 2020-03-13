<?php
session_start();
//if (isset($_SESSION)){
//    echo "<pre>";
//    var_dump($_SESSION);
//    echo "</pre>";
//    if (empty($_SESSION)){
//        header('location: ./views/register.php');
//    }
//}

if(isset($_GET['controller']) & isset($_GET['action'])){
    $controller = $_GET['controller'];
    $action = $_GET['action'];
    header('Location: ./controllers/' . $controller . '_controller.php?action=' . $action);
} else {
    header('location: ./views/register.php');
}
?>