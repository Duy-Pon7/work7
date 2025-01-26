<?php
$pageTitle = "Change image";
include 'partials/header.php';
?>

<h1>Quản lý ảnh <?php echo $_SESSION['environment'] ?></h1>

<!-- Form thêm ảnh -->
<form action="image.php?action=addImage" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <button type="submit">Thêm ảnh</button>
</form>

<!-- Hiển thị ảnh -->
<h2>Danh sách ảnh</h2>
<div class="container mt-4">
    <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
        <table class="table table-bordered table-hover">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Tên ảnh</th>
                    <th>Ảnh</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($images as $image): ?>
                <tr>
                    <td><?php echo $image['id']; ?></td>
                    <td><?php echo $image['image_path']; ?></td>
                    <td><img src="<?php echo $image['image_path']; ?>" width="100" class="img-thumbnail"></td>
                    <td>
                        <a href="image.php?action=deleteImage&id=<?php echo $image['id']; ?>" class="btn btn-danger btn-sm">Xóa</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<?php include 'partials/footer.php'; ?>
