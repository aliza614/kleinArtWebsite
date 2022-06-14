<html>
    <body>
        <?php
            //drafting the message
            $fname=$_POST["fname"];
            //$lname=$_POST["lname"];
            //$email=$_POST["email"];
            //$message=$_POST["message"];
            $message="testing";
            //$full_message='from:'+$fname+' '+$lname+'\n\r'+$email+'\n\r'+$message;
            $subject='Someone just emailed you from your own site';
            //sending the message
            $to="alizaasdf1234@gmail.com";
            $headers="From: $email \r\n";
            $headers .="Reply-To: $email \r\n";
mail($to,$subject,/*$full_message*/$message);//, $headers);
        ?>
        Your email has been sent.
    </body>
</html>