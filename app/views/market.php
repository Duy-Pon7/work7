<?php
$pageTitle = "Thị trường IT";
include 'partials/header.php';
?>
<!-- Main -->
<div class="row">
    <div class="col-sm-2 bg-gray">
    </div>
    <div class="col-sm-8 bg-gray">
        <h1 class="text-center fw-bold mt-4">Thị Trường IT</h1>
        <!-- <p class="text-center mb-4">Theo dõi thị trường IT ở Việt Nam theo <b>thời gian thực</b>. Phân
                tích,
                trực quan hóa, đưa ra các insights.</p> -->
        <p class="text-center mb-4 border-bottom pb-4 border-dark">Ngôn ngữ lập trình, kỹ năng, cấp bậc, vị trí,... theo <strong>thời gian thực</strong>.</p>
        <h3>Ngôn ngữ lập trình</h3>
        <div class="d-flex flex-wrap justify-content-center align-items-center bg-white border border-3 rounded-3 pt-3 pb-3 m-3">
            <?php foreach ($lang as $blog): ?>
                <!-- Thay vì dùng form, chúng ta dùng thẻ <a> để chuyển hướng đến trang chi tiết blog -->
                <a
                    class="btn btn-outline-primary m-1 text-decoration-none text-center"
                    href="learn.php?action=blog&type=language_market&id=<?php echo htmlspecialchars($blog['id']); ?>"
                    style="width: 20rem;">
                    <?php echo htmlspecialchars($blog['title']); ?>
                </a>
            <?php endforeach; ?>
        </div>
        <h3>Vị trí</h3>
        <div class="d-flex flex-wrap justify-content-center align-items-center bg-white border border-3 rounded-3 pt-3 pb-3 m-3">
            <?php foreach ($poi as $blog): ?>
                <!-- Thay vì dùng form, chúng ta dùng thẻ <a> để chuyển hướng đến trang chi tiết blog -->
                <a
                    class="btn btn-outline-primary m-1 text-decoration-none text-center"
                    href="learn.php?action=blog&type=position_market&id=<?php echo htmlspecialchars($blog['id']); ?>"
                    style="width: 20rem;">
                    <?php echo htmlspecialchars($blog['title']); ?>
                </a>
            <?php endforeach; ?>
        </div>
        <h4 class="mt-3 p-2 text-center">Nếu bạn lần đầu đến với Thị Trường IT</h4>
        <p class="text-center ms-5 me-5 mb-4 border-bottom pb-4 border-dark"> Một số hướng dẫn cho người mới bắt đầu và các câu hỏi thường gặp.</p>
        <div class="accordion mb-5" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        <strong>Thị Trường IT</strong>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Sử dụng <strong>web scraping</strong> để cung cấp báo cáo và nhận định, giúp mọi người đưa ra những quyết định chính
                        xác hơn.
                        <br><br>
                        Đối tượng:
                        <ul>
                            <li>Người muốn tìm hiểu về thị trường ngành IT hiện tại.</li>
                            <li>Học sinh đang lựa chọn ngành học, sinh viên chọn chuyên ngành và định hướng phát triển trong
                                ngành IT.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-sm-2 bg-gray">
    </div>
</div>
<?php include 'partials/footer.php'; ?>