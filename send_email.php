<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject']; 
$message = $_POST['message'];

  
$to = 'kcharan@umich.edu';


$headers = "From: $name <$email>";


$success = mail($to, $subject, $message, $headers);


if ($success) {
  header('Location: email-sent.html');
} else {
  echo "Error sending email.";
}
?>