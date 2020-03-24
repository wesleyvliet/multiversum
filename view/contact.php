<?php

include 'header.php';

$html = "<span>";
    $html .= "<h1>" . $content[0]['title'] . "</h1>";
    $html .= "<p>" . $content[0]['text'] . "</p>";
$html .= "</span>";
echo $html;

?>

<form action="contactform.php" method="post">
  <input type="text" name="name" placeholder="Volledige naam"><br>
  <input type="text" name="mail" placeholder="Jouw e-mail"><br>
  <input type="text" name="subject" placeholder="Onderwerp"><br>
  <textarea name="message" placeholder="Bericht"></textarea><br>
  <button type="submit" name="submit">Stuur Mail</button>
<form>

<?php
include 'footer.php';

?>
