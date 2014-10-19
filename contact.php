<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "E-mail is not valid. Please fill in correctly!";
}

elseif (strlen($name) < 2) {
  echo "Your name seems abit short? Please fill in correctly!";
}

elseif (strlen($subject) < 2) {
  echo "The subject seems abit short. Please fill in correctly!";
}

elseif (strlen($message) < 10) {
  echo "The message seems abit short. Please fill at least 10 characters!";
}

else {
  $formcontent="From: $name \n Message: $message";
  $recipient = "jesperkmartinussen@gmail.com";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  echo "Thank You!";
}
?>