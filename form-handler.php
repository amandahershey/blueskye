<?php
  if(isset( $_POST['name']))
  $name = $_POST['name'];
  if(isset( $_POST['address']))
  $address = $_POST['address'];
  if(isset( $_POST['phone']))
  $phone = $_POST['phone'];
  if(isset( $_POST['email']))
  $email = $_POST['email'];
  if(isset( $_POST['service']))
  $service = $_POST['service'];


  $content="\n From: $name \n Address: $address \n Phone: $phone \n Email: $email \n Service Interested In: $service";
  $recipient = "info@blueskyescreening.com";
  $mailheader = "From: $email \r\n";
  $subject = "BlueSkye Screening: New Estimate Request";
  mail($recipient, $subject, $content, $mailheader) or die("Error: there was a problem submitting your request. Please contact us at (407)857-5079.");

  header('Location: http://blueskyescreening.com/thankyou.html');
?>
