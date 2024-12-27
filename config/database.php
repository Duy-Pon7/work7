<?php



$host = 'db'; // Tên service MySQL trong docker-compose.yml
$db = 'blog';
$user = 'blog_user';
$password = 'blog_password';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// $host = 'localhost';
// $dbname = 'work7';
// $username = 'root';  // Thay bằng username của bạn
// $password = '';      // Thay bằng password của bạn

// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }
?>
