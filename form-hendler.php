<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form = 'nobodipdebnath452@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitir_email.\n".
                "Subject: $subject.n\".
                "User Message: $message.n\".;
                
                  
$to = 'nobodipdebnath45@gmail.com';

$headers = "Form:$email_form \r\n"; 

$headers = "Replay-To:$visitir_email \r\n"; 

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")

?>