<?php
$to   		= 'HristoPanev@outlook.com';
$name       = @trim(stripslashes($_POST['name'])); 
$from       = @trim(stripslashes($_POST['email'])); 
$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 


$headers   = '';
$headers .= "MIME-Version: 1.0";
$headers .= "Content-type: text/plain; charset=iso-8859-1";
$headers .= "From: {$name} <{$from}>";
$headers .= "Reply-To: <{$from}>";
$headers .= "Subject: {$subject}";
$headers .= "X-Mailer: PHP/".phpversion();

mail($to, $subject, $message, $headers);
header("Location:http://doyouknowit.000webhostapp.com/#contact"); 

die;
?>

