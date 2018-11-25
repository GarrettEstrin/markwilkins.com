<?php 
  $mail = mail('markmwilkins@gmail.com', "Inquiry from {$_POST['name']}", $_POST['message'] . "\r\nemail:  " . $_POST['email']);
  echo $mail;
?>