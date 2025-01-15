<?php
require_once '../app/models/BlogModel.php';

class BlogController {

    // Hiển thị trang chủ với danh sách các blog
    public function showHomeLearn() {
        $model = new BlogModel();
        $uni = $model->getAllUni();
        $mind = $model->getAllMind();
        include '../app/views/learn.php';  // Hiển thị trang chủ
    }
    public function showHomeMarket() {
        $model = new BlogModel();
        $mar = $model->getAllMar();
        include '../app/views/market.php';  // Hiển thị trang chủ
    }
    public function showHomeJob() {
        $model = new BlogModel();
        $job = $model->getAlljob();
        include '../app/views/market.php';  // Hiển thị trang chủ
    }

    // Hiển thị blog chi tiết theo id
    public function showBlog($id, $type) {
        $model = new BlogModel();
        $blog = $model->getBlogById($id, $type);
        include '../app/views/blog.php';  // Hiển thị blog chi tiết
    }
}
?>
