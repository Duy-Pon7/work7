<?php
$servername = "localhost"; // Thường là localhost
$username = "root"; // Tên người dùng (mặc định là root nếu bạn không thay đổi)
$password = ""; // Mật khẩu (rỗng nếu bạn không đặt mật khẩu cho MySQL)
$dbname = "blog_database"; // Tên cơ sở dữ liệu mà bạn đã tạo

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
