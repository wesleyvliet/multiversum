<html>
<head>
    <script src="../multiversum/view/assets/js/jquery-1.11.2.min.js"></script>
    <script src="../multiversum/view/assets/js/global.js"></script>
    <script src="../multiversum/view/assets/js/products.js"></script>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
	<link rel="stylesheet" type="text/css" href="../multiversum/view/assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="../multiversum/view/assets/css/products.css">
    <link rel="stylesheet" type="text/css" href="../multiversum/view/assets/css/contact.css">
    <link rel="stylesheet" type="text/css" href="../multiversum/view/assets/css/actions.css">
    <link rel="stylesheet" type="text/css" href="../multiversum/view/assets/css/nieuwProduct.css">
</head>
<body>
<ul id="slides" stop="false">
    <li class="slide showing"><div class="logoLine1"></div><div class="logoBackground"><img src="../multiversum/view/assets/img/logo.svg" class="headerLogo"><p class="brandName">multiversum</p></div><div class="logoLine2"></li>
    <li class="slide"><div class="logoLine1"></div><div class="logoBackground"><img src="../multiversum/view/assets/img/logo.svg" class="headerLogo"><p class="brandName">multiversum</p></div><div class="logoLine2"></li>
    <li class="slide"><div class="logoLine1"></div><div class="logoBackground"><img src="../multiversum/view/assets/img/logo.svg" class="headerLogo"><p class="brandName">multiversum</p></div><div class="logoLine2"></li>
    <li class="slide"><div class="logoLine1"></div><div class="logoBackground"><img src="../multiversum/view/assets/img/logo.svg" class="headerLogo"><p class="brandName">multiversum</p></div><div class="logoLine2"></li>
    <li class="slide"><div class="logoLine1"></div><div class="logoBackground"><img src="../multiversum/view/assets/img/logo.svg" class="headerLogo"><p class="brandName">multiversum</p></div><div class="logoLine2"></li>
</ul>
<div id="dots" style="text-align:center">
    <p class="dot selected" id="dot1"></p>
    <p class="dot" id="dot2"></p>
    <p class="dot" id="dot3"></p>
    <p class="dot" id="dot4"></p>
    <p class="dot" id="dot5"></p>
</div>
<?php
    if($_SESSION['name'] !== 'guest') {
        //echo 'set';
        $html =  "<nav>";
            $html .=  "<ul>";
            $html .=    "<li><a href='?op=view&view=home'>Home</a></li>";
            $html .=    "<li><a href='?op=view&view=contact'>Contact</a></li>";
            $html .=    "<li><a href='?op=view&view=li8cehj792rqh8px7dsa3r768dy'>Nieuw Product</a></li>";
            $html .=    "<li><a href='?op=view&view=pageContent'>Pagina Content</a></li>";
            $html .=  "</ul>";
        $html .=  "</nav>";
    } else {
        $html =  "<nav>";
            $html .=  "<ul>";
            $html .=    "<li><a href='?op=view&view=home'>Home</a></li>";
            $html .=    "<li><a href='?op=view&view=contact'>Contact</a></li>";
            $html .=  "</ul>";
        $html .=  "</nav>";
    }
    echo $html;
    echo $_SESSION['name'];
?>
