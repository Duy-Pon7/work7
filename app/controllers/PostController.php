<?php
require_once 'PostModel.php';

class PostController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    // Hàm lấy bài viết và trả về View
    public function showPosts() {
        $posts = $this->model->getAllPosts();
        include 'PostView.php'; // Truyền dữ liệu sang View
    }
}
?>
