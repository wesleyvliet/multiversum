<?php

include 'header.php';
?>
<html>
<head>
</head>
<body>
<h1 id=title>Contactgegevens</h1>
<p>Stuur een E-mail met u vraag of klacht</p>
<form action="contactform.php" method="post">
  <input type="text" name="name" placeholder="Volledige naam"><br>
  <input type="text" name="mail" placeholder="Jouw e-mail"><br>
  <input type="text" name="subject" placeholder="Onderwerp"><br>
  <textarea name="message" placeholder="Bericht"></textarea><br>
  <button type="submit" name="submit">Stuur Mail</button>
</form>
</body>
</html>
<?php
include 'footer.php';

?>
