<?php
$pageTitle = "Học tập IT";
$today = date('Y-m-d'); // Lấy ngày hiện tại
$twoWeeksAgo = date('Y-m-d', strtotime('-14 days')); // Lấy ngày cách đây 14 ngày
include 'partials/header.php';
?>
<!-- Main -->
<div class="row">
    <div class="col-sm-2 bg-gray">
    </div>
    <div class="col-sm-8 bg-gray">
        <h1 class="text-center fw-bold mt-4">Học Tập IT</h1>
        <p class="text-center mb-4 border-bottom pb-4 border-dark"> 
            Lộ trình <strong>cơ bản</strong>, kiến thức <strong>giá trị</strong>, câu chuyện <strong>thú vị</strong> thông qua những môn học ngành IT.
        </p>
        <h3>Đại học</h3>
        <div class="d-flex flex-wrap justify-content-center align-items-center bg-white border border-secondary border-opacity-50 border-1 rounded-2 pt-3 pb-3">
            <?php foreach ($uni as $blog): ?>
                <!-- Sử dụng thẻ <a> để dẫn đến trang chi tiết blog -->
                <a 
                    class="btn btn-outline-primary m-1 text-decoration-none text-center position-relative"
                    href="learn?action=blog&type=university&id=<?php echo htmlspecialchars($blog['id']); ?>"
                    style="width: 20rem;">
                    <?php echo htmlspecialchars($blog['id']) . '. ' . htmlspecialchars($blog['title']); ?>
                    
                    <?php 
                    if (!empty($blog['update_date']) && $blog['update_date'] >= $twoWeeksAgo): 
                    ?>
                        <span class="badge text-bg-secondary">Mới</span>
                    <?php endif; ?>
                </a>
            <?php endforeach; ?>
        </div>
        <p><i>Nếu bạn là người mới bắt đầu tìm hiểu về ngành IT. Nên theo dõi theo thứ tự các môn học.</i></p>
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
                        Nơi chia sẻ mục tiêu <strong>cơ bản</strong>, kiến thức <strong>giá trị</strong>, câu chuyện <strong>thú vị</strong> thông qua những môn học ngành IT. 
                        Mang đến cho mọi người cái nhìn tổng quan nhất về ngành.
                        <br><br>
                        Nội dung:
                        <ul>
                            <li>Mục tiêu học tập</li>
                            <li>Kiến thức, câu chuyện thú vị trong môn học.</li>
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
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        <strong>Học tập IT (Work7) không hướng đến tutorial <del>(Tutorial hell)</del></strong>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        "Tutorial hell" là một thuật ngữ chỉ tình trạng mà người học gặp phải khi liên tục tham gia vào các khóa học, hướng dẫn, hoặc tutorial mà không thực sự áp dụng những gì đã học vào dự án thực tế. 
                        Người học có thể cảm thấy mình không tiến bộ vì luôn tìm kiếm thêm thông tin mà không có thời gian để thực hành hoặc làm việc trên các vấn đề thực tế. 
                        Điều này dẫn đến một vòng luẩn quẩn của việc học mà không áp dụng kiến thức, gây cảm giác trì trệ và thiếu động lực.
                        <br><br>
                        Tutorial rất quan trọng, nhưng lạm dụng nó sẽ mất đi khả năng <strong>giải quyết một vấn đề nào đó</strong>. 
                        Cách bắt đầu hiệu quả hơn là thực hành giải quyết các vấn đề nào bản thân thấy có giá trị. 
                        Từ đó, chỉnh sửa liên tục và học hỏi từ đó!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        <strong>Môn tiên quyết</strong>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Một số môn học sẽ có các môn tiên quyết. Nên hoàn thành môn trước để dễ dàng bắt đầu môn hiện tại.
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-sm-2 bg-gray">
    </div>
</div>
<?php include 'partials/footer.php'; ?>
