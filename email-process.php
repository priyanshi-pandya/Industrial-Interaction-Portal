 <?php

// require 'email_code/PHPMailer/PHPMailerAutoload.php';

// $mail = new PHPMailer;
// $mail->SMTPDebug = 3;                               // Enable verbose debug output

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = 'smtp.mandrillapp.com';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'premapanditya01@gmail.com';                 // SMTP username
// $mail->Password = '1ced8e5d0d276b3fd0973ada1787f8dd-us9';                           // SMTP password
// $mail->Port = 587;                                    // TCP port to connect to

// $mail->From = 'premapanditya01@gmail.com';
// $mail->FromName = 'Test phpmailer';
// $mail->addAddress('pandyapriyanshi16@gmail.com');               // Name is optional

// $mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Here is the subject';
// $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

// $mail->SMTPSecure = 'tls';
// $mail->Host = 'smtp.mandrillapp.com';
// if(!$mail->send()) {
//     echo 'Message could not be sent.';
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message has been sent';
// }




require 'email_code/PHPMailer/PHPMailerAutoload.php';
require 'email_code/PHPMailer/class.phpmailer.php';
require 'email_code/PHPMailer/class.smtp.php';


// if(!isset($_GET['submit']))
// {
// 	echo "Direct URL Called";
// 	exit();
// }
	$name='abc';
	$email='pandyapriyanshi16@gmail.com';
	$contact=1111111111;
	$msg='sdesfs';

	$body="Name is : $name<br>
		   Email is : $email<br>
		   Contact is : $contact<br>
		   Message is : $msg<br><br>";
	echo $body;

	$sub="Contact Form Submitted From Website";
	$mail = new PHPMailer;

	$mail->isSMTP();                                   // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                            // Enable SMTP authentication
	$mail->Username = 'premapanditya01@gmail.com';          // SMTP username
	$mail->Password = 'mp4PaulWalker'; // SMTP password
	$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                 // TCP port to connect to

	$mail->setFrom('premapanditya01@gmail.com', 'IIP');
	$mail->addReplyTo('premapanditya01@gmail.com', 'IIP');
	$mail->addAddress($email);   // Add a recipient
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');
	$mail->isHTML(true);  // Set email format to HTML

	$bodyContent = $body;
	
	$mail->Subject = $sub;
	$mail->Body    = $bodyContent;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}
?> 