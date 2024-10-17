<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3106">
    <div class="container">
        <!-- Logo và Tên Cửa Hàng -->
        <div class="store-info">
            <div class="logo">
                <img src="image.png" alt="Digital Store Logo">
            </div>
            <div class="store-name">
                <h2>Digital <span>Store</span></h2>
                <p>For PrestaShop</p>
            </div>
        </div>

        <!-- Phần Tính Năng -->
        <div class="features">
            <div class="feature-item">
                <div class="icon"> <i class="fa-solid fa-tags"></i>
                </div>
                <p>100% Brand New Guarantee</p>
            </div>
            <div class="feature-item">
                <div class="icon"><i class="fa-solid fa-wrench"></i></div>
                <p>Excellent Warranty Services</p>
            </div>
            <div class="feature-item">
                <div class="icon"><i class="fa-solid fa-truck"></i></div>
                <p>Free Shipping within 50km</p>
            </div>
            <div class="feature-item highlight">
                <div class="icon"></div>
                <p>Call Us Now: 0123-456-789</p>
            </div>
        </div>
    </div>
</div>