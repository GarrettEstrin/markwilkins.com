<?php 
  $mail = mail('garrett.estrin@gmail.com', "Inquiry from {$_POST['name']}", $_POST['message'] . "\r\nemail:  " . $_POST['email']);
  echo $mail;
?>