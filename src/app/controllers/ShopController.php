<?php
require_once '../app/models/ShopModel.php';

class ShopController {
    public function getProductsAjax() {
        $model = new ShopModel();
        $type = $_GET['type'] ?? '';
        $shop = $_GET['shop'] ?? '';
        $price = $_GET['price'] ?? '';
        $rating = $_GET['rating'] ?? '';
        $status = $_GET['status'] ?? '';
        $page = $_GET['page'] ?? 1;

        $products = $model->getProducts($type, $shop, $price, $rating, $status, $page);
        $total = $model->countProducts($type, $shop, $price, $rating, $status);
        $limit = 10;
        $totalPages = ceil($total / $limit);

        $response = [
            'products' => $products,
            'totalPages' => $totalPages
        ];

        echo json_encode($response);
    }

    public function index() {
        $model = new ShopModel();
        $shop = $_GET['shop'] ?? '';
        $type = $_GET['type'] ?? '';
        $price = $_GET['price'] ?? '';
        $rating = $_GET['rating'] ?? '';
        $status = $_GET['status'] ?? '';
        $page = $_GET['page'] ?? 1;

        $products = $model->getProducts($type, $shop, $price, $rating, $status, $page);
        $total = $model->countProducts($type, $shop, $price, $rating, $status);
        $totalPages = ceil($total / 10);
        include '../app/views/shop.php';
    }
}
?>
