<div id="page-container">
<?php
include 'header.php';
?>
<div class="wrapper" id='page' page='delete'>
<?php
if(empty($h1)) {
    $html = "<span class='span'>";
    $html .= '<h1>' . 'Verkeerd product verwijdert?' . '</h1>';
    $html .= '<p>' . 'Producten kunnen hersteld worden onder de archiveer tabel.' . '</p>';
    $html .= "</span>";
} else {
    $html = "<span class='span'>";
    $html .= '<h1>' . $h1 . '</h1>';
    $html .= '<p>' . $p . '</p>';
    $html .= "</span>";
}
$html .= "<div class='delete-Tabels'>";
//table 1;
$html .= "<div>";
$html .= "<h1>Producten Overzicht</h1>";
if(empty($archive)) {
    $html .= "<p>geen producten gevonden...</p>";
} else {
    $html .= "<div class='product-view'>";
    $count = count($products);
    $display = $products;
    for ($i=0; $i < $count; $i++) {
        $id = $display[$i]['id'];
        $html .= "<div class='item' id=" . $display[$i]['id'] . ">";
            $html .= "<h1>" . $display[$i]['title'] . '</h1><h1>€ '. $display[$i]['prijs'] . "</h1>";
            $html .= "<img src='views/img/products/" . $display[$i]['id'] . ".jpg'>";
            $html .= "<p>Platform: " . $display[$i]['platform'] . "</p>";
            $html .= "<p>Resulatie: " . $display[$i]['resulatie'] . "<button class='delete-button'><a href='?op=delete&id=$id'>verwijder</a></button>" . "</p>";
        $html .= "</div>";
        $html .= "<hr>";
    }
}
$html .= "</div>";
$html .= "</div>";
//table 2;
$html .= "<div>";
$html .= "<h1>Archiveer Overzicht</h1>";
if(empty($archive)) {
    $html .= "<p>nog geen producten verwijdert...</p>";
} else {
    $html .= "<div class='product-view'>";
    $count = count($archive);
    $display = $archive;
    for ($i=0; $i < $count; $i++) {
        $id = $display[$i]['id'];
        $html .= "<div class='item' id=" . $display[$i]['id'] . ">";
            $html .= "<h1>" . $display[$i]['title'] . '</h1><h1>€ '. $display[$i]['prijs'] . "</h1>";
            $html .= "<img src='views/img/products/" . $display[$i]['id'] . ".jpg'>";
            $html .= "<p>Platform: " . $display[$i]['platform'] . "</p>";
            $html .= "<p>Resulatie: " . $display[$i]['resulatie'] . "<button><a href='?op=recover&id=$id'>Herstel</a></button>" . "</p>";
        $html .= "</div>";
        $html .= "<hr>";
    }
}
$html .= "</div>";
//end tables;
$html .= "</div>";



$html .= "</div>";
$html .= "</div>";
echo $html;
include 'footer.php';
?>
