<?php
require_once '../config/database.php';

class BlogModel {
    public function getAllBlogs() {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM blogs");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBlogById($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM blogs WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
