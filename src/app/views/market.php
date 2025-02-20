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
        <img class="rounded-3 mb-4" src="/public/images/ikigaiww7.png" alt="Trang đầu tiên của PDF" width="100%" />
        <h3>Ngôn ngữ lập trình</h3>
        <div class="d-flex justify-content-end">

            <div class="form-group ">
                <select class="form-select" id="levelSelect1" aria-label="Cấp bậc" onchange="changeImage(this.value, 'pageImage1')">
                    <option value="page_1">All</option>
                    <option value="page_2">Fresher</option>
                    <option value="page_3">Junior</option>
                    <option value="page_4">Senior</option>
                    <option value="page_5">Manager</option>
                </select>
            </div>

        </div>


        <img id="pageImage1" class="rounded-3" src="/public/images/page_1.png" alt="Trang đầu tiên của PDF" width="100%" />

        <h3>Kỹ năng</h3>
        <div class="d-flex justify-content-end">

            <div class="form-group">
                <select class="form-select" id="levelSelect2" aria-label="Cấp bậc" onchange="changeImage(this.value, 'pageImage2')">
                    <option value="page_6">All</option>
                    <option value="page_7">Fresher</option>
                    <option value="page_8">Junior</option>
                    <option value="page_9">Senior</option>
                    <option value="page_10">Manager</option>
                </select>
            </div>
        </div>
        <img id="pageImage2" class="rounded-3" src="/public/images/page_6.png" alt="Trang đầu tiên của PDF" width="100%" />
        <h3>Nơi làm việc</h3>
        <div class="d-flex justify-content-end">

            <div class="form-group">
                <select class="form-select" id="levelSelect3" aria-label="Cấp bậc" onchange="changeImage(this.value, 'pageImage3')">
                    <option value="page_11">At office</option>
                    <option value="page_12">Hybrid</option>
                    <option value="page_13">Remote</option>
                </select>
            </div>
        </div>
        <img id="pageImage3" class="rounded-3" src="/public/images/page_11.png" alt="Trang đầu tiên của PDF" width="100%" />

        <h3>Vị trí</h3>
        <img class="rounded-3" src="/public/images/page_14.png" alt="Trang đầu tiên của PDF" width="100%" />
        <div class="d-flex justify-content-end mt-3">
        <a class="btn btn-success" href="https://drive.google.com/drive/folders/1B0DWp7IHRQv9iCzmkCcY7gxMviTxD5f6?usp=drive_link" target="_blank">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy-fill" viewBox="0 0 16 16">
        <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0H3v5.5A1.5 1.5 0 0 0 4.5 7h7A1.5 1.5 0 0 0 13 5.5V0h.086a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5H14v-5.5A1.5 1.5 0 0 0 12.5 9h-9A1.5 1.5 0 0 0 2 10.5V16h-.5A1.5 1.5 0 0 1 0 14.5z"></path>
        <path d="M3 16h10v-5.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5zm9-16H4v5.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5zM9 1h2v4H9z"></path>
    </svg>
    Pdf thị trường IT thời gian trước
</a>
    </div>
        <h3>Các bài phân tích </h3>
        <div class="pt-3 pb-3 mb-3">
            <?php foreach ($mar as $blog): ?>
                <!-- Thay vì dùng form, chúng ta dùng thẻ <a> để chuyển hướng đến trang chi tiết blog -->
                <a class="nav-link m-1 d-block border-bottom border-1" href="market?action=blog&type=market&id=<?php echo htmlspecialchars($blog['id']); ?>">
                    <?php echo $blog['title']; ?>
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
                        <i>Dữ liệu sẽ được cập nhật hàng tuần.</i>
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
function changeImage(page, imageId) {
    // Lấy phần tử hình ảnh bằng ID được truyền vào
    const imgElement = document.getElementById(imageId);

    if (imgElement) {
        // Cập nhật nguồn ảnh
        imgElement.src = `/public/images/${page}.png`;
    } else {
        console.error(`Không tìm thấy phần tử có ID "${imageId}"`);
    }
}

</script>
<?php include 'partials/footer.php'; ?>