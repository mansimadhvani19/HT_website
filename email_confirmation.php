<?php

/* 

Using phpmailer


        */
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// // Include PHPMailer library files
// // require 'path_to_phpmailer/Exception.php';
// // require 'path_to_phpmailer/PHPMailer.php';
// // require 'path_to_phpmailer/SMTP.php';
// require 'vendor/autoload.php';

// // Create a new PHPMailer instance
// $mail = new PHPMailer(true);

// try {
//     // SMTP configuration
//     $mail->isSMTP();
//     $mail->Host       = 'mail.happyteam.co.in'; // Enter your SMTP server hostname
//     $mail->Port       = 465; // Enter your SMTP server port number
//     $mail->SMTPAuth   = true;
//     $mail->Username   = 'contact@happyteam.co.in'; // Enter your email address
//     $mail->Password   = ';BiSwT0z_}o{'; // Enter your email password
//     $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, 'ssl' also accepted

//     // Sender and recipient details
//     $mail->setFrom('contact@happyteam.com', 'Happy Team'); // Enter the sender's email address and name
//     $mail->addAddress('madhvani.mansi19@gmail.com', 'Mansi Madhvani'); // Enter the recipient's email address and name

//     // Email content
//     $mail->isHTML(true);
//     $mail->Subject = 'Payment Confirmation';
//     $mail->Body    = 'Dear recipient,<br><br>This is to confirm that your payment of INR 100 has been received.<br><br>Regards,<br>Happy Team';

//     // Send the email
//     $mail->send();
//     echo 'Payment confirmation email sent successfully!';
// } catch (Exception $e) {
//     echo 'Error sending email: ', $mail->ErrorInfo;
// }



/* ------ using msg91-------*/



require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://control.msg91.com/api/v5/email/send', [
  'body' => '{"to":[{"name":"Delta","email":"sharmaaditya1718@gmail.com"}],"from":{"name":"HappyTeam","email":"no-reply@happyteam.co.in"},"domain":"mail.happyteam.co.in","template_id":"Payment-confirm","variables":{"customer":"aditya","amount":"8999"}}',
  'headers' => [
    'accept' => 'application/json',
    'authkey' => '400523AB65t9GB64a7c75bP1',
    'content-type' => 'application/json',
  ],
]);

echo $response->getBody();


?>

