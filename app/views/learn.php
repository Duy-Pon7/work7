<?php include 'partials/header.php'; ?>
<!-- Main -->
<div class="row">
    <div class="col-sm-2 bg-gray">
    </div>
    <div class="col-sm-8 bg-gray">
        <h1 class="text-center fw-bold mt-4">Học Tập IT</h1>
        <!-- <p class="text-center mb-4">Theo dõi thị trường IT ở Việt Nam theo <b>thời gian thực</b>. Phân
                tích,
                trực quan hóa, đưa ra các insights.</p> -->
        <p class="text-center mb-4 border-bottom pb-4 border-dark"> Tài liệu, quá trình trong ngành công nghệ thông tin......
        </p>
        <h3>Đại học</h3>
        <div class="d-flex flex-wrap justify-content-center align-items-center bg-white border border-1 rounded-2 pt-3 pb-3">
            <?php foreach ($blogs as $blog): ?>
                <!-- Thay vì dùng form, chúng ta dùng thẻ <a> để chuyển hướng đến trang chi tiết blog -->
                <a class="btn btn-outline-primary m-1" href="learn.php?action=blog&id=<?php echo $blog['id']; ?>" style="width: 20rem;">
                    <?php echo $blog['title']; ?>
                </a>
            <?php endforeach; ?>
        </div>
        <h3>Góc nhìn</h3>
        <p>Tư duy, kinh nghiệm, mẹo và thủ thuật.</p>
        <div class="pt-3 pb-3 mb-3">
            <?php foreach ($blogs as $blog): ?>
                <!-- Thay vì dùng form, chúng ta dùng thẻ <a> để chuyển hướng đến trang chi tiết blog -->
                <a class="nav-link m-1 d-block border-bottom border-1" href="learn.php?action=blog&id=<?php echo $blog['id']; ?>">
                    <?php echo $blog['title']; ?>
                </a>
            <?php endforeach; ?>
        </div>
        
    </div>
    <div class="col-sm-2 bg-gray">
    </div>
</div>
<?php include 'partials/footer.php'; ?>