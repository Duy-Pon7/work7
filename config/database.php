<?php
$host = 'localhost';
$dbname = 'blog_db';
$username = 'root';  // Thay bằng username của bạn
$password = '';      // Thay bằng password của bạn

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
