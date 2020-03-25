<?php
 if (isset($_POST["submit"])) {
     $name = $_POST['name'];
     $mailfrom = $_POST['mail'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];

     $mailTo = "jack.jones@multiversum.com";
     $headers = "From: ".$mailfrom;
     $txt = "Je hebt een bericht van ".$name.".\n\n".$message;

     mail($mailTo, $subject, $txt, $headers);
     header("Location: contact.php?mailsend");
 }
?>