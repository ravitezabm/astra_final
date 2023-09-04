<?php
if (isset($_POST['subscribe'])) {
  $to = 'your@email.com'; // Replace with your email address
  $subject = 'New Newsletter Subscription';
  $message = 'A new subscriber has joined the newsletter: ' . $_POST['email'];
  $headers = 'From: ' . $_POST['email'];

  if (mail($to, $subject, $message, $headers)) {
    echo 'Thank you for subscribing!';
  } else {
    echo 'An error occurred. Please try again later.';
  }
}
?>
