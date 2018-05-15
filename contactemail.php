<?php

ob_start();
include("config.php"); 
define('GUSER', 'mitesh.patel@theopeneyes.in'); // GMail username
define('GPWD', 'W3lc0me'); // GMail password
//define('GUSER', 'aerexperts@gmail.com'); // GMail username
//define('GPWD', 'W3lc0m32017'); // GMail password
define('ADMIN_EMAIL', 'mitesh.patel@theopeneyes.in');
//define('ADMIN_EMAIL', 'manny@aerexperts.com');  //Admin EmailId  //manny@aerexperts.com   //Trushant Mehta <tmehta@theopeneyes.com>
//define('ADMIN_EMAIL', 'aerexperts@gmail.com'); 
define('ADMIN_NAME', 'AERE');  //Admin Name
define('SITEURL','http://demobyopeneyes.com/demo/aere/');
define('SMTPUSER', 'you@yoursmtp.com');
define('SMTPPWD', 'password'); 
define('SMTPSERVER', 'smtp.yoursmtp.com'); 

if($_SERVER["REQUEST_METHOD"] === "POST")
{

    $recaptcha_secret = "6LfG9jcUAAAAAGd0qwYj3XLt5o-DSvGGSUmORGQO";
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$recaptcha_secret."&response=".$_POST['g-recaptcha-response']);
    $response = json_decode($response, true);

    if($response["success"] === true){
       
		?>
		<script type="text/javascript">
		parent.document.getElementById("message").innerHTML =  "We received your message. We will get back to you shortly!";
		parent.document.getElementById("message").style.color = "";
		</script>
		<?php
    }else{
       
		?>
		<script type="text/javascript">
		parent.document.getElementById("message").innerHTML =  "Please prove that you are not a bot by clicking the checkbox";
		parent.document.getElementById("message").style.color = "#ff0000";
		</script>
		<?php
		exit;
    }

}

require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer();  


function smtpmailerdemo($to, $from, $from_name, $subject, $body, $is_gmail = true) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true; 
	if ($is_gmail) {
		$mail->SMTPSecure = 'ssl'; 
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 465;  //465 common port
		$mail->Username = GUSER;  
		$mail->Password = GPWD;   
	} else {
		$mail->Host = SMTPSERVER;
		$mail->Username = SMTPUSER;  
		$mail->Password = SMTPPWD;
	}        
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	//$mail->Body =  html_entity_decode($Body);
	$mail->IsHTML(true);
	$mail->Body = $body;
	$mail->AddAddress($to);
	$mail->AddCC(ADMIN_EMAIL, ADMIN_NAME);
	//$mail->AddBCC('aerexperts@gmail.com', 'Nitin Shirasad');
	//$mail->AddBCC('tmehta@theopeneyes.com', 'Trushant Mehta');
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo;
		return false;
	} else {
		$error = 'Message sent!';
		return true;
	} 
}
$firstname=$_POST['input_1'];
$phone=$_POST['input_2'];
$email=$_POST['input_3'];
$remark=$_POST['input_4'];
$msg = '<html>
			<body>
				<div id="main">
					<div id="login">
						<table border="0" cellpadding="0" cellspacing="0">
							<tr>
							  <td>
								<p><img src="http://aerexperts.com/image/logo.png" alt="AERExperts" width="150" ></p>
								<p>Hello admin,
								<p>Below aere contact detail:</p>
								<p><strong>Name</strong> : '.$firstname.'<br>
								  <strong>Phone number</strong> : '.$phone.'<br>
								  <strong>Email address</strong> : '.$email.'<br>
								  <strong>Remark</strong> : '.$remark.'<br/>
								
								<p>Thank you,<br> <strong>'.$firstname.'</strong></p>
							  </td>
							</tr>
						</table>
					</div>
				</div>
		 </body>
		</html>';

$subj = 'AERE Contact infomration';
		$to = $email;
		$from = ADMIN_EMAIL;
		//Adminsection
if (smtpmailerdemo($from, $to, $name, $subj, $msg)) { ?>
<script type="text/javascript">
	parent.document.getElementById("input_6_1").value = "";
	parent.document.getElementById("input_6_2").value =  "";
	parent.document.getElementById("input_6_3").value =  "";
	parent.document.getElementById("input_6_4").value =  "";
	parent.document.getElementById("message").innerHTML =  "We received your message. We will get back to you shortly!";
	parent.document.getElementById("message").style.color = "";
</script>
<?php }else{ ?>
<script type="text/javascript">
	
	parent.document.getElementById("message").innerHTML =  "Please check your email id there is error for sending email";
		parent.document.getElementById("message").style.color = "#ff0000";
	
</script>	
<?php } ?>
