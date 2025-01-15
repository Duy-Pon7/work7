<?php
$pageTitle = "Học tập IT";
include 'partials/header.php';
?>
<!-- Main -->
<div class="row">
    <div class="col-sm-2 bg-gray">
    </div>
    <div class="col-sm-8 bg-gray">
        <h1 class="text-center fw-bold mt-4">Học Tập IT</h1>
        <!-- <p class="text-center mb-4">Theo dõi thị trường IT ở Việt Nam theo <b>thời gian thực</b>. Phân
                tích,
                trực quan hóa, đưa ra các insights.</p> -->
        <p class="text-center mb-4 border-bottom pb-4 border-dark"> Lộ trình <strong>cơ bản</strong>, kiến thức <strong>giá trị</strong>, câu chuyện <strong>thú vị</strong> thông qua những môn học ngành IT.
        </p>
        <h3>Đại học</h3>
        <div class="d-flex flex-wrap justify-content-center align-items-center bg-white border border-secondary border-opacity-50 border-1 rounded-2 pt-3 pb-3">
            <?php foreach ($uni as $blog): ?>
                <!-- Sử dụng thẻ <a> để dẫn đến trang chi tiết blog -->
                <a
                    class="btn btn-outline-primary m-1 text-decoration-none text-center"
                    href="learn?action=blog&type=university&id=<?php echo htmlspecialchars($blog['id']); ?>"
                    style="width: 20rem;">
                    <?php echo htmlspecialchars($blog['id']) . '. ' . htmlspecialchars($blog['title']); ?>
                </a>
            <?php endforeach; ?>
        </div>
        <p class=""><i>Nếu bạn là người mới bắt đầu tìm hiểu về ngành IT. Nên theo dõi theo thứ tự các môn học.</i></p>



        <h3 class="mt-2">Tư duy</h3>
        <div class="pt-3 pb-3 mb-3">
            <?php foreach ($mind as $blog): ?>
                <!-- Thay vì dùng form, chúng ta dùng thẻ <a> để chuyển hướng đến trang chi tiết blog -->
                <a class="nav-link m-1 d-block border-bottom border-1" href="learn?action=blog&type=mindset&id=<?php echo htmlspecialchars($blog['id']); ?>">
                    <?php echo $blog['title']; ?>
                </a>
            <?php endforeach; ?>
        </div>
        <h4 class="mt-3 p-2 text-center">Nếu bạn lần đầu đến với Học Tập IT</h4>
        <p class="text-center ms-5 me-5 mb-4 border-bottom pb-4 border-dark"> Một số hướng dẫn cho người mới bắt đầu và các câu hỏi thường gặp.</p>
        <div class="accordion mb-5" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <strong>Học Tập IT</strong>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <i>"Thứ đáng sợ nhất là không biết bắt đầu từ đâu và bắt đầu như thế nào."</i><br><br>
                        Nơi chia sẻ mục tiêu <strong>cơ bản</strong>, kiến thức <strong>giá trị</strong>, câu chuyện <strong>thú vị</strong> thông qua những môn học ngành IT. Mang đến cho mọi người
                        cái nhìn tổng quan nhất về ngành.
                        <br><br>
                        Nội dung:
                        <ul>
                            <li>Mục tiêu học tập</li>
                            <li>Kiến thức, câu chuyện thú vị trong trong môn học.</li>
                        </ul>
                        Đối tượng:
                        <ul>
                            <li>Học sinh đang tìm hiểu hoặc đang có định hướng về ngành Công Nghệ Thông Tin.</li>
                            <li>Người đang có dự định chuyển sang ngành IT.</li>
                            <li>Sinh viên tìm hiểu về môn học sắp tới.</li>
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