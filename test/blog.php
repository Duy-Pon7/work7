<?php
include('db.php'); // Kết nối với cơ sở dữ liệu

// Lấy ID bài viết từ URL
$post_id = isset($_GET['id']) ? $_GET['id'] : 0;

if ($post_id > 0) {
    // Lấy thông tin bài viết từ bảng posts
    $sql = "SELECT * FROM posts WHERE post_id = $post_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $post = $result->fetch_assoc();
        echo "<h1>" . htmlspecialchars($post['title']) . "</h1>";
        echo "<p><strong>Author:</strong> " . htmlspecialchars($post['author']) . "</p>";
        echo "<p><strong>Created At:</strong> " . $post['created_at'] . "</p>";
        echo "<p><strong>Updated At:</strong> " . $post['updated_at'] . "</p>";

        // Lấy các phần nội dung của bài viết từ bảng post_sections
        $sql_sections = "SELECT * FROM post_sections WHERE post_id = $post_id ORDER BY id ASC";
        $sections_result = $conn->query($sql_sections);

        if ($sections_result->num_rows > 0) {
            while ($section = $sections_result->fetch_assoc()) {
                $type = $section['type'];
                $content = $section['content'];

                // Kiểm tra loại nội dung và hiển thị
                if ($type == 'heading') {
                    echo "<h2>" . htmlspecialchars($content) . "</h2>";
                } elseif ($type == 'paragraph') {
                    echo "<p>" . htmlspecialchars($content) . "</p>";
                } elseif ($type == 'image') {
                    echo "<img src='" . htmlspecialchars($content) . "' alt='Image' />";
                } elseif ($type == 'list') {
                    // Giả sử content là một chuỗi JSON
                    $list_items = json_decode($content);
                    echo "<ul>";
                    foreach ($list_items as $item) {
                        echo "<li>" . htmlspecialchars($item) . "</li>";
                    }
                    echo "</ul>";
                }
            }
        } else {
            echo "<p>No sections available for this post.</p>";
        }
    } else {
        echo "<p>Post not found.</p>";
    }
} else {
    echo "<p>Invalid post ID.</p>";
}

$conn->close();
?>
