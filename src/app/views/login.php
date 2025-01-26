<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>
<body>

<h2>Đăng nhập hệ thống</h2>

<?php if (isset($_SESSION['error'])): ?>
    <p style="color:red;"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
<?php endif; ?>

<form action="../../public/image.php?action=login" method="POST">
    <label>Tên đăng nhập:</label>
    <input type="text" name="username" required>
    <br>
    <label>Mật khẩu:</label>
    <input type="password" name="password" required>
    <br>
    
    <label>Chọn môi trường:</label>
    <input type="radio" name="environment" value="images_market" checked> images_market
    <input type="radio" name="environment" value="images_work7"> images_work7
    <br>
    
    <button type="submit">Đăng nhập</button>
</form>


</body>
</html>
