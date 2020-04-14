<?php
echo "<div id='page-container'>";
include 'header.php';

$html = "<span class='span'>";
$html .=    "<h1>Besteling overzicht.</h1>";
$html .=    "<p>Beneden staat een schema van alle bestelingen die geplaatst zijn.</p>";
$html .=    "<p>De meest recente bestelingen staan bovenaan.</p>";
$html .=    "<p>Met de product knop kan u bekijken welk product besteld is.</p>";
$html .= "</span>";

$html .= "<div class='orders'>";
$html .= "<h1>Besteling overzicht</h1>";
$display = $orders;
$displayLength = count($display);
$html .= "<div>";
$counter = 1;
for($i = 0; $i < $displayLength; $i++){
    if($counter == 2) {
    $html .= "<div style='background: #2eac93;'>";
    $counter = 1;
    } else {
        $html .= "<div>";
        $counter++;
    }
        $html .= "<p>datumBesteling: " . $display[$i]['datumBesteling'] . "</p>";
        $html .= "<p>postcode: " . $display[$i]['postcode'] . "</p>";
        $html .= "<p>stad: " . $display[$i]['stad'] . "</p>";
        $html .= "<p>straatNaam: " . $display[$i]['straatNaam'] . "</p>";
        $html .= "<p>huisnumer: " . $display[$i]['huisnumer'] . "</p>";
        $html .= "<p>voornaam: " . $display[$i]['voornaam'] . "</p>";
        $html .= "<p>achternaam: " . $display[$i]['achternaam'] . "</p>";
        $html .= "<p>betaling: " . $display[$i]['betaling'] . "</p>";
        $html .= "<button><a href='?op=read&id=" . $display[$i]['productID'] . "'>Product</a></button>";
    $html .= "</div>";
}

$html .= "</div>";

$html .= "</div>";


echo $html;
echo "</div>";
include 'footer.php';
?>
