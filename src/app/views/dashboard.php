<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý ảnh</title>
</head>
<body>

<h1>Chào mừng, <?php echo $_SESSION['user']; ?></h1>
<a href="index.php?action=logout">Đăng xuất</a>

<?php include 'image_list.php'; ?>

</body>
</html>
