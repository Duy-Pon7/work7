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
        <img class="rounded-3" src="/public/images/ikigai.jpg" alt="Trang đầu tiên của PDF" width="100%" />
        <h3>Ngôn ngữ lập trình</h3>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cấp bậc
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" onclick="changeImage('page_5')">page_5</a></li>
                <li><a class="dropdown-item" onclick="changeImage('page_6')">page_6</a></li>
                <li><a class="dropdown-item" onclick="changeImage('page_7')">page_7</a></li>
            </ul>
        </div>

        <img id="pageImage" class="rounded-3" src="/public/images/page_5.png" alt="Trang đầu tiên của PDF" width="100%" />

        <h3>Kỹ năng</h3>
        <img class="rounded-3" src="/public/images/page_5.png" alt="Trang đầu tiên của PDF" width="100%" />
        <h3>Vị trí</h3>
        <img class="rounded-3" src="/public/images/page_6.png" alt="Trang đầu tiên của PDF" width="100%" />
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
<script>
    function changeImage(page) {
    // Cập nhật lại nguồn ảnh tùy theo trang
    document.getElementById('pageImage').src = `/public/images/${page}.png`;
}
</script>
<?php include 'partials/footer.php'; ?>