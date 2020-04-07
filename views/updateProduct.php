<div id="page-container">
<?php
include 'header.php';
$html = "<div class='wrapper' id='page' page='update'>";
$html .= "<span class='span'>";
if(empty($h1)) {
    $html .=    "<h1>heeft u vragen over uw besteling?</h1>";
    $html .=    "<p>neem contact met ons op via de formulier beneden!</p>";
} else {
    $html .=    "<h1>" . $h1 . "</h1>";
    $html .=    "<p>" . $p . "</p>";
}
$html .= "</span>";
$display = $products;
$page = $page;
$displayLength = count($display);
$html .= "<div id='products' class='product-display update' display='1' page='update'>";
for($i = 0; $i < 9; $i++){
    $id = $display[$i]['id'];
    $html .= "<div class='item' id=" . $display[$i]['id'] . ">";
        $html .= "<h1>" . $display[$i]['title'] . '</h1><h1>€ '. $display[$i]['prijs'] . "</h1>";
        $html .= "<img src='views/img/products/" . $display[$i]['id'] . ".jpg'>";
        $html .= "<p>Platform: " . $display[$i]['platform'] . "</p>";
        $html .= "<p>Resulatie: " . $display[$i]['resulatie'] . "</p>";
 
        $html .= "<a href='?op=update&id=$id'><input type=button value='HOME'></a>";
    $html .= "</div>";
}
$html .= "</div>";
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
</div>
<script type="text/javascript">
    const products = <?php echo json_encode(utf8ize($products)); ?>;
    init_js();
</script>
