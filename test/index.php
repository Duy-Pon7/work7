<?php
require_once 'PostModel.php';
require_once 'PostController.php';

// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_database";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Khởi tạo Model và Controller
$postModel = new PostModel($conn);
$postController = new PostController($postModel);

// Hiển thị bài viết
$postController->showPosts();
?>
