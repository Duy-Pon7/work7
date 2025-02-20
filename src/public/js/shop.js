// Function to apply filters and reload products
function applyFilter(page = 1) {
    const type = document.querySelector('input[name="type"]:checked')?.value || '';
    const shop = document.querySelector('input[name="shop"]:checked')?.value || '';
    const price = document.querySelector('input[name="price"]:checked')?.value || '';
    const rating = document.querySelector('input[name="rating"]:checked')?.value || '';
    const status = document.querySelector('input[name="status"]:checked')?.value || '';

    let newUrl = `/shop?page=${page}`;
    if (type) newUrl += `&type=${encodeURIComponent(type)}`;
    if (shop) newUrl += `&shop=${encodeURIComponent(shop)}`;
    if (price) newUrl += `&price=${encodeURIComponent(price)}`;
    if (rating) newUrl += `&rating=${encodeURIComponent(rating)}`;
    if (status) newUrl += `&status=${encodeURIComponent(status)}`;

    history.pushState({ type, shop, price, rating, status, page }, '', newUrl);

    let url = `/shop?action=getProductsAjax&page=${page}`;
    if (type) url += `&type=${encodeURIComponent(type)}`;
    if (shop) url += `&shop=${encodeURIComponent(shop)}`;
    if (price) url += `&price=${encodeURIComponent(price)}`;
    if (rating) url += `&rating=${encodeURIComponent(rating)}`;
    if (status) url += `&status=${encodeURIComponent(status)}`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById('product-container');
            container.innerHTML = data.products.length > 0 ? 
                data.products.map(product => `
                    <a class="shadow-sm" href="${product.link_shopee}" target="_blank" style="text-decoration: none; color: inherit;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="${product.description}">
                        <div class="card m-2" style="width: 11.5rem;">
                            <img src="${product.link}" class="card-img-top" alt="${product.name}">
                            <div class="card-body">
                                <div class="d-flex justify-content-start">
                                    ${product.shop === 'mall' ? '<span class="badge text-bg-danger">Mall</span>' : ''}
                                    <span class="text-truncate small" style="max-width: 150px;">${product.name}</span>
                                </div>
                                <p>₫${new Intl.NumberFormat('vi-VN').format(product.price)}</p>
                                ${product.status === 1 ? '<span class="badge text-bg-success">Đang sử dụng</span>' : '<span class="badge text-bg-success" style="visibility: hidden;">Ẩn</span>'}
                                <span class="position-absolute top-0 start-95 translate-middle badge rounded-pill bg-light text-dark">
                                    ${product.rating}⭐️
                                </span>
                            </div>
                        </div>
                    </a>
                `).join('') : '<p>Bộ lọc sản phẩm này vẫn chưa có, nhưng đừng lo, chúng tôi đang nỗ lực để mang đến trải nghiệm tuyệt vời hơn cho bạn! Cảm ơn bạn đã dùng Work7 ❤️</p>';

            // Initialize Bootstrap tooltips
            const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });

            // Render pagination
            const pagination = document.getElementById('pagination');
            pagination.innerHTML = createPagination(type, shop, price, rating, status, data.totalPages, page);
        })
        .catch(error => console.error('Error loading products:', error));
}

// Handle browser navigation (back/forward)
window.addEventListener('popstate', function (event) {
    if (event.state) {
        const { type, shop, price, rating, status, page } = event.state;
        document.querySelector(`input[name="type"][value="${type}"]`)?.click();
        document.querySelector(`input[name="shop"][value="${shop}"]`)?.click();
        document.querySelector(`input[name="price"][value="${price}"]`)?.click();
        document.querySelector(`input[name="rating"][value="${rating}"]`)?.click();
        document.querySelector(`input[name="status"][value="${status}"]`)?.click();
        applyFilter(page);
    }
});

// Initialize page filters from URL on page load
function initializePage() {
    const urlParams = new URLSearchParams(window.location.search);
    const type = urlParams.get('type') || '';
    const shop = urlParams.get('shop') || '';
    const price = urlParams.get('price') || '';
    const rating = urlParams.get('rating') || '';
    const status = urlParams.get('status') || '';
    const page = parseInt(urlParams.get('page')) || 1;

    document.querySelector(`input[name="type"][value="${type}"]`)?.click();
    document.querySelector(`input[name="shop"][value="${shop}"]`)?.click();
    document.querySelector(`input[name="price"][value="${price}"]`)?.click();
    document.querySelector(`input[name="rating"][value="${rating}"]`)?.click();
    document.querySelector(`input[name="status"][value="${status}"]`)?.click();

    applyFilter(page);
}

// Pagination Rendering Function
function createPagination(type, shop, price, rating, status, totalPages, currentPage) {
    let paginationHtml = '<nav aria-label="Page navigation example"><ul class="pagination">';

    // Previous button
    if (currentPage > 1) {
        paginationHtml += `
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous" onclick="applyFilter(${currentPage - 1})">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        `;
    } else {
        paginationHtml += `
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
        `;
    }

    // Page numbers
    for (let i = 1; i <= totalPages; i++) {
        paginationHtml += `
            <li class="page-item ${i === currentPage ? 'active' : ''}">
                <a class="page-link" href="#" onclick="applyFilter(${i})">${i}</a>
            </li>
        `;
    }

    // Next button
    if (currentPage < totalPages) {
        paginationHtml += `
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next" onclick="applyFilter(${currentPage + 1})">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        `;
    } else {
        paginationHtml += `
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        `;
    }

    paginationHtml += '</ul></nav>';
    return paginationHtml;
}

window.addEventListener('load', initializePage);