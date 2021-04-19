<?php

session_start();

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_subject = "New Form submission";

$email_body = "You have received a new message from the user $name.\n" .
    "Here is the message:\n $message";

$email_body =     wordwrap($email_body);


$to_email = "hellomayankashok@gmail.com";
// $subject = "Sending this mail from server";
// $body = "Hi, This is test email send by PHP Script";
$headers = "From: ". $visitor_email;

function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}

// $mailSent = mail($to_email, $subject, $body, $headers);

if (mail($to_email, $email_subject, $email_body, $headers)) {
    $_SESSION['mailConfirmation'] = 'Mail sent';
    header('Location: ./index.php');
} else {
    echo "Email sending failed...";
}
