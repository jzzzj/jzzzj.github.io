<!DOCTYPE html>
<html>
<head>
  <title>SITS</title>
</head>
<body>
  <p>Helo world</p>
<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = $_REQUEST['email'] ; 
  $subject = $_REQUEST['subject'] ;
  $message = $_REQUEST['message'] ;
  mail( "jsisbetter@gmail.com", "Subject: $subject",
  $message, "From: $email" );
  echo "Thank you for using our mail form";
  }
else
?>
</body>
</html>
