<?php
$name= $_POST['name'];
$Visitor_email= $_POST['email'];
$subject= $_POST['Subject'];
$message= $_POST['message'];

$email_from = 'info@codewithZain.gmail';
$email_subject = 'New Form Submission';
$email_body = 'User name : $name.\n'.
             'User Email : $Visitor_email.\n'.
             'User Subject: $subject.\n'.
             'User message:$message.\n';
$to='zainkhalil218@gmail.com';
$headers = "From : $email_from \r\n";
$headers.="Reply_To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("location:contact.html");

?>