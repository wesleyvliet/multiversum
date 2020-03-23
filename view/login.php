<?php
include 'header.php';

$html = '<span>';
$html .= '<h1 id="title">upload nieuwe producten</h1>';
$html .= '<p>alle gegevens zijn verijst om ingevuld te worden behalve de actie label en de display.</p>';
$html .= '</span>';
echo $html;
//$html = '<button class="exitButton"><a href="home">X</a></button>';
$html = "<form id='login-form' method='POST' action='?op=login' enctype='multipart/form-data' style='padding-top: 50px; padding-bottom: 50px;'>";
$html .= "<input style='display: none;' name='op' placeholder='Naam:' value='login'>";
$html .= "<div class='product-addForm'>";
$html .= 	"<div>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Naam</th></tr>";
$html .= 	       "<tr><td><input name='name' required></td></tr>";
$html .=	   "</table>";
$html .=    "</div>";

$html .= 	"<div>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Wachtwoord</th></tr>";
$html .= 	       "<tr><td><input name='pass' required></td></tr>";
$html .=	   "</table>";
$html .=        '<div class="addform-buttons">';
$html .= 	      "<button type='submit' id='add-product'>Login</button>";
$html .=        '</div>';
$html .=	"</div>";
$html .= "</div>";
$html .= "</form>";
//$html .= '<button class="exitButton" style="bottom: 3.6%;"><a href="home">X</a></button>';
echo $html;

include 'footer.php';
?>
