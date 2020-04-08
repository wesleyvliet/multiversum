<?php
echo "<div id='page-container'>";
include 'header.php';

$html = "<div>";
$html .= "<h1>Besteling overzicht</h1>"
$html .= "<div>";

$display = $orders;
$displayLength = count($display);
$html = "<div id='products' class='product-display' display='1' page='home'>";
for($i = 0; $i < $displayLength; $i++){
    $html .= "<div>";
        $html .= "<p>Platform: " . $display[$i]['platform'] . "</p>";
        $html .= "<p>Resolutie: " . $display[$i]['resulatie'] . "</p>";
        $html .= "<button><a href='?op=checkout&product=" . $display[$i]['id'] . "'>Bestel</a></button>";
    $html .= "</div>";
}

$html .= "</div>";

$html .= "</div>";



echo "</div>";
include 'footer.php';
?>
