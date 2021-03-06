<?php
require 'header.php';
if(!empty($actions)) {
    $displayLength = count($actions);
    $html = "<div class='product-display-actions'>";
    $html .= "<button onclick='actionBackword()'><</button>";
    $html .= "<div id='actions' class='display-actions' display='1' stop='true' clicked='none' >";
    for($i = 0; $i < 3; $i++){
        $discount = intval($actions[$i]['prijs']);
        $discount = $discount - intval($actions[$i]['korting']);
        $html .= "<div class='item' id=" . $actions[$i]['id'] . ">";
            $html .= "<h1>" . $actions[$i]['title'] . '</h1><h1><p style="margin: 0; float: left;">€ '. $discount . ' </p><p style="margin: 0; font-size: 14px; padding-bottom: 10px; color: var(--green);">-' . $actions[$i]['korting'] . "</p></h1>";
            $html .= "<img src='view/assets/img/products/" . $actions[$i]['id'] . ".jpg'>";
            $html .= "<p>Platform: " . $actions[$i]['platform'] . "</p>";
            $html .= "<p>Resulatie: " . $actions[$i]['resulatie'] . "</p>";
        $html .= "</div>";
    }
    $html .= "</div>";
    $html .= "<button onclick='actionForward()'>></button>";
    $html .= "</div>";
    echo $html;
}

$html = "<span style='margin-top: 3%!important;'>";
    $html .= "<h1>" . $content[0]['title'] . "</h1>";
    $html .= "<p>" . $content[0]['text'] . "</p>";
$html .= "</span>";
echo $html;

$display = $contacts;
$page = $page;
$displayLength = count($display);
$html = "<div id='products' class='product-display' display='1' >";
for($i = 0; $i < 10; $i++){
    $html .= "<div class='item' id=" . $display[$i]['id'] . ">";
        $html .= "<h1>" . $display[$i]['title'] . '<h1>€ '. $display[$i]['prijs'] . "</h1></h1>";
        $html .= "<img src='view/assets/img/products/" . $display[$i]['id'] . ".jpg'>";
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
