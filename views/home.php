<?php
include 'header.php';
?>

<div class="wrapper">
<?php

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
            $html .= "<img src='views/img/products/" . $actions[$i]['id'] . ".jpg'>";
            $html .= "<p>Platform: " . $actions[$i]['platform'] . "</p>";
            $html .= "<p>Resulatie: " . $actions[$i]['resulatie'] . "</p>";
        $html .= "</div>";
    }
    $html .= "</div>";
    $html .= "<button onclick='actionForward()'>></button>";
    $html .= "</div>";
    echo $html;
}
$html = "<span style='margin-top: 3%!important;' class='span'>";
    $html .= "<h1>" . $content[0]['title'] . "</h1>";
    $html .= "<p>" . $content[0]['text'] . "</p>";
$html .= "</span>";
echo $html;

$display = $products;
$page = $page;
$displayLength = count($display);
$html = "<div id='products' class='product-display' display='1' >";
for($i = 0; $i < 9; $i++){
    $html .= "<div class='item' id=" . $display[$i]['id'] . ">";
        $html .= "<h1>" . $display[$i]['title'] . '</h1><h1>€ '. $display[$i]['prijs'] . "</h1>";
        $html .= "<img src='views/img/products/" . $display[$i]['id'] . ".jpg'>";
        $html .= "<p>Platform: " . $display[$i]['platform'] . "</p>";
        $html .= "<p>Resulatie: " . $display[$i]['resulatie'] . "</p>";
    $html .= "</div>";
}
$html .= "</div>";
$html .= "<div class='buttons'>";
$html .= "<button onclick='backword()' style='margin-right: 0px;'><</button>";
$html .= "<button id='page-display' page=" . $page . " >" . $page . "</button>";
$html .= "<button onclick='forward()' style='margin-left:0px;'>></button>";
$html .= "</div>";
echo $html;
?>
</div>
<?php
include 'footer.php';

function utf8ize($d) {
    if (is_array($d))
        foreach ($d as $k => $v)
            $d[$k] = utf8ize($v);

     else if(is_object($d))
        foreach ($d as $k => $v)
            $d->$k = utf8ize($v);

     else
        return utf8_encode($d);

    return $d;
}

?>

<script type="text/javascript">
    const products = <?php echo json_encode(utf8ize($products)); ?>;
    console.log(products.length);
    const actions = <?php echo json_encode($actions); ?>;
    init_js();
</script>
