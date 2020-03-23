<?php

include 'header.php';
?>
<html>
<head>
</head>
<body>
<h1 id=title>Contactgegevens</h1>
<p>Send E-mail</p>
<form action="contactform.php" method="post">
  <input type="text" name="name" placeholder="Volledige naam">
  <input type="text" name="mail" placeholder="Jouw e-mail">
  <input type="text" name="subject" placeholder="Onderwerp">
  <textarea name="message" placeholder="Bericht"></textarea>
  <button type="submit" name="submit">Stuur Mail</button>
</form>
</body>
</html>
<?php
include 'footer.php';

?>
