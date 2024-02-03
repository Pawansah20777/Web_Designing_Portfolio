<?php

use PHPMailer\PHPMailer\PHPMailer;



use PHPMailer\PHPMailer\Exception;



require 'PHPMailer/src/Exception.php';



require 'PHPMailer/src/PHPMailer.php';



require 'PHPMailer/src/SMTP.php';



$mail = new PHPMailer(true);



try {



$mail->isSMTP();   //Send using SMTP



    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through



$mail->SMTPAuth = true;                           //Enable SMTP authentication



$mail->Username= 'psah770@rku.ac.in';                     //SMTP username



$mail->Password= 'P8771685';    //SMTP password



$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           //Enable implicit TLS encryption



$mail->Port= 465;



//TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`;



//Recipients



$mail->setFrom('psah770@rku.ac.in','PAWAN SAH'); // Your name to display



$mail->addAddress('ryadav081@rku.ac.in'); //Add a recipient



//$mail->addAddress('ellen@example.com');           //Name is optional



//$mail->addReplyTo('info@example.com', 'Information');



//$mail->addCC('cc@example.com');



//$mail->addBCC('bcc@example.com');





//Attachments



//$mail->addAttachment('/var/tmp/file.tar.gz');      //Add attachments



//$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name





//Content



$mail->isHTML(true);  //Set email format to HTML



$mail->Subject = 'Testing Mail sending using xampp';



$mail->Body    = 'Hey there I am trying to send mail from localhost using xampp server';





$mail->send();



echo 'Message has been sent';



}



catch (Exception $e) {



echo "Message could not be sent. Mailer Error:



{$mail->ErrorInfo}";



}



?>