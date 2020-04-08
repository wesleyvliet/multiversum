<div id="page-container">
<?php
include 'header.php';

$html = "<div class='wrapper' id='page' page='contact'>";

$html .= "<span class='span'>";
$html .=    "<h1>heeft u vragen over uw besteling?</h1>";
$html .=    "<p>neem contact met ons op via het formulier hier beneden!</p>";
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
