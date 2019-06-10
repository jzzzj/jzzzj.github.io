<!DOCTYPE html>
<html>
<head>
  <title>SITS</title>
</head>
<body>
  <p>Helo world</p>
<?php
  $email = $_GET['email'] ; 
  $subject = $_GET['subject'] ;
  $message = $_GET['message'] ;
  mail( "jsisbetter@gmail.com", "Subject: $subject",
  $message, "From: $email" );
  echo "Thank you for using our mail form";
?>
</body>
</html>
