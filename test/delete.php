<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Xóa bài viết
    $sql = "DELETE FROM posts WHERE post_id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "ID không hợp lệ.";
}
?>
