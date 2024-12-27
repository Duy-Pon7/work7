<?php
$pageTitle = "Word Cloud Generator";
include 'partials/header.php';
?>
<div class="row">
    <div class="col-sm-2 bg-gray">
    </div>
    <div class="col-sm-8 bg-gray">
        <h1 class="text-center fw-bold mt-4">Word Cloud Generator</h1>
        <p class="text-center mb-4 border-bottom pb-4 border-dark">Trình tạo đám mây từ</p>
        <!-- Input Section -->
        <div class="mb-4">
            <textarea id="text-input" class="form-control" rows="6" placeholder="Nhập văn bản của bạn tại đây..." maxlength="4000"></textarea>
        </div>
        <!-- Checkbox chọn Key word = 2 -->
        <div class="mb-4 text-center">
            <label for="ngram-checkbox" class="form-label">
                <input type="checkbox" id="ngram-checkbox"> Key word = 2
            </label>
            <label for="remove-stopwords-checkbox" class="form-label">
                <input type="checkbox" id="remove-stopwords-checkbox"> Loại bỏ từ không có nghĩa
            </label>
        </div>

        <!-- Nút điều chỉnh số lượng từ -->
        <div class="mb-4 text-center">
            <label for="word-count" class="form-label">Chọn số lượng từ hiển thị trên Word Cloud:</label>
            <input type="number" id="word-count" class="form-control w-50 mx-auto text-center" value="10" min="1" max="50">
        </div>

        <!-- Generate Button -->
        <div class="text-center">
            <button id="generate-button" class="btn btn-primary">Tạo Word Cloud</button>
        </div>

        <!-- Word Cloud và Bảng -->
        <div class="row mt-5 mb-5">
            <!-- Word Cloud -->
            <div class="col-md-8">
                <h4 class="text-center">Word Cloud</h4>
                <div id="word-cloud-canvas" class="border p-4 bg-white" style="min-height: 300px;">
                    <p class="text-muted text-center">Word Cloud sẽ hiển thị tại đây...</p>
                </div>
            </div>

            <!-- Bảng Từ -->
            <div class="col-md-4">
                <h4 class="text-center">Danh sách từ</h4>
                <table id="word-table" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Từ</th>
                            <th>Số lượt</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-muted text-center" colspan="3">Bảng dữ liệu sẽ hiển thị tại đây...</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <h4 class="mt-3 p-2 text-center">Nếu bạn lần đầu đến với Học Tập IT</h4>
        <p class="text-center ms-5 me-5 mb-4 border-bottom pb-4 border-dark"> Một số hướng dẫn cho người mới bắt đầu và các câu hỏi thường gặp.</p>
        <div class="accordion mb-5" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        <strong>Đám Mây Từ</strong>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Đám mây từ (Word cloud generator) giúp tạo ra một hình ảnh trực quan, thể hiện tần suất xuất hiện của các từ trong một tập dữ liệu.
                        <br><br>
                        Đối tượng: Tất cả mọi người
                        <ul>
                            <li>Người muốn tìm hiểu về các kỹ năng chính (key skills) trong ngành nghề hoặc lĩnh vực mà mình đang theo đuổi.</li>
                        </ul>
                        Hướng dẫn:
                        <ul>
                            <li>Bước 1: Vào các trang tuyển dụng, tìm kiếm "ngành nghề, lĩnh vực" mà mình muốn tìm hiểu.</li>
                            <li>Bước 2: Vào phần "Yêu cầu ứng viên" sao chép nội dung của nhiều đơn tuyển dụng.</li>
                            <li>Bước 3: Dán vào word cloud generator để xem thử các từ khóa phổ biến và quan trọng.</li>
                            <li>Bước 4: Phân tích các từ xuất hiện nhiều trong word cloud để nhận diện các kỹ năng chính và xu hướng yêu cầu trong ngành.</li>
                            <li>Bước 5: Dựa trên kết quả phân tích, lập kế hoạch học hỏi và phát triển các kỹ năng cần thiết để đáp ứng yêu cầu công việc trong ngành nghề đó.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-2 bg-gray">
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wordcloud2.js/1.1.1/wordcloud2.min.js"></script>
<script>
    // Mảng các từ không có nghĩa (stop words)
    const stopWordsEnglish = [
        "a", "an", "the", "and", "or", "but", "so", "of", "on", "in", "at", "to",
        "with", "for", "from", "by", "is", "are", "was", "were", "be", "been",
        "has", "have", "had", "do", "does", "did", "not", "this", "that", "these", "those"
    ];

    const stopWordsVietnamese = [
        "và", "hoặc", "nhưng", "nên", "vì", "của", "trong", "tại", "đến", "với",
        "cho", "từ", "bởi", "là", "đã", "có", "không", "này", "kia", "đó", "ấy", "một",
        "cái", "các", "những", "chỉ", "công", "kinh", "việc", "triển", "về", "làm", "phát",
        "nghiệm", "dụng", "trình", "hệ", "ứng", "phần", "mềm", "lập", "thống", "hiểu",
        "tham", "gia", "để", "liệu", "viên", "biết", "sử", "vào", "yêu", "cầu", "bảo", "hợp",
        "hiện", "lý", "năng", "thành", "thiết", "kế", "khai", "theo", "dự", "án", "tích", "tối",
        "ưu", "thực", "nghệ", "dữ", "khác", "hiệu", "cơ", "kiến", "cụ", "quản", "mô", "hình",
        "duy", "trì", "ty", "hóa", "hỗ", "trợ", "vụ", "nhóm", " có", "và",
    ];

    // Lắng nghe sự kiện nhấn nút "Tạo Word Cloud"
    document.getElementById('generate-button').addEventListener('click', function() {
        // Lấy văn bản người dùng nhập vào
        const text = document.getElementById('text-input').value;

        if (!text.trim()) {
            alert('Vui lòng nhập văn bản!');
            return;
        }

        // Lấy số lượng từ người dùng muốn hiển thị trên Word Cloud
        const wordCount = parseInt(document.getElementById('word-count').value);

        // Kiểm tra trạng thái checkbox
        const isRemoveStopWordsChecked = document.getElementById('remove-stopwords-checkbox').checked;
        const isNgramChecked = document.getElementById('ngram-checkbox').checked;

        // Tách từ và áp dụng cơ chế N-gram nếu checkbox được tick
        const words = text.split(/\s+/);
        let wordFrequency = {};

        if (isNgramChecked) {
            // Tạo N-gram (n = 2)
            for (let i = 0; i < words.length - 1; i++) {
                const ngram = `${words[i].toLowerCase().replace(/[^a-zA-ZÀ-ỹ ]/g, '')} ${
                words[i + 1].toLowerCase().replace(/[^a-zA-ZÀ-ỹ ]/g, '')
            }`;
                if (ngram.trim()) {
                    wordFrequency[ngram] = (wordFrequency[ngram] || 0) + 1;
                }
            }
        } else {
            // Xử lý từng từ thông thường
            words.forEach(word => {
                word = word.toLowerCase().replace(/[^a-zA-ZÀ-ỹ ]/g, '');
                if (word) {
                    wordFrequency[word] = (wordFrequency[word] || 0) + 1;
                }
            });
        }

        // Loại bỏ từ không có nghĩa nếu checkbox được tick
        if (isRemoveStopWordsChecked) {
            const allStopWords = new Set([...stopWordsEnglish, ...stopWordsVietnamese]);
            wordFrequency = Object.fromEntries(
                Object.entries(wordFrequency).filter(([word]) => !allStopWords.has(word))
            );
        }

        // Sắp xếp các từ theo tần suất giảm dần
        const sortedWords = Object.entries(wordFrequency).sort((a, b) => b[1] - a[1]);

        // Lọc theo số lượng từ người dùng muốn hiển thị
        const selectedWords = sortedWords.slice(0, wordCount);

        // Gọi hàm vẽ lại Word Cloud và cập nhật bảng từ
        drawWordCloud(selectedWords);
    });

    // Hàm vẽ Word Cloud
    const drawWordCloud = (words) => {
        if (WordCloud.isSupported) {
            const wordCloudCanvas = document.getElementById('word-cloud-canvas');
            const options = {
                list: words,
                gridSize: 10,
                weightFactor: 8,
                fontFamily: "sans-serif",
                color: 'random-dark',
                rotateRatio: 0,
                shape: "circle",
                ellipticity: 0.6,
                shrinkToFit: true,
                minSize: 6,
                classes: 'word-cloud-item'
            };
            WordCloud(wordCloudCanvas, options);

            // Cập nhật bảng từ
            const tableBody = document.getElementById('word-table').querySelector('tbody');
            tableBody.innerHTML = ''; // Xóa bảng cũ

            words.forEach(([word, frequency], index) => {
                const row = document.createElement('tr');
                row.innerHTML = `
                <td>${index + 1}</td>
                <td>
                    <input type="checkbox" class="word-checkbox" data-word="${word}" checked>
                    ${word}
                </td>
                <td>${frequency}</td>
            `;
                tableBody.appendChild(row);
            });

            // Lắng nghe sự kiện thay đổi checkbox
            const checkboxes = document.querySelectorAll('.word-checkbox');
            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', handleCheckboxChange);
            });
        } else {
            console.log('WordCloud not supported');
        }
    };

    // Xử lý khi checkbox thay đổi
    const handleCheckboxChange = () => {
        const checkboxes = document.querySelectorAll('.word-checkbox');
        const selectedWords = Array.from(checkboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => {
                const word = checkbox.dataset.word;
                const frequency = parseInt(checkbox.closest('tr').querySelector('td:last-child').textContent);
                return [word, frequency];
            });

        // Vẽ lại Word Cloud với từ được chọn
        drawWordCloud(selectedWords);
    };
</script>


<?php include 'partials/footer.php'; ?>