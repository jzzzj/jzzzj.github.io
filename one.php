<!DOCTYPE html>
<html>
<head>
  <title>SITS</title>
</head>
<body>
  <p>Helo world</p>
<?php
  $email = $_POST['email'] ; 
  $subject = $_POST['subject'] ;
  $message = $_POST['message'] ;
  mail( "jsisbetter@gmail.com", "Subject: $subject", $message, "From: $email" );
  echo "Thank you for using our mail form";
?>
</body>
</html>
