<?php

include 'header.php';

$html = "<span>";
    $html .= "<h1>" . $content[0]['title'] . "</h1>";
    $html .= "<p>" . $content[0]['text'] . "</p>";
echo $html;

?>
<div class="clearfix">
<form action="contactform.php" method="post">
  <input type="text" name="name" placeholder="Volledige naam"><br>
  <input type="text" name="mail" placeholder="Jouw e-mail"><br>
  <input type="text" name="subject" placeholder="Onderwerp"><br>
  <textarea name="message" placeholder="Bericht"></textarea><br>
  <button type="submit" name="submit">Stuur Mail</button>
<form>
<div class="contact">
<h3 id="title">Contactgegevens:</h3>
<p>Naam:  Jack Jones <br>
Email: jack.jones@multiversum.com</p>
</div>

<div class="location">
<h3 id="title">Locatie:</h3>
<p>Straat: 1861 Jan Pieterszoon Coenstraat <br>
Stad: Maasdriel <br>
Provincie: Zeeland
Postcode: 69217
</p>
</div>
<a href="https://www.google.nl/maps/place/Jan+Pieterszoon+Coenstraat,+Utrecht/@52.0912708,5.0973306,17.75z/data=!4m5!3m4!1s0x47c66f65451cd7b3:0xa52fd8e5ccf60705!8m2!3d52.0910488!4d5.0975124" target="_blank">
<img src="./view/assets/img/locatie.png" height="600px" width="600px" alt="locatie">
</a>
</div>
</span>

<?php
include 'footer.php';
?>
