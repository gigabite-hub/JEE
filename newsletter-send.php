<?php
require "config.php";
require "lib/phpmailer/class.phpmailer.php";

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

	$email = strip_tags($_POST['email']);
	$subject = ' AskMIA™ Newsletter Sign Up Request';

	$ip = $_SERVER['REMOTE_ADDR']; 
	$httpref = $_SERVER['HTTP_REFERER']; 
	$httpagent = $_SERVER['HTTP_USER_AGENT']; 
	$today = date("F j, Y, g:i a");    
	
	$recipient = 'info@jibbio.com';
	//$recipient = 'alrahmahsolutions@gmail.com';

	$body = "
Email: $email 

IP: $ip
Browser info: $httpagent
Referral: $httpref
Sent: $today
";
	$mail = new PHPMailer();
	$mail->From = 'info@jibbio.com';
	$mail->FromName = $email; 
	$mail->AddReplyTo($email); 
	$mail->AddAddress($recipient);
	$mail->Subject = $subject;
	$mail->Body = $body;

	if ($mail->send()) {
		die("1");
	}
}
die("0");
?>