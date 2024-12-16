<?php
// Sử dụng đường dẫn đúng để yêu cầu file từ thư mục app
require_once '../app/controllers/BlogController.php';

$controller = new BlogController();

// Kiểm tra nếu có tham số action và id trong URL
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    // Nếu action là 'blog' và có id, gọi phương thức showBlog()
    if ($action == 'blog' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $controller->showBlog($id);
    }
} else {
    // Nếu không có tham số, gọi phương thức showHomePage() để hiển thị trang chủ
    $controller->showHomePage();
}
?>
