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
    public function getAllLangMar() {
        global $pdo;
        $stmt = $pdo->prepare("SELECT id, title FROM language_market");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllPoiMar() {
        global $pdo;
        $stmt = $pdo->prepare("SELECT id, title FROM position_market");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getBlogById($id, $table) {
        global $pdo;
    
        // Danh sách các bảng hợp lệ (có thể mở rộng nếu cần)
        $validTables = ['university', 'mindset', 'language_market', 'position_market'];
    
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
