<?php
include 'config.php';

$sql = "SELECT * FROM posts";
$result = $conn->query($sql);
echo "<a href='create.php'>create</a>";
echo "<h2>Danh sách bài viết</h2>";
echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Author</th>
    <th>Actions</th>
</tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>" . $row["post_id"]. "</td>
        <td>" . $row["title"]. "</td>
        <td>" . $row["author"]. "</td>
        <td>
            <a href='edit.php?id=" . $row["post_id"] . "'>Edit</a> | 
            <a href='delete.php?id=" . $row["post_id"] . "'>Delete</a>
        </td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
