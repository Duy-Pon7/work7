<?php
require_once '../app/controllers/ShopController.php';

$action = $_GET['action'] ?? '';

$controller = new ShopController();

if ($action === 'getProductsAjax') {
    $controller->getProductsAjax();
} else {
    $controller->index(); // Hiển thị trang mặc định khi không có action
}
?>
