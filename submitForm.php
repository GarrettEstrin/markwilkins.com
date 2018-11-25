<?php 
  $mail = mail($_POST['email'], "Inquiry from {$_POST['name']}", $_POST['message']);
  echo $mail;
?>