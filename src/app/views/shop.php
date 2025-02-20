<?php
$pageTitle = "Shop work7";
include 'partials/header.php';
?>
<div class="row">
    <div class="col-sm-2 bg-gray">
        <div class="d-flex flex-column bg-white border border-secondary border-opacity-50 border-1 rounded-2 p-3 m-3">
            <span><strong>Máy tính & Laptop</strong></span>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" value="chuot-ban-phim" id="chuot-ban-phim" onclick="applyFilter()">
                <label class="form-check-label" for="chuot-ban-phim">Chuột & Bàn phím</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" value="tai-nghe" id="tai-nghe" onclick="applyFilter()">
                <label class="form-check-label" for="tai-nghe">Tai nghe</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" value="lot-chuot" id="lot-chuot" onclick="applyFilter()">
                <label class="form-check-label" for="lot-chuot">Lót chuột</label>
            </div>

            <span><strong>Decor</strong></span>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" value="ban-ghe" id="ban-ghe" onclick="applyFilter()">
                <label class="form-check-label" for="ban-ghe">Bàn & Ghế</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" value="decor" id="decor" onclick="applyFilter()">
                <label class="form-check-label" for="decor">Đồ trang trí</label>
            </div>

            <span><strong>Nhu cầu</strong></span>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="type" value="sinh-vien" id="sinh-vien" onclick="applyFilter()">
                <label class="form-check-label" for="sinh-vien">Đồ dùng sinh viên</label>
            </div>
            <span class="border-top"><strong>Cửa hàng</strong></span>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="shop" value="mall" id="mall" onclick="applyFilter()">
                <label class="form-check-label" for="mall">
                    <span class="badge text-bg-danger">Mall</span>
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="shop" value="shop-yeu-thich" id="shop-yeu-thich" onclick="applyFilter()">
                <label class="form-check-label" for="shop-yeu-thich">
                    <span class="badge text-bg-warning">Shop yêu thích</span>
                </label>
            </div>
            <span class="border-top"><strong>Giá</strong></span>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="price" value="0-150000" id="price1" onclick="applyFilter()">
                <label class="form-check-label" for="price1">
                    0đ-150,000đ
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="price" value="150000-300000" id="price2" onclick="applyFilter()">
                <label class="form-check-label" for="price2">
                    150,000đ-300,000đ
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="price" value="300000+" id="price3" onclick="applyFilter()">
                <label class="form-check-label" for="price3">
                    300,000đ trở lên
                </label>
            </div>

            <span class="border-top"><strong>Đánh giá từ W7</strong></span>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rating" value="5" id="star1" onclick="applyFilter()">
                <label class="form-check-label" for="star1">
                    ⭐️⭐️⭐️⭐️⭐️
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rating" value="4+" id="star2" onclick="applyFilter()">
                <label class="form-check-label" for="star2">
                    ⭐️⭐️⭐️⭐️ trở lên
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="rating" value="3+" id="star3" onclick="applyFilter()">
                <label class="form-check-label" for="star3">
                    ⭐️⭐️⭐️ trở lên
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="1" id="status1" onclick="applyFilter()">
                <label class="form-check-label" for="status1">
                    <span class="badge text-bg-success">W7 Đang sử dụng</span>
                </label>
            </div>
            <a class="btn btn-outline-warning mt-2" href="/shop">Xóa lọc</a>
        </div>
    </div>
    <div class="col-sm-9 bg-gray">
        <img class="rounded-3 mt-3 mb-3" src="/public/images/SHOPEE7.png" alt="Trang đầu tiên của PDF" width="100%" />
        <div id="product-container" class="d-flex justify-content-start flex-wrap">
        </div>
        <div class="d-flex justify-content-center mt-3" id="pagination">
            <!-- Phân trang sẽ được Ajax tải -->
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

<?php include 'partials/footer.php'; ?>