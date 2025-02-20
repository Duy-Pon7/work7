<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset($pageTitle) ? $pageTitle : "Work7"; ?></title>
    <link href="/public/css/custom.css" rel="stylesheet">
    <link href="/public/css/prism.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/public/images/favicon.png">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T8WEM17VV4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-T8WEM17VV4');
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-black">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="/">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="29.5" y="0.5" width="29" height="29" rx="2.5" transform="rotate(90 29.5 0.5)" fill="white" />
                    <rect x="29.5" y="0.5" width="29" height="29" rx="2.5" transform="rotate(90 29.5 0.5)" stroke="white" />
                    <path d="M5.97193 23C5.73193 23 5.55593 22.944 5.44393 22.832C5.33193 22.72 5.24393 22.576 5.17993 22.4L1.72393 11.288C1.69193 11.208 1.67593 11.128 1.67593 11.048C1.67593 10.904 1.73193 10.784 1.84393 10.688C1.95593 10.576 2.08393 10.52 2.22793 10.52H4.69993C4.90793 10.52 5.06793 10.576 5.17993 10.688C5.30793 10.8 5.38793 10.912 5.41993 11.024L7.43593 17.888L9.59593 11.048C9.62793 10.936 9.69993 10.824 9.81193 10.712C9.93993 10.584 10.1159 10.52 10.3399 10.52H11.9239C12.1479 10.52 12.3159 10.584 12.4279 10.712C12.5559 10.824 12.6359 10.936 12.6679 11.048L14.8279 17.888L16.8439 11.024C16.8759 10.912 16.9479 10.8 17.0599 10.688C17.1879 10.576 17.3559 10.52 17.5639 10.52H20.0359C20.1799 10.52 20.2999 10.576 20.3959 10.688C20.5079 10.784 20.5639 10.904 20.5639 11.048C20.5639 11.128 20.5559 11.208 20.5399 11.288L17.0839 22.4C17.0359 22.576 16.9479 22.72 16.8199 22.832C16.7079 22.944 16.5319 23 16.2919 23H14.1319C13.9079 23 13.7319 22.944 13.6039 22.832C13.4759 22.72 13.3879 22.576 13.3399 22.4L11.1319 15.824L8.92393 22.4C8.87593 22.576 8.78793 22.72 8.65993 22.832C8.53193 22.944 8.35593 23 8.13193 23H5.97193ZM23.0888 23C23.0078 23 22.9403 22.973 22.8863 22.919C22.8323 22.856 22.8053 22.784 22.8053 22.703C22.8053 22.667 22.8143 22.6265 22.8323 22.5815L25.9508 15.5885H21.9008C21.8108 15.5885 21.7298 15.557 21.6578 15.494C21.5948 15.422 21.5633 15.3365 21.5633 15.2375V13.8875C21.5633 13.7885 21.5948 13.7075 21.6578 13.6445C21.7298 13.5815 21.8108 13.55 21.9008 13.55H28.2188C28.3268 13.55 28.4123 13.5815 28.4753 13.6445C28.5383 13.7075 28.5698 13.7885 28.5698 13.8875V15.089C28.5698 15.224 28.5563 15.3365 28.5293 15.4265C28.5023 15.5165 28.4663 15.6065 28.4213 15.6965L25.3028 22.676C25.2758 22.73 25.2263 22.7975 25.1543 22.8785C25.0823 22.9595 24.9743 23 24.8303 23H23.0888Z" fill="black" />
                </svg>

            </a>
            <!-- <a class="navbar-brand text-light" href="#">Techno</a> -->
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-gray" href="/learn">Học Tập IT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-gray" href="/market">Thị Trường IT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-gray" href="/word_cloud">Word Cloud Generator</a>
                    </li>
                </ul>
                <a class="text-gray btn btn-outline-warning me-1" href="https://discord.gg/YjQhS7pk" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-discord" viewBox="0 0 16 16">
                        <path d="M13.545 2.907a13.2 13.2 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.2 12.2 0 0 0-3.658 0 8 8 0 0 0-.412-.833.05.05 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.04.04 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032q.003.022.021.037a13.3 13.3 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019q.463-.63.818-1.329a.05.05 0 0 0-.01-.059l-.018-.011a9 9 0 0 1-1.248-.595.05.05 0 0 1-.02-.066l.015-.019q.127-.095.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.05.05 0 0 1 .053.007q.121.1.248.195a.05.05 0 0 1-.004.085 8 8 0 0 1-1.249.594.05.05 0 0 0-.03.03.05.05 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.2 13.2 0 0 0 4.001-2.02.05.05 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.03.03 0 0 0-.02-.019m-8.198 7.307c-.789 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612" />
                    </svg> Study
                </a>
                <a class="text-gray btn btn-outline-warning me-1" href="/shop"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                    </svg> Shopee7</a>
            </div>
        </div>
    </nav>