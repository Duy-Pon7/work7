<?php
require_once '../app/models/ImageModel.php';

class ImageController {
    private $imageModel;

    public function __construct() {
        $this->imageModel = new ImageModel();
    }

    // Thêm ảnh
    public function addImage() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
            $image = $_FILES['image'];
            $image_name = $image['name'];
            $image_tmp = $image['tmp_name'];
            $image_path = 'images/' . $image_name; // Đặt đường dẫn ảnh trong thư mục images

            // Di chuyển ảnh từ tệp tạm thời vào thư mục images
            move_uploaded_file($image_tmp, $image_path);

            // Lưu thông tin ảnh vào cơ sở dữ liệu
            $this->imageModel->addImage($image_name, $image_path);
            header("Location: image.php"); // Điều hướng về trang chính
        }
    }

    // Hiển thị tất cả ảnh
    public function displayImages() {
        $images = $this->imageModel->getAllImages();
        include '../app/views/image_list.php';
    }

    // Xóa ảnh
    public function deleteImage($id) {
        $this->imageModel->deleteImage($id);
        header("Location: image.php");
    }
}
?>
