<?php
$pageTitle = "Shop work7";
include 'partials/header.php';
$selectedType = $_GET['type'] ?? '';
$type = $_GET['type'] ?? '';
$page = $_GET['page'] ?? 1;
?>
<div class="row">
    <div class="col-sm-2 bg-gray">
        <div class="d-flex flex-column bg-white border border-secondary border-opacity-50 border-1 rounded-2 p-3 m-3">
            <span><strong>Máy tính & Laptop</strong></span>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" value="chuot-ban-phim" onclick="applyFilter('chuot-ban-phim')">
                <label class="form-check-label">Chuột & Bàn phím</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" value="tai-nghe" onclick="applyFilter('tai-nghe')">
                <label class="form-check-label">Tai nghe</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" value="lot-chuot" onclick="applyFilter('lot-chuot')">
                <label class="form-check-label">Lót chuột</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" value="phu-kien" onclick="applyFilter('phu-kien')">
                <label class="form-check-label">Phụ kiện</label>
            </div> <span><strong>Decor</strong></span>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio5">
                <label class="form-check-label" for="radio5">
                    Bàn & Ghế
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio6">
                <label class="form-check-label" for="radio6">
                    Đồ trang trí
                </label>
            </div>

            <span><strong>Nhu cầu</strong></span>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio7">
                <label class="form-check-label" for="radio7">
                    Đồ dùng sinh viên
                </label>
            </div>

            <span class="border-top"><strong>Cửa hàng</strong></span>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="check1">
                <label class="form-check-label" for="check1">
                    <span class="badge text-bg-danger">Mall</span>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="check2">
                <label class="form-check-label" for="check2">
                    <span class="badge text-bg-warning">Shop yêu thích</span>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="check3">
                <label class="form-check-label" for="check3">
                    <span class="badge text-bg-success">W7 Đang sử dụng</span>
                </label>
            </div>

            <span class="border-top"><strong>Giá</strong></span>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="RadioPrice" id="price1">
                <label class="form-check-label" for="price1">
                    0đ-150,000đ
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="RadioPrice" id="price2">
                <label class="form-check-label" for="price2">
                    150,000đ-300,000đ
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="RadioPrice" id="price3">
                <label class="form-check-label" for="price3">
                    300,000đ trở lên
                </label>
            </div>

            <span class="border-top"><strong>Đánh giá từ W7</strong></span>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="RadioStar" id="star1">
                <label class="form-check-label" for="star1">
                    ⭐️⭐️⭐️⭐️⭐️
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="RadioStar" id="star2">
                <label class="form-check-label" for="star2">
                    ⭐️⭐️⭐️⭐️ trở lên
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="RadioStar" id="star3">
                <label class="form-check-label" for="star3">
                    ⭐️⭐️⭐️ trở lên
                </label>
            </div>

        </div>
    </div>
    <div class="col-sm-9 bg-gray">
        <img class="rounded-3 mt-3 mb-3" src="/public/images/SHOPEE7.png" alt="Trang đầu tiên của PDF" width="100%" />
        <div id="product-container" class="d-flex justify-content-star flex-wrap">
            <?php
            foreach ($shop as $product) {
            ?>
                <a class="shadow-sm" href="<?php echo htmlspecialchars($product['link_shopee']); ?>" style="text-decoration: none; color: inherit;" data-bs-html="true" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="<?php echo htmlspecialchars($product['description']); ?>">
                    <div class="card m-2" style="width: 11.5rem; transition: 0.3s;">
                        <img src="https://i.imgur.com/nKAyvqX.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="d-flex justify-content-start">
                                <?php if ($product['shop'] === 'Mall'): ?>
                                    <span class="badge text-bg-danger">Mall</span>
                                <?php endif; ?>
                                <span class="text-truncate" style="max-width: 150px;">
                                    <?php echo htmlspecialchars($product['name']); ?>
                                </span>
                            </div>
                            <p>₫<?php echo number_format($product['price'], 0, ',', '.'); ?></p>
                            <?php if ($product['status'] === 1): ?>
                                <span class="badge text-bg-success">Đang sử dụng</span>
                            <?php else: ?>
                                <span class="badge text-bg-success" style="visibility: hidden;">Ẩn</span>
                            <?php endif; ?>
                            <span class="position-absolute top-0 start-95 translate-middle badge rounded-pill bg-light text-dark">
                                <?php echo htmlspecialchars($product['rating']); ?>⭐️
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </div>
                    </div>
                </a>
            <?php
            }
            ?>
        </div>
        <div class="d-flex justify-content-center">
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <!-- Nút Previous -->
                    <li class="page-item <?php echo ($page <= 1) ? 'disabled' : ''; ?>">
                        <a class="page-link"
                            href="?page=<?php echo $page - 1; ?><?php echo $type ? '&type=' . urlencode($type) : ''; ?>"
                            aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>

                    <!-- Hiển thị các trang -->
                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                        <li class="page-item <?php echo ($page == $i) ? 'active' : ''; ?>">
                            <a class="page-link"
                                href="?page=<?php echo $i; ?><?php echo $type ? '&type=' . urlencode($type) : ''; ?>">
                                <?php echo $i; ?>
                            </a>
                        </li>
                    <?php endfor; ?>

                    <!-- Nút Next -->
                    <li class="page-item <?php echo ($page >= $totalPages) ? 'disabled' : ''; ?>">
                        <a class="page-link"
                            href="?page=<?php echo $page + 1; ?><?php echo $type ? '&type=' . urlencode($type) : ''; ?>"
                            aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="col-sm-1 bg-gray"></div>
</div>
<style>
    .card:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        /* Tăng bóng khi hover */
        transform: translateY(-1px);
        /* Card trôi nhẹ lên trên */
    }
</style>
<script src="/public/js/shop.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php include 'partials/footer.php'; ?>