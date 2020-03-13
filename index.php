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


$controller = $_GET['controller'];
$action = $_GET['action'];
if(isset($controller) & isset($action)){
    header('Location: ./controllers/' . $controller . '_controller.php?action=' . $action);
}
?>