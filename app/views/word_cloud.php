<?php include 'partials/header.php'; ?>
<div class="row">
    <div class="col-sm-2 bg-gray">
    </div>
    <div class="col-sm-8 bg-gray">
        <h1 class="text-center fw-bold mt-4">Word Cloud Generator</h1>
        <p class="text-center mb-4 border-bottom pb-4 border-dark"> Mô tả</p>
        <!-- Input Section -->
        <div class="mb-4">
            <textarea id="text-input" class="form-control" rows="6" placeholder="Nhập văn bản của bạn tại đây..."></textarea>
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
        <div class="row mt-5">
            <!-- Word Cloud -->
            <div class="col-md-7">
                <h4 class="text-center">Word Cloud</h4>
                <div id="word-cloud-canvas" class="border p-4 bg-white" style="min-height: 300px;">
                    <p class="text-muted text-center">Word Cloud sẽ hiển thị tại đây...</p>
                </div>
            </div>

            <!-- Bảng Từ -->
            <div class="col-md-5">
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

    </div>
    <div class="col-sm-2 bg-gray">
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wordcloud2.js/1.1.1/wordcloud2.min.js"></script>
<script>
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

        // Tách từ và đếm tần suất
        const words = text.split(/\s+/);
        const wordFrequency = {};

        words.forEach(word => {
            word = word.toLowerCase().replace(/[^a-zA-ZÀ-ỹ ]/g, '');
            if (word) {
                wordFrequency[word] = (wordFrequency[word] || 0) + 1;
            }
        });

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
            const originalWords = words.map(x => ({
                word: x[0],
                count: x[1]
            }));

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
                    <td>${word}</td>
                    <td>${frequency}</td>
                `;
                tableBody.appendChild(row);
            });
        } else {
            console.log('WordCloud not supported');
        }
    };
    // Lắng nghe sự kiện vẽ lại Word Cloud
    //const redrawButton = document.getElementById('redrawButton');
    //redrawButton.addEventListener('click', function() {
    //    const text = document.getElementById('text-input').value;
    //    if (text.trim()) {
    //        const wordCount = parseInt(document.getElementById('word-count').value);
    //        const words = text.split(/\s+/);
    //        const wordFrequency = {};
    //        words.forEach(word => {
    //            word = word.toLowerCase().replace(/[^a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừửữựỳỵỷỹỲỴỶỸ ]/g, '');
    //            if (word) {
    //                wordFrequency[word] = (wordFrequency[word] || 0) + 1;
    //            }
    //        });

    //        const sortedWords = Object.entries(wordFrequency).sort((a, b) => b[1] - a[1]);
    //        const selectedWords = sortedWords.slice(0, wordCount);
    //        drawWordCloud(selectedWords);
    //    }
    //});
</script>


<?php include 'partials/footer.php'; ?>