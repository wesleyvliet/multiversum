<?php
include 'header.php';
?>
<div class="wrapper" id='page' page='delete'>
<?php
if(empty($h1)) {
    $html = "<span class='span'>";
    $html .= '<h1>' . 'Verkeerde product verwijdert?' . '</h1>';
    $html .= '<p>' . 'Producten kunnen hersteld worden onder de archiveer tabel.' . '</p>';
    $html .= "</span>";
} else {
    $html = "<span class='span'>";
    $html .= '<h1>' . $h1 . '</h1>';
    $html .= '<p>' . $p . '</p>';
    $html .= "</span>";
}

$html .= "</div>";
echo $html;
include 'footer.php';
?>
