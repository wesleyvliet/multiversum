<?php

include 'header.php';

$html = '<span>'; 
$html .= '<h1 id="title">Contactgegevens</h1>';
$html .= '<div class="grid-container">';
$html .= '<form action="/action_page.php">';
$html .= '<label for="fname">First name:</label><br>';
$html .= '<input type="text" id="fname" name="fname" value="John"><br>';
$html .= '<label for="lname">Last name:</label><br>';
$html .= '<input type="text" id="lname" name="lname" value="Doe"><br><br>';
$html .= '<input type="submit" value="Submit">';
$html .= '</form>';
$html .= '</span>';
$html .= '<aside>';
$html .= '<div class="item1"><h3>Gegevens eigenaar</h3></div>';
$html .= '<div class="item2"><h3>Bedrijfslocatie:</h3></div>';
$html .= '<div class="item3">Eigenaar: Jack Jones,</div>';
$html .='<div class="item4">Straat: 1861 Jan Pieterszoon Coenstraat,</div>';
$html .= '<div class="item5">email:<a href="mailto:jack.jones@multiversum.com">jack.jones@multiversum.com</a></div>';
$html .= '<div class="item6">City: Utrecht,</div>';
$html .= '<div class="item7"></div>';
$html .= ' <a href="https://www.google.nl/maps/place/Jan+Pieterszoon+Coenstraat,+Utrecht/@52.0910521,5.0953237,17z/data=!3m1!4b1!4m5!3m4!1s0x47c66f65451cd7b3:0xa52fd8e5ccf60705!8m2!3d52.0910488!4d5.0975124" target="_blank">';
$html .= '<div class="item9"> Postcode: 69217</div></a>';
$html .= '</div>';
$html .= '</div>';
$html .= '<a href="https://www.google.nl/maps/place/Jan+Pieterszoon+Coenstraat,+Utrecht/@52.0910521,5.0953237,17z/data=!3m1!4b1!4m5!3m4!1s0x47c66f65451cd7b3:0xa52fd8e5ccf60705!8m2!3d52.0910488!4d5.0975124" target="_blank">';
$html .= '<img src="../multiversum/view/assets/img/locatie.png" class="center" alt="locatie">';
$html .= '</a>';
$html .= '</body>';
echo $html;
include 'footer.php';

?>
