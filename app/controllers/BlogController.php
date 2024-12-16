<?php
require_once '../app/models/BlogModel.php';

class BlogController {

    // Hiển thị trang chủ với danh sách các blog
    public function showHomePage() {
        $model = new BlogModel();
        $blogs = $model->getAllBlogs();
        include '../app/views/learn.php';  // Hiển thị trang chủ
    }

    // Hiển thị blog chi tiết theo id
    public function showBlog($id) {
        $model = new BlogModel();
        $blog = $model->getBlogById($id);
        include '../app/views/blog.php';  // Hiển thị blog chi tiết
    }
}
?>
