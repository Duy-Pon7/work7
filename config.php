<?php
// Thông tin kết nối
$servername = "localhost"; // Địa chỉ máy chủ MySQL
$username = "root";        // Tên người dùng MySQL
$password = "";            // Mật khẩu MySQL (thường là rỗng khi dùng XAMPP)
$dbname = "blog_database"; // Tên cơ sở dữ liệu

try {
    // Kết nối với PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Thiết lập chế độ lỗi PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Kết nối thành công!";
} catch (PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage();
}
?>
