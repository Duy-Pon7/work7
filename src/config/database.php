<?php

// $host = 'localhost';
// $dbname = 'work7';
// $username = 'root';  // Thay bằng username của bạn
// $password = '';      // Thay bằng password của bạn

$host = getenv('DB_HOST');      // Địa chỉ máy chủ database trong Docker (db container)
$dbname = getenv('DB_NAME');    // Tên cơ sở dữ liệu
$username = getenv('DB_USER');  // Tên người dùng (root trong trường hợp này)
$password = getenv('DB_PASSWORD'); // Mật khẩu (được lấy từ biến môi trường)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
