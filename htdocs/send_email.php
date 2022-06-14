<?php
$name="aliza";
$message="testing 1234";
$email_from = 'yourname@yourwebsite.com';

$email_subject = "New Form submission";

$email_body = "You have received a new message from the user $name.\n".
                        "Here is the message:\n $message".

$to = "alizaasdf1234@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: ";//$visitor_email \r\n";

$headers .= "Cc: someone@domain.com \r\n";

$headers .= "Bcc: someoneelse@domain.com \r\n";

// Please specify your Mail Server - Example: mail.example.com.
ini_set("SMTP","tls://smtp.gmail.com");//"smtp.gmail.com");//"smtp-relay.gmail.com");
ini_set("mail.smtp.host", "smtp.googlemail.com");
// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port", 587);//,465);//587);//25);

// Please specify the return address to use
ini_set('sendmail_from', 'alizaasd1234@gmail.com');
//Must issue a STARTTLS command first.
mail($to,$email_subject,$email_body,$headers);
?>