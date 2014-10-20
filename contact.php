<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  http_response_code(400);
  echo "E-mail is not valid. Please fill in correctly!";
  exit;
}

elseif (strlen($name) < 2) {
  http_response_code(400);
  echo "Your name seems abit short? Please fill in correctly!";
  exit;
}

elseif (strlen($subject) < 2) {
  http_response_code(400);
  echo "The subject seems abit short. Please fill in correctly!";
  exit;
}

elseif (strlen($message) < 10) {
  http_response_code(400);
  echo "The message seems abit short. Please fill at least 10 characters!";
  exit;
}

else {
  $formcontent="From: $name \n Message: $message";
  $recipient = "jesperkmartinussen@gmail.com";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  http_response_code(200);
  echo "Thank You!";
}
?>