<?php
$servername = "localhost"; // Địa chỉ máy chủ MySQL
$username = "root";        // Tên người dùng MySQL
$password = "";            // Mật khẩu MySQL (thường là rỗng khi dùng XAMPP)
$dbname = "blog_database"; // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
