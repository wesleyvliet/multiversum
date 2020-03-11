<?php

include 'header.php';

$html = '<span>';
$html .= '<h1 id="title">upload nieuwe producten</h1>';
$html .= '<p>alle gegevens zijn verijst om ingevuld te worden behalve de actie label en de display.</p>';
$html .= '</span>';
echo $html;
if($productId == $checkId) {
    $html = "<div class='form-after-box'>";
    $html .= "<h1 class='form-after-mark'>✔</h1>";
    $html .= "<h1 class='form-after-text'>Product is toegevoegd</h1>";
    $html .= "</div>";
    echo $html;
}
//$html = '<button class="exitButton"><a href="home">X</a></button>';
$html = "<form method='POST' action='?op=create' style='padding-top: 50px; padding-bottom: 50px;'>";
$html .= "<input style='display: none;' name='op' placeholder='Naam:' value='create'>";
$html .= "<div class='product-addForm'>";
$html .= 	"<div>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Naam product</th></tr>";
$html .= 	       "<tr><td><input name='title' placeholder='Naam:' required></td></tr>";
$html .=	   "</table>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Platform (VR-brillen)</th></tr>";
$html .= 	       "<tr><td><div id='check-box'>";
$html .=           "<div>";
$html .=           "<p>Pc</p><p>Telefoon</p><p>Ps4</p>";
$html .=           "</div><div>";
$html .=           "<input type='checkbox' name='platform[]' value='Pc'>";
$html .=           "<input type='checkbox' name='platform[]' value='Telefoon'>";
$html .=           "<input type='checkbox' name='platform[]' value='Ps4'>";
$html .=           "<div>";
$html .=           "</div>";
$html .=           "</div></td></tr>";
$html .=	   "</table>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Eigen display</th></tr>";
$html .= 	       "<tr><td><select id='actie-select' name='eigenDisplay' style='width: 100%; border: none; font-size: 18px;'><option value='0'>✘: Is niet inbegrepen</option><option value='1'>✔: Is inbegrepen</option></select></td></tr>";
$html .=	   "</table>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Resolutie:</th></tr>";
$html .= 	       "<tr><td><input name='resulatie' placeholder='Resolutie:' required></td></tr>";
$html .=	   "</table>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Functies (VR-bril)</th></tr>";
$html .= 	       "<tr><td><input name='functies' placeholder='Functies (VR-bril):' required></td></tr>";
$html .=	   "</table>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Aansluitingen VR-bril</th></tr>";
$html .= 	       "<tr><td><input name='aansluitingen' placeholder='Aansluitingen VR-bril:' required></td></tr>";
$html .=	   "</table>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Refresh rate</th></tr>";
$html .= 	       "<tr><td><input name='refreshRate' placeholder='Refresh rate:' required></td></tr>";
$html .=	   "</table>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Prijs</th></tr>";
$html .= 	       "<tr><td><input name='prijs' placeholder='prijs:' required></td></tr>";
$html .=	   "</table>";
$html .=    "</div>";

$html .= 	"<div>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Garantie</th></tr>";
$html .= 	       "<tr><td><input name='garantie' placeholder='Fabrieksgarantie:' required></td></tr>";
$html .=	   "</table>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Accu en accessories</th></tr>";
$html .= 	       "<tr><td><input name='accessoires' placeholder='Meegeleverde VR-bril accessoires:' required></td></tr>";
$html .=	   "</table>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Extra informatie Product</th></tr>";
$html .= 	       "<tr><td><input name='infoProduct' placeholder='informatie Product:' required></td></tr>";
$html .=	   "</table>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Extra informatie Merk</th></tr>";
$html .= 	       "<tr><td><input name='infoMerk' placeholder='Merk:' required></td></tr>";
$html .=	   "</table>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Extra informatie Tweakers ID</th></tr>";
$html .= 	       "<tr><td><input name='infoTweakers' placeholder='Tweakers ID:' required></td></tr>";
$html .=	   "</table>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Extra informatie EAN</th></tr>";
$html .= 	       "<tr><td><input name='infoEAN' placeholder='EAN:' required></td></tr>";
$html .=	   "</table>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Extra informatie SKU</th></tr>";
$html .= 	       "<tr><td><input name='infoSKU' placeholder='SKU:' required></td></tr>";
$html .=	   "</table>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Actie</th></tr>";
$html .= 	       "<tr><td style='padding: 0px;'>" . "<select id='actie-select' name='actie'><option value='0'>Nee</option><option value='1'>Ja</option></select>";
$html .=           "<input id='actie-korting' name='korting' placeholder='prijs:'>";
$html .=           "</td></tr>";
$html .=	   "</table>";
$html .=        '<div class="addform-buttons">';
$html .= 	      "<button type='submit' id='add-product'>Voeg product toe</button>";
$html .=        '</div>';
$html .=	"</div>";
$html .= "</div>";
$html .= "</form>";
//$html .= '<button class="exitButton" style="bottom: 3.6%;"><a href="home">X</a></button>';
echo $html;
include 'footer.php';

?>
<script>
    removeMessage()
</script>