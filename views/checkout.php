<div id="page-container">
<?php
include 'header.php';
$html = "<div class='wrapper' id='page' page='contact'>";

$html .= "<span style='margin-top: 3%!important;' class='span'>";
    $html .= "<h1>" . $content[0]['title'] . "</h1>";
    $html .= "<p>" . $content[0]['text'] . "</p>";
$html .= "</span>";

echo $html;
?>

<?php
include 'footer.php';
?>
</div>
