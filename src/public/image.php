<?php
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/ImageController.php';

$authController = new AuthController();
$imageController = new ImageController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    if ($action == 'login') {
        $authController->login();
    } elseif ($action == 'logout') {
        $authController->logout();
    } elseif ($action == 'addImage') {
        if (isset($_SESSION['user'])) {
            $imageController->addImage();
        } else {
            header("Location: ../app/views/login.php");
        }
    } elseif ($action == 'deleteImage') {
        if (isset($_SESSION['user'])) {
            $imageController->deleteImage($_GET['id']);
        } else {
            header("Location: ../app/views/login.php");
        }
    }
} else {
    if (isset($_SESSION['user']) && isset($_SESSION['environment'])) {
        $imageController->displayImages();
    } else {
        header("Location: ../app/views/login.php");
    }
}
