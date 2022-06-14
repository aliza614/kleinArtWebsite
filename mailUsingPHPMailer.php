<html>
    <body>
        <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Load Composer's autoloader
require 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
// require(__DIR__ . '\PHPMailer\src\Exception.php');
// require(__DIR__ . '\PHPMailer\src\PHPMailer.php');
// require(__DIR__ . '\PHPMailer\src\SMTP.php');
/*
            $fname=$_POST["name"];
            //$lname=$_POST["lname"];
            $email=$_POST["email"];
            //$message=$_POST["message"];
            $message="testing";
            //$full_message='from:'+$fname+' '+$lname+'\n\r'+$email+'\n\r'+$message;
            $subject='Someone just emailed you from your own site';
            //sending the message
            $to="alizaasdf1234@gmail.com";
            $headers="From: $email \r\n";
            $headers .="Reply-To: $email \r\n";
            mail($to,$subject,/*$full_message* /$message);


            //Create an instance; passing `true` enables exceptions
*/
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $_ENV['GMAIL_USERNAME'];                     //SMTP username
    $mail->Password   = $_ENV['GMAIL_PASSWORD'];                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //form results
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        preg_replace('/[^a-zA-Z0-9@.-_,]+/', '', $data);
        //$data = htmlspecialchars($data);
        return $data;
      }
    $email=test_input($_POST["email"]);
    $name=test_input($_POST["name"]);
    $message=test_input($_POST["message"].".  Your message was sent.");
    //Recipients
    $mail->setFrom("irisjkleinSMTP@gmail.com", "No reply");
    $mail->addAddress($email, $name);     //Add a recipient
    $mail->addAddress('irisjkleinSMTP@gmail.com');//CHANGE THIS TO IRIS'S EMAIL LATER               //Name is optional
    $mail->addReplyTo('iris@irisjklein.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Thank you for your message';
    $mail->Body    = $message;//'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = $message;//'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>
</body>
</html>
