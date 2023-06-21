<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "rohit.brjn11@gmail.com"; // Your Gmail address
  $from = $_POST['email'];
  $name = $_POST['fullname'];
  $message = $_POST['message'];
  
  $subject = "New contact form submission";
  $email_body = "Name: $name\nEmail: $from\n\n$message";

  $headers = "From: $from \r\n";
  $headers .= "Reply-To: $from \r\n";

  if (mail($to, $subject, $email_body, $headers)) {
    echo "success";
  } else {
    echo "error";
  }
}
?>
