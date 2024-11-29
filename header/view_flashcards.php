<?php
$servername = "localhost";  // Thay đổi với tên máy chủ của bạn
$username = "root";         // Thay đổi với tên người dùng MySQL của bạn
$password = "Duy46321@";             // Thay đổi với mật khẩu MySQL của bạn
$dbname = "FlashCardDB";    // Cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy Id_Page từ query string
$id_page = isset($_GET['id_page']) ? intval($_GET['id_page']) : 0;

// Truy vấn để lấy thông tin của Page
$sql = "SELECT * FROM Page WHERE Id_Page = $id_page";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị thông tin Page
    $row = $result->fetch_assoc();
    echo "<h1>" . $row['Title'] . "</h1>";
    echo "<p>" . $row['Description'] . "</p>";
    if ($row['Image']) {
        echo "<img src='" . $row['Image'] . "' alt='Image' width='300'>";
    }

    // Truy vấn FlashCards liên quan đến Page
    $sql_flashcards = "SELECT * FROM FlashCard WHERE Id_Page = $id_page";
    $flashcards_result = $conn->query($sql_flashcards);

    if ($flashcards_result->num_rows > 0) {
        echo "<h2>FlashCards</h2>";
        while ($flashcard = $flashcards_result->fetch_assoc()) {
            // Hiển thị FlashCard với hiệu ứng quay
            echo "<div class='flashcard'>";
            echo "<div class='card'>";
            echo "<div class='front'>";
            echo "<p>" . $flashcard['Question'] . "</p>";
            echo "</div>";
            echo "<div class='back'>";
            echo "<p>" . $flashcard['Answer'] . "</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<p>No flashcards available for this page.</p>";
    }
} else {
    echo "<p>Page not found.</p>";
}

// Đóng kết nối
$conn->close();
?>
