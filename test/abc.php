// update_post.php

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog_database";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $post_id = $_POST['post_id'];
    $title_source = $_POST['title_source'];
    $title = $_POST['title'];
    $author = $_POST['author'];

    $sql = "UPDATE posts SET title_source='$title_source', title='$title', author='$author' WHERE post_id=$post_id";

    if ($conn->query($sql) === TRUE) {
        echo "Post updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<form method="POST" action="update_post.php">
    Post ID: <input type="text" name="post_id"><br>
    Title Source: <input type="text" name="title_source"><br>
    Title: <input type="text" name="title"><br>
    Author: <input type="text" name="author"><br>
    <input type="submit" value="Update Post">
</form>
