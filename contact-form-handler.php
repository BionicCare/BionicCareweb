<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];


    $email_from = 'info@yourwebsite.com';

    $email_subject = "New Form Submission";
    
    $email_body =   "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "Mobile Number: $subject.\n".
                    "User Message: $message.\n";


    $to = "synergy.builderss@gmail.com@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");


?>