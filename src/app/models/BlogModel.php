<?php
require_once '../config/database.php';

class BlogModel {
    public function getAllUni() {
        global $pdo;
        $stmt = $pdo->prepare("SELECT id, title FROM university");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllMind() {
        global $pdo;
        $stmt = $pdo->prepare("SELECT id, title FROM mindset");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllMar() {
        global $pdo;

        $stmt = $pdo->prepare("SELECT id, title FROM market");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllJob() {
        global $pdo;

        $stmt = $pdo->prepare("SELECT id, title FROM job");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBlogById($id, $table) {
        global $pdo;
    
        // Danh sách các bảng hợp lệ (có thể mở rộng nếu cần)

        $validTables = ['university', 'mindset', 'market', 'job'];
    
        // Kiểm tra xem tên bảng có hợp lệ không
        if (!in_array($table, $validTables)) {
            throw new Exception("Bảng không hợp lệ.");
        }
    
        // Chuẩn bị câu lệnh SQL
        $stmt = $pdo->prepare("SELECT * FROM $table WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT); // Đảm bảo rằng id là số nguyên
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
}
?>
