function copyCode(button) {
    // Tìm phần tử <pre> chứa <code>
    const codeContainer = button.closest('.code-container').querySelector('pre code');
    // Lấy nội dung văn bản
    const code = codeContainer.textContent;
    // Sao chép mã vào clipboard
    navigator.clipboard.writeText(code).then(() => {
        button.textContent = "Copied!";
        setTimeout(() => button.textContent = "Copy", 2000);
    });
}
