<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Lấy thông tin bài viết từ cơ sở dữ liệu
    $sql = "SELECT * FROM posts WHERE post_id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['title'];
        $author = $_POST['author'];

        // Cập nhật bài viết
        $update_sql = "UPDATE posts SET title = '$title', author = '$author' WHERE post_id = $id";

        if ($conn->query($update_sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error: " . $update_sql . "<br>" . $conn->error;
        }
    }
?>

<h2>Sửa bài viết</h2>
<form method="POST" action="edit.php?id=<?php echo $id; ?>">
    Title: <input type="text" name="title" value="<?php echo $row['title']; ?>" required><br>
    Author: <input type="text" name="author" value="<?php echo $row['author']; ?>" required><br>
    <input type="submit" value="Cập nhật">
</form>

<?php
} else {
    echo "Không tìm thấy bài viết.";
}

$conn->close();
?>
