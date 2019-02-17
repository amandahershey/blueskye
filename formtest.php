<?php

require 'PHPMailer-master/PHPMailerAutoload.php';

/*
*  CONFIGURE EVERYTHING HERE
*/

// an email address that will be in the From field of the email.
$fromEmail = 'acbhershey@gmail.com ';
$fromName = 'Testing from';

// an email address that will receive the email with the output of the form
$sendToEmail = 'acbhershey@gmail.com';
$sendToName = 'Testing To';

// subject of the email
$subject = 'New message from contact form';

// form field names and their translations.
// array variable name => Text to appear in the email
$fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'service' => 'Service');

// message that will be displayed when everything is OK :)
$okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

// If something goes wrong, we will display this message.
$errorMessage = 'There was an error while submitting the form. Please try again later';

// smtp credentials and server

$smtpHost = 'smtp.gmail.com';
$smtpUsername = 'acbhershey@gmail.com';
$smtpPassword = 'Hershey01';

$mail = new PHPMailer;

... - set from, recipient, message...

$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
$mail->Host = gethostbyname($smtpHost);

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
//We have configured this variable in the config section
$mail->Username = $smtpHost;

//Password to use for SMTP authentication
//We have configured this variable in the config section
$mail->Password = $smtpPassword;


if(!$mail->send()) {
    throw new \Exception('I could not send the email.' . $mail->ErrorInfo);
}
