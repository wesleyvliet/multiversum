<?php

include 'header.php';

$html = '<span>';
$html .= '<h1 id="title">upload nieuwe producten</h1>';
$html .= '<p>alle gegevens zijn verijst om ingevuld te worden behalve de actie label en de display.</p>';
$html .= '</span>';
echo $html;
$html = "<div id='afterBox'>";
if($productId == $checkId) {
    $html .= "<div class='form-after-box'>";
    $html .= "<h1 class='form-after-mark'>✔</h1>";
    $html .= "<h1 class='form-after-text'>Product is toegevoegd</h1>";
    $html .= "</div>";
}else {
    $html .= "<div class='form-after-box' style='background: lightcoral;'>";
    $html .= "<h1 class='form-after-mark'>✘</h1>";
    $html .= "<h1 class='form-after-text'>Product is niet toegevoegd</h1>";
    $html .= "</div>";
}
$html .= "</div>";
echo $html;

include 'footer.php';
?>
<script>
    //removeMessage()
</script>
