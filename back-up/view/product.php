<?php

include 'header.php';

$html = '<button class="exitButton"><a href="home">X</a></button>';
$html = "<div style='background: #d3d3d3a1;
    padding-top: 50px;
    padding-bottom: 50px;'>";
$html .= "<div class='product-specs'>";
$html .= 	"<div>";
$html .= 		"<h1>" . "Specificaties en productafbeeldingen" . "</h1>";
$html .=			'<table class="detail-table">';
$html .=				"<tr><th style='background: var(--grey);'>Populaire specificaties</th></tr>";
$html .= 			    "<tr><td>Platform (VR-brillen): " . $contacts[0]['platform'] . "</td></tr>";
$html .=				"<tr><td>Eigen display: " . $contacts[0]['eigenDisplay'] . "</td></tr>";
$html .=				"<tr><td>Resolutie: " . $contacts[0]['resulatie'] . "</td></tr>";
$html .=				"<tr><td>Functies (VR-bril): " . $contacts[0]['functies'] . "</td></tr>";
$html .=				"<tr><td>Aansluitingen VR-bril: " . $contacts[0]['aansluitingen'] . "</td></tr>";
$html .=			"</table>";
$html .=			'<table class="detail-table">';
$html .=				"<tr><th style='background: var(--grey);'>Platform</th></tr>";
$html .= 			"<tr><td>Platform (VR-brillen): " . $contacts[0]['platform'] . "</td></tr>";
$html .=			"</table>";
$html .=			'<table class="detail-table">';
$html .=				"<tr><th style='background: var(--grey);'>Scherm</th></tr>";
$html .= 			"<tr><td>Eigen display:" . $contacts[0]['eigenDisplay'] . "</td></tr>";
$html .= 			"<tr><td>Resolutie: " . $contacts[0]['resulatie'] . "</td></tr>";
$html .= 			"<tr><td>Refresh rate: " . $contacts[0]['refreshRate'] . "</td></tr>";
$html .=			"</table>";
$html .=			'<table class="detail-table">';
$html .=				"<tr><th style='background: var(--grey);'>Functies</th></tr>";
$html .= 			"<tr><td>Functies (VR-bril) " . $contacts[0]['functies'] . ":</td></tr>";
$html .=			"</table>";
$html .=			'<table class="detail-table">';
$html .=				"<tr><th style='background: var(--grey);'>Verbindingen</th></tr>";
$html .= 			"<tr><td>Aansluitingen VR-bril: " . $contacts[0]['aansluitingen'] . "</td></tr>";
$html .=			"</table>";
$html .=		"</div>";

$html .= 	"<div>";
$html .= 		"<h1>" . "prijs: € " . $contacts[0]['prijs'] . "<button style='display:none;'>" . "Koop Nu!" . "</button></h1>";
$html .= 		"<div class='DetailsImgOverlay' style='background-image: linear-gradient(180deg,rgba(0,0,0,0.3) 0%,rgba(0,0,0,0.3) 100%), url(./view/assets/img/products/" . $contacts[0]['id'] . ".jpeg)'>";
$html .=			"</div>";
$html .=			'<table class="detail-table">';
$html .=				"<tr><th style='background: var(--grey);'>Accu en accessories</th></tr>";
$html .= 			"<tr><td>Meegeleverde VR-bril accessoires: " . $contacts[0]['accessoires'] . "</td></tr>";
$html .=			"</table>";
$html .=			'<table class="detail-table">';
$html .=				"<tr><th style='background: var(--grey);'>Garantie</th></tr>";
$html .= 			"<tr><td>Fabrieksgarantie: " . $contacts[0]['garantie'] . "</td></tr>";
$html .=			"</table>";
$html .=			'<table class="detail-table">';
$html .=				"<tr><th style='background: var(--grey);'>Meer informatie</th></tr>";
$html .= 			"<tr><td>Product: " . $contacts[0]['infoProduct'] . "</td></tr>";
$html .= 			"<tr><td>Merk: " . $contacts[0]['infoMerk'] . "</td></tr>";
$html .= 			"<tr><td>Tweakers ID: " . $contacts[0]['infoTweakers'] . "</td></tr>";
$html .= 			"<tr><td>EAN: " . $contacts[0]['infoEAN'] . "</td></tr>";
$html .= 			"<tr><td>SKU: " . $contacts[0]['infoSKU'] . "</td></tr>";
$html .=			"</table>";
$html .=		"</div>";

$html .= "</div>";
$html .= "</div>";
echo $html;
include 'footer.php';

?>
