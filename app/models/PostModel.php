<?php
class PostModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    // Hàm lấy tất cả bài viết
    public function getAllPosts() {
        $sql = "SELECT post_id, title_source, title, created_at, updated_at, author FROM posts";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC); // Trả về dạng mảng kết hợp
        } else {
            return [];
        }
    }
}
?>
