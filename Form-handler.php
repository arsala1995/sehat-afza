<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'sehatafza@gmail.com';


$email_subject = 'New Form Submission';


$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Subect: $subject.\n".
            "User Message: $message.\n";


$to = 'sehatafza@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";


mail($to, $email_subject, $email_body, $headers);


header("Locatiion: Contact.html");






?>