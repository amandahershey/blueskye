<?php
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $service = $_POST['service'];

  $mailFrom = 'amandatest@newsite.blueskyescreening.com';
  $mailTo = "amandatest@newsite.blueskyescreening.com";
  $subject = "New Message From Contact Form";
  $body = "New message from: $name.\n".
          "Phone number: $phone.\n".
          "Service interested in: $service.\n";

  $headers = "From: $mailFrom";

  mail($mailTo, $subject,$body,$headers);
  header("Location: index.html");

?>
