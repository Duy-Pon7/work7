<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách bài viết</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Bootstrap -->
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Danh sách bài viết</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tiêu đề gốc</th>
                    <th>Tiêu đề</th>
                    <th>Tác giả</th>
                    <th>Ngày tạo</th>
                    <th>Ngày cập nhật</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($posts)): ?>
                    <?php foreach ($posts as $post): ?>
                        <tr>
                            <td><?= htmlspecialchars($post['post_id']) ?></td>
                            <td><?= htmlspecialchars($post['title_source']) ?></td>
                            <td><?= htmlspecialchars($post['title']) ?></td>
                            <td><?= htmlspecialchars($post['author']) ?></td>
                            <td><?= htmlspecialchars($post['created_at']) ?></td>
                            <td><?= htmlspecialchars($post['updated_at']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Không có bài viết nào</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table
