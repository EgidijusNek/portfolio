<?php

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$email_from = 'manopastas@epastas.lt';

$email_subject='New message from Portfolio website';

$email_body = 'Senders name: '. $name ."\n".
                "Senders email: " . $email ."\n".
                'Message: ' . $message . "\n";

$to = "pastas@egidijus.site";
$headers ="From: " . $email_from . "\r\n";
// $headers .= "Reply-to ". $email ."\r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: index.php?mailsend");





?>
