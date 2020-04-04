<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../multiversum/views/js/global.js"></script>
    <script src="../multiversum/views/js/products.js"></script>
    <link rel="stylesheet" type="text/css" href="views/css/global.css">
    <link rel="stylesheet" type="text/css" href="views/css/home.css">
    <link rel="stylesheet" type="text/css" href="views/css/contact.css">
    <link rel="stylesheet" type="text/css" href="views/css/admin.css">
    <link rel="stylesheet" type="text/css" href="views/css/invalidLink.css">
    <link rel="stylesheet" type="text/css" href="views/css/productDetails.css">
    <link rel="stylesheet" type="text/css" href="views/css/nieuwProduct.css">
    <link rel="stylesheet" type="text/css" href="views/css/deleteProduct.css">
    <link rel="stylesheet" type="text/css" href="views/css/updateProduct.css">
</head>
<body>
    <div class="header">
        <div>
            <div class="logo-line-up"></div>
            <div class="logo">
                <img src="views/img/logo.png">
            </div>
            <div class="logo-line-below"></div>
        </div>
    </div>
<?php

    if($_SESSION['name'] == 'webmaster' || $_SESSION['pass'] == 'test') {
        $html = '<nav>';
        $html .= '<ul style="grid-template-columns: 7% 10% 14% 14% 15% 15%">';
        $html .= '<li><a href="home">Home</a></li>';
        $html .= '<li><a href="contact">Contact</a></li>';
        $html .= '<li><a href="nieuw-product">Nieuw Product</a></li>';
        $html .= '<li><a href="update">Update Product</a></li>';
        $html .= '<li><a href="delete-product">Verwijder Product</a></li>';
        $html .= '<li><a href="contact">Product Overzicht</a></li>';
        $html .= '</ul>';
        $html .= '</nav>';
    } else {
        $html = '<nav>';
        $html .= '<ul>';
        $html .= '<li><a href="home">Home</a></li>';
        $html .= '<li><a href="contact">Contact</a></li>';
        $html .= '</ul>';
        $html .= '</nav>';
    }
    echo $html;
    echo $_SESSION['name'] . " " . $_SESSION['pass'];

?>
