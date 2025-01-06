<?php
// Sử dụng đường dẫn đúng để yêu cầu file từ thư mục app
require_once '../app/controllers/BlogController.php';

$controller = new BlogController();

// Kiểm tra nếu có tham số action và id trong URL
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    // Nếu action là 'blog' và có id, gọi phương thức showBlog()
    if (isset($_GET['id']) && isset($_GET['type'])) {
        $id = $_GET['id'];
        $type = $_GET['type'];
        $controller->showBlog($id, $type);
    }
} else {
    // Nếu không có tham số, gọi phương thức showHomePage() để hiển thị trang chủ
    $controller->showHomeLearn();
}
