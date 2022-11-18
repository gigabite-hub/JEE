<?php
require "config.php";
//require "lib/phpmailer/class.phpmailer.php";

require("newtest/PHPMailer-master/src/PHPMailer.php");
require("newtest/PHPMailer-master/src/SMTP.php");
require ("newtest/PHPMailer-master/src/Exception.php");
  

if (isset($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) { 

	// RECAPTCHA VERIFICATION //
	require_once('recaptcha/recaptchalib.php');
	
	# the response from reCAPTCHA
	$resp = null;

	# the error code from reCAPTCHA, if any
	$error = null;

	$captcha_error = false;
	$response = $_POST["g_recaptcha_response"];
	if ($response != "") { 
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$data = array(
			'secret' => $reCaptcha_privatekey,
			'response' => $response
		);
		$options = array(
			'http' => array (
				'method' => 'POST',
				'content' => http_build_query($data)
			)
		);
		$context  = stream_context_create($options);
		$verify = file_get_contents($url, false, $context);
		$captcha_success = json_decode($verify);
		if ($captcha_success->success == false) {
			$captcha_error = true;
		}
	}
	else {
		$captcha_error = true;
	}
	if ($captcha_error) {
		die ("2");
	}

	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	$from = $email;
	$phone = strip_tags($_POST['phone']);
	$subject = ' AskMIA™ Website Enquiry';
	$message = strip_tags($_POST['message']);
	$header = "From: ". $name . " <" . $email . ">rn"; 

	$ip = $_SERVER['REMOTE_ADDR']; 
	$httpref = $_SERVER['HTTP_REFERER']; 
	$httpagent = $_SERVER['HTTP_USER_AGENT']; 
	$today = date("F j, Y, g:i a");    
	
	$recipient = 'info@jibbio.com';
	//$recipient = 'muhrizwan@gmail.com';

	$body = "
Name: $name 
Email: $email 
Mobile: $phone 
Message: $message

IP: $ip
Browser info: $httpagent
Referral: $httpref
Sent: $today";

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->isMail(); // enable SMTP
$mail->IsHTML(true);
$mail->SetFrom("mark@jibbio.com");
$mail->Subject = $subject;
 $mail->Body = $body;
$mail->AddAddress($recipient);
if(!$mail->Send()) {
        die("0");
     } else {
        die("1");
     }
	
	/*$mail = new PHPMailer();
	$mail->From = $email;
	$mail->FromName = $name; 
	$mail->AddReplyTo($email); 
	$mail->AddAddress($recipient);
	$mail->Subject = $subject;
	$mail->Body = $body;

	if ($mail->send()) {
		die("1");
	}*/
	
/*$text = $body;
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: ' . $from . "\r\n";
$boundary = "==MULTIPART_BOUNDARY_".md5(time());
$headers = 'MIME-Version: 1.0' . "\n";
$headers .='From: '.$from. "\n";
$headers .='Reply-To: noreply@jibbio.com' . "\n";
$headers .='Content-type: multipart/alternative; boundary="'.$boundary.'"';
$headers .= "\n";
$rand = rand(2,254);
$message .= "Content-type: text/plain; charset=\"iso-8859-1\"\n\n";
$message .= preg_replace ('/<[^>]*>/', '', $text);
$message .= "\n\n--".$boundary."\n";
$message .= "Content-type: text/html; charset=\"iso-8859-1\"\n\n";
$message .= $text;
$message .= "\n\n--".$boundary."--";	


if (mail($recipient, $subject, $message, $headers,'-fnoreply@jibbio.com')){ die("1"); }else { die("0");}*/	
	
}
die("0");
?>