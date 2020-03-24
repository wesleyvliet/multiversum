<?php

include 'header.php';

$html = '<span>';
$html .= '<h1 id="title">upload nieuwe producten</h1>';
$html .= '<p>alle gegevens zijn verijst om ingevuld te worden behalve de actie label en de display.</p>';
$html .= '</span>';
echo $html;
//$html = '<button class="exitButton"><a href="home">X</a></button>';
$html = "<form method='POST' action='?op=update' enctype='multipart/form-data' style='padding-top: 50px; padding-bottom: 50px;'>";
$html .= "<input style='display: none;' name='op' placeholder='Naam:' value='update'>";
$html .= "<div class='product-addForm'>";
$html .= 	"<div>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Home Pagina</th></tr>";
$html .= 	       "<tr><td><textarea rows='1' cols='50' required name='title1'>" . $contentPage1[0]['title'] . "</textarea></td></tr>";
$html .= 	       "<tr><td><textarea rows='4' cols='50' required name='text1'>" . $contentPage1[0]['text'] . "</textarea></td></tr>";
$html .=	   "</table>";
$html .=    "</div>";
$html .= 	"<div>";
$html .= 	   '<table class="detail-table">';
$html .=	       "<tr><th style='background: var(--grey);'>Contact Pagina</th></tr>";
$html .= 	       "<tr><td><textarea rows='1' cols='50' required name='title2'>" . $contentPage2[0]['title'] . "</textarea></td></tr>";
$html .= 	       "<tr><td><textarea rows='4' cols='50' required name='text2'>" . $contentPage2[0]['text'] . "</textarea></td></tr>";
$html .=	   "</table>";
$html .=    '<div class="addform-buttons">';
$html .= 	   "<button type='submit' id='add-product'>Update</button>";
$html .=    '</div>';
$html .=	"</div>";
$html .= "</div>";
$html .= "</form>";
//$html .= '<button class="exitButton" style="bottom: 3.6%;"><a href="home">X</a></button>';
echo $html;
include 'footer.php';

?>
