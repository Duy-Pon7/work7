<?php
require_once '../config/database.php';

class ImageModel {
    private $environment ;
    //= $_SESSION['environment']
    // Thêm ảnh vào cơ sở dữ liệu
    // Hàm khởi tạo
    public function __construct() {
        $this->environment = $_SESSION['environment'] ?? 'images';  
    }
    public function addImage($image_name, $image_path) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO " . $this->environment . " (image_name, image_path) VALUES (:image_name, :image_path)");
        $stmt->bindParam(':image_name', $image_name);
        $stmt->bindParam(':image_path', $image_path);
        return $stmt->execute();
    }

    // Lấy tất cả ảnh
    public function getAllImages() {
        global $pdo;
        
        $stmt = $pdo->prepare("SELECT * FROM " . $this->environment);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lấy ảnh theo ID
    public function getImageById($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM " . $this->environment . " WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Xóa ảnh khỏi cơ sở dữ liệu và thư mục
    public function deleteImage($id) {
        global $pdo;
        
        // Lấy thông tin ảnh từ cơ sở dữ liệu
        $stmt = $pdo->prepare("SELECT image_path FROM " . $this->environment . " WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $image = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($image) {
            // Xóa ảnh khỏi thư mục
            if (file_exists($image['image_path'])) {
                unlink($image['image_path']);
            }

            // Xóa bản ghi ảnh trong cơ sở dữ liệu
            $stmt = $pdo->prepare("DELETE FROM " . $this->environment . " WHERE id = :id");
            $stmt->bindParam(':id', $id);   
            return $stmt->execute();
        }
        return false;
    }
}
?>
