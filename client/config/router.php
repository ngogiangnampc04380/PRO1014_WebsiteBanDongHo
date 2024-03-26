<?php

$slug = $_GET['slug'] ?? '';

if (!empty($slug)) {
    switch ($slug) {
        case 'home':
            include 'home/index.php';
            break;
        case 'login':
            include 'login/index.php';
            break;
        case 'register':
            include 'register/index.php';
            break;
        case 'product':
            include 'product/index.php';
            break;
        case 'contact':
            include 'contact/index.php';
            break;
        case 'checkout':
            include 'checkout/index.php';
            break;
        case 'cart':
            include 'cart/index.php';
            break;
        case 'blog':
            include 'blog/index.php';
            break;
        case 'about':
            include 'about/index.php';
            break;
        default:
            # code...
            break;
    }
} else {
    include 'home/index.php';
}
