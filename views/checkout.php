<div id="page-container">
<?php
include 'header.php';
$html = "<div class='wrapper' id='page' page='contact'>";

$html .= "<div class='checkout'>";

$html .= "<div>";
$html .= "<h1>Adress en contact gegevens.</h1>";

$html .= "<form method='POST' action='?op=checkedout' enctype='multipart/form-data'>";
$html .= "<div class='box'>";
$html .= "<label for='postcode'>Postcode:</label>";
$html .= "<label for='postcode'>huisnr & toevoeging:</label>";
$html .= "<input name='postcode' required>";
$html .= "<input name='houseNumber' required>";
$html .= "<label for='city'>Stad:</label>";
$html .= "<label for='streetname'>Straat naam:</label>";
$html .= "<input name='city' required>";
$html .= "<input name='streetname' required>";
$html .= "<label for='firstname'>Voornaam:</label>";
$html .= "<label for='secondName'>Achternaam:</label>";
$html .= "<input name='firstname' required>";
$html .= "<input name='secondName' required>";
$html .= "<label for='email'>Email:</label>";
$html .= "<label style='color: var(--green);'>Email:</label>";
$html .= "<input name='email' required>";
$html .= "</div>";

$html .= "<h1>Betaal Methode</h1>";
$html .= "<div class='box'>";
$html .= "<select id='actie-select' name='payMethod'>";
$html .= "<option value='ontvangst'>Betalen bij ontvangst</option>";
$html .= "<option value='ideal'>Betalen met Ideal</option>";
$html .= "<option value='paypal'>Betalen met Paypal</option></select>";
$html .= "</div>";

$html .= "</div>";

$html .= "<div>";

$html .= "<h1>Product gegevens.</h1>";

$html .= "<div class='box'>";
$html .= "<p>1X - " . $product[0]['title'] . "</p>";
$html .= "<img src='views/img/products/" . $product[0]['id'] . ".jpg''>";
$html .= "<p>Totaal: " . $product[0]['prijs'] . "</p>";
$html .= "<input style='display:none;' name='product' value=" . $product[0]['id'] . ">";
$html .= "<button type='submit'>Betalen</button>";
$html .= "</form>";
$html .= "</div>";

$html .= "</div>";

$html .= "</div>";

echo $html;
?>

<?php
include 'footer.php';
?>
</div>
