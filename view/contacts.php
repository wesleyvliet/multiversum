<?php
require 'header.php';

$displayLength = count($actions);
$html = "<div class='product-display-actions'>";
$html .= "<button onclick='actionBackword()'><</button>";
$html .= "<div id='actions' class='display-actions' display='1' stop='true' clicked='none' >";
for($i = 0; $i < 3; $i++){
    $html .= "<div class='item' id=" . $actions[$i]['id'] . ">";
        $html .= "<h1>" . $actions[$i]['title'] . '<h1>€ '. $actions[$i]['prijs'] . "</h1></h1>";
        $html .= "<img src='view/assets/img/products/" . $actions[$i]['id'] . ".jpeg'>";
        $html .= "<p>Platform: " . $actions[$i]['platform'] . "</p>";
        $html .= "<p>Resulatie: " . $actions[$i]['resulatie'] . "</p>";
    $html .= "</div>";
}
$html .= "</div>";
$html .= "<button onclick='actionForward()'>></button>";
$html .= "</div>";
echo $html;

$html = "<span>";
    $html .= "<h1>Welkome bij multiversum.com</h1>";
    $html .= "<p>Bekijk onze wijde selectie aan Vr-Brillen!</p>";
$html .= "</span>";
echo $html;

$display = $contacts;
$page = $page;
$displayLength = count($display);
$html = "<div id='products' class='product-display' display='1' >";
for($i = 0; $i < 10; $i++){
    $html .= "<div class='item' id=" . $display[$i]['id'] . ">";
        $html .= "<h1>" . $display[$i]['title'] . '<h1>€ '. $display[$i]['prijs'] . "</h1></h1>";
        $html .= "<img src='view/assets/img/products/" . $display[$i]['id'] . ".jpeg'>";
        $html .= "<p>Platform: " . $display[$i]['platform'] . "</p>";
        $html .= "<p>Resulatie: " . $display[$i]['resulatie'] . "</p>";
    $html .= "</div>";
}
$html .= "</div class='product-display'>";
$html .= "<div class='buttons'>";
$html .= "<button onclick='backword()'><</button>";
$html .= "<button id='page-display' page=" . $page . " >" . $page . "</button>";
$html .= "<button onclick='forward()'>></button>";
$html .= "</div>";
echo $html;

require 'footer.php';

?>
<script type="text/javascript">
    const actions = <?php echo json_encode($actions); ?>;
    const products = <?php echo json_encode($contacts); ?>;
    init_js();
</script>
