<div id="page-container">
<?php
include 'header.php';

$html = "<div class='wrapper' id='page' page='contact'>";

$html .= "<span class='span'>";
$html .=    "<h1>Pas de Text aan wat uw klanten zien.</h1>";
$html .=    "<p>Beneden staan formulieren met de huidege text dat de klanten zien.<br>U kan de text aan passen door in de doos te kliken,<br> daarna als u op de update knop drukt kunnen de klanten de nieuwe text zien.</p>";
$html .= "</span>";
$html .= "<div class='content-edit'>";
$html .= "<div>";
$html .=    "<form method='POST' action='?op=updateContent&content=home' enctype='multipart/form-data'>";
$html .=    "<h1>Home Title</h1>";
$html .=    "<textarea name='title' rows='8' cols='80'>" . $contentHome[0]['title'] . "</textarea>";
$html .=    "<h1>Home Text</h1>";
$html .=    "<textarea name='text' rows='8' cols='80' style='margin-bottom: 15px;'>" . $contentHome[0]['text'] . "</textarea><br>";
$html .=    "<button type='submit'>Update</button>";
$html .=    "</form>";
$html .= "</div>";
$html .= "<div>";
$html .=    "<form method='POST' action='?op=updateContent&content=contact' enctype='multipart/form-data'>";
$html .=    "<h1>Contact Title</h1>";
$html .=    "<textarea name='title' rows='8' cols='80'>" . $contentContact[0]['title'] . "</textarea>";
$html .=    "<h1>Contact Text</h1>";
$html .=    "<textarea name='text' rows='8' cols='80' style='margin-bottom: 15px;'>" . $contentContact[0]['text'] . "</textarea><br>";
$html .=    "<button type='submit'>Update</button>";
$html .=    "</form>";
$html .= "</div>";

$html .= "</div>";
$html .= "</div>";
echo $html;
include 'footer.php';
?>
</div>
