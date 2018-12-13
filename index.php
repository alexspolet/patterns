<?php



// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

echo 1;

//Load Composer's autoloader
require 'vendor/autoload.php';
/*
$mail = new PHPMailer;
$mail->CharSet = 'UTF-8';
try {
	$mail->setFrom('vasikularesov0@bigmir.net', 'vasea');
	$mail->addAddress('lelikpolet@gmail.com', 'teves');     // Add a recipient
	//Content
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = 'New subject';
	$mail->Body    = '<p>body</p>';
	$mail->AltBody = 'altbody';

	$mail->send();
	echo 'Message has been sent';
} catch (Exception $e) {
	echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
*/






// Create the Transport
// Sendmail
$transport = new Swift_SendmailTransport('/usr/bin/fakesendmail.sh -bs');
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);
// Create a message
$message = (new Swift_Message('Wonderful Subject'))
		->setFrom(['john@doe.com' => 'John Doe'])
		->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
		->setBody('Here is the message itself')
;

// Send the message
$result = $mailer->send($message);
