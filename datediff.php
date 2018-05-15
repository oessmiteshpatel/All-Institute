
<?php

$now = time(); // or your date as well
$your_date = strtotime("2010-01-01");
$datediff = $now - $your_date;
echo floor($datediff / (60 * 60 * 24));



define('GUSER', 'nilopeneyes@gmail.com'); // GMail username
define('GPWD', 'sai@10nisi'); // GMail password

define('SMTPUSER', 'you@yoursmtp.com'); // sec. smtp username
define('SMTPPWD', 'password'); // sec. password
define('SMTPSERVER', 'smtp.yoursmtp.com'); // sec. smtp server
 require 'phpmailer/PHPMailerAutoload.php';
 $mail = new PHPMailer();  // create a new object
function smtpmailer($to, $from, $from_name, $subject, $body) { 
	global $error, $mail;
	
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465; 
	$mail->Username = GUSER;  
	$mail->Password = GPWD;           
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Message sent!';
		return true;
	}
}

function smtpmailerdemo($to, $from, $from_name, $subject, $body, $is_gmail = true) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true; 
	if ($is_gmail) {
		$mail->SMTPSecure = 'ssl'; 
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465;  
		$mail->Username = GUSER;  
		$mail->Password = GPWD;   
	} else {
		$mail->Host = SMTPSERVER;
		$mail->Username = SMTPUSER;  
		$mail->Password = SMTPPWD;
	}        
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo;
		return false;
	} else {
		$error = 'Message sent!';
		return true;
	}
}


$msg = 'Hello World';
$subj = 'test mail message';
$to = 'php221978@gmail.com';
$from = 'from@mail.com';
$name = 'yourName';
 
if (smtpmailerdemo($to, $from, $name, $subj, $msg)) {
	echo 'Yippie, message send via Gmail';
} else {
	if (!smtpmailer($to, $from, $name, $subj, $msg, false)) {
		if (!empty($error)) echo $error;
	} else {
		echo 'Yep, the message is send (after doing some hard work)';
	}
}

/*
if (smtpmailer('to@mail.com', 'from@mail.com', 'yourName', 'test mail message', 'Hello World!')) {
	// do something
}
if (!empty($error)) echo $error;
*/
?>