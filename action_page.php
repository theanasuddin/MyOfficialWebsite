<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $subject = $_POST['subject'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  $mailTo = "contact@theanasuddin.com";
  $headers = "From: ".$mailFrom;
  $txt = "Name: ".$name."\r\nPhone: ".$phone."\r\nMessage: ".$message;
  mail($mailTo, $subject, $txt, $headers);
  header("Location: index.php?mailsent");

}
 ?>
