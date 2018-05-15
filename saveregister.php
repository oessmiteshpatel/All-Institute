<?php
ob_start();
include("admin/connect.php"); 
define('GUSER', 'aerexperts@gmail.com'); // GMail username
define('GPWD', 'W3lc0m32017'); // GMail password
//define('ADMIN_EMAIL', 'nilopeneyes@gmail.com');
//define('ADMIN_EMAIL', 'tmehta@theopeneyes.com');  //Admin EmailId  //manny@aerexperts.com   //Trushant Mehta <tmehta@theopeneyes.com>
define('ADMIN_EMAIL', 'aerexperts@gmail.com'); 
define('ADMIN_NAME', 'AERE');  //Admin Name
define('SITEURL','http://www.aerexperts.com/');
define('SMTPUSER', 'you@yoursmtp.com');
define('SMTPPWD', 'password'); 
define('SMTPSERVER', 'smtp.yoursmtp.com'); 

require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer();  
	
	
	function smtpmailer($to, $from, $from_name, $subject, $body) { 
			//echo $from." ".$from_name;
			global $error, $mail;
			$mail->IsSMTP(); // enable SMTP
			//$mail->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages only
			$mail->SMTPAuth = true;  // authentication enabled
			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
			
			$mail->SMTPSecure = 'ssl'; 
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 465;  //465 common port
			$mail->Username = GUSER;  
			$mail->Password = GPWD;             
			$mail->SetFrom($from, $from_name);
			$mail->Subject = $subject;
			$mail->IsHTML(true);
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
	//$mail->AddBCC('aerexperts@gmail.com', 'Aere Experts');
	//$mail->AddBCC('tmehta@theopeneyes.com', 'Trushant Mehta');
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo;
		return false;
	} else {
		$error = 'Message sent!';
		return true;
	} 
}

$courseName=$_REQUEST['course'];
if($_REQUEST['action']!=""){
if($_REQUEST['action']=="registerd"){
	

		//Get user detail
		$sql="select * from tblregister where  RegisterId='".$_SESSION['userId']."'";
		$res=mysql_query($sql);
		$rowregi=mysql_fetch_array($res);
		
		$firstname=$rowregi['FirstName'];
		$lastname=$rowregi['LastName'];
		$email=$rowregi['Email'];
		$address=$rowregi['Address'];
		$phone=$rowregi['Phone'];
		
		//get course name
		$sql="select * from tblcourse where CourseID ='".$_REQUEST['course']."'";
		$res=mysql_query($sql);
		$rowcourse=mysql_fetch_array($res);
		$courseName=$rowcourse['Title'];
		$Instructors=$rowcourse['Instructor'];
		$Instigator=$rowcourse['Instigator'];
		
		
		$StartDate=date('D, M, d, Y',strtotime($rowcourse['StartDate']));
		$EndDate =date('D, M, d, Y',strtotime($rowcourse['EndDate']));
		$Location=$rowcourse['Location'];
		
		$tTime=$rowcourse['Time'];
		$Audience=$rowcourse['IntendedAudience'];
		$Meeting=$rowcourse['MeetingType'];
		$Fees=$rowcourse['CourseFees'];
		$IsActive=1;
		$CreatedOn=date("Y-m-d H:s:i");
		 $sql="INSERT INTO tblcourseregistered(`RegisterId`,`CourseID` ,`IsActive`  ) VALUES('".$_SESSION['userId']."','".$_REQUEST['course']."', '$IsActive')";
			mysql_query($sql) or die($sql);
		
		$msg = '<html>
			<body>
				<div id="main">
					<div id="login">
						<table border="0" cellpadding="0" cellspacing="0">
							<tr>
							  <td>
								<p><img src="http://aerexperts.com/image/logo.png" alt="AERExperts" width="150" ></p>
								<p>Dear '.$_REQUEST['form-first-name'].',</p>
								<p>Thank you for your interest in the course '.$courseName.'. We have received your registration with the following detail:</p>
								<p><strong>First name</strong> : '.$firstname.'<br>
								  <strong>Last name</strong> : '.$lastname.'<br>
								  <strong>Email address</strong> : '.$email.'<br>
								  <strong>Address</strong> : '.$address.'<br/>
								  <strong>Phone number</strong> : '.$phone.'<br/></p>
								<p>Here is the course detail again:</p>
								<p> 
								<strong>Instructors</strong> :  '.$Instructors.'<br>
								<strong>Instigator</strong> : '.$Instigator.'<br>
								<strong>Start Date</strong> : '.$StartDate.'<br/>
								<strong>End Date</strong> : '.$EndDate.'<br/>
								  <strong>Location</strong> : '.$Location.'<br>
								  <strong>Time</strong> : '.$tTime.'<br>
								  <strong>Intended Audience</strong> : '.$Audience.'<br>
								  <strong>Meeting Type</strong> : '.$Meeting.'<br>
								  <strong>Fees</strong> : '.$Fees.'</p>
								<p>If you need to make any changes to this, please do not hesitate to contact us at <a href="mailto:Manny@AERExperts.com">Manny@AERExperts.com</a> or simply reply and someone will get back to you soon.</p>
								<p>Thank you,<br> <strong>AERE Team</strong></p>
							  </td>
							</tr>
						</table>
					</div>
				</div>
		 </body>
		</html>';
		$subj = 'AERE course '.$rowcourse['Title'].' registration detail';
		$to = $_REQUEST['form-email'];
		$from = ADMIN_EMAIL;
		$name = ADMIN_NAME;
		//Adminsection
		$adminsubj = 'New registration for course '.$rowcourse['Title'];
		$adminmsg  = '<html>
			<body>
				<div id="main">
					<div id="login">
						<table border="0" cellpadding="0" cellspacing="0">
							<tr>
							  <td>
								<p><img src="http://aerexperts.com/image/logo.png" alt="AERExperts"  width="150" ></p>
								<p>Hey Team,</p>
								<p>Someone just registered to take the course  '.$courseName.': </p>
								<p><strong>First name</strong> : '.$firstname.'<br>
								  <strong>Last name</strong> : '.$lastname.'<br>
								  <strong>Email address</strong> : '.$email.'<br>
								  <strong>Address</strong> : '.$address.'<br/>
								  <strong>Phone number</strong> : '.$phone.'<br/></p>
								
								<p><strong>Thank you,</strong><br> <strong>Your web team</strong></p>
							  </td>
							</tr>
						</table>
					</div>
				</div>
		 </body>
		</html>';
		if (smtpmailerdemo($to, $from, $name, $subj, $msg)) {
			smtpmailerdemo($from, $to, $name, $adminsubj, $adminmsg);
			echo "success";
		} else {
			if (!smtpmailer($to, $from, $name, $subj, $msg, false)) {
				if (!empty($error)) echo $error;
			} else {
				echo "success";
			}
		}
}
else if($_REQUEST['action']=="signUp"){
	try
	{							
	$uname = trim($_POST['email']);
	$email = trim($_POST['email']);
	$upass = trim($_POST['pass']);
	$code = md5(uniqid(rand()));
	
	$Query="SELECT * FROM tblregister WHERE Email='$email'";
	$res=mysql_query($Query);
	$noforow =mysql_num_rows($res);
	
	if($noforow > 0)
	{
		echo $msg = "Error";
	}
	else
	{
		
			$password = md5($upass);
			$CreatedBy=0;
			$IsActive=0;
			$FirstName=trim($_POST['firstname']);
			$LastName=trim($_POST['lastname']);
			$Address=trim($_POST['address']);
			$Phone=trim($_POST['Phone']);
			
			$sql="INSERT INTO tblregister(`UserName`,`Password` ,`FirstName` ,`LastName` , 	`Email`,`Address`,`Phone`,`ConfirmationCode`, `IsActive`,`CreatedBy` ) VALUES('$email','$upass', '$FirstName', '$LastName', '$email', '$Address', '$Phone', '$code', '$IsActive', '$CreatedBy')"; 
			mysql_query($sql) or die($sql);
			$id=mysql_insert_id();
			$key = base64_encode($id);
			$id = $key;
			$url=SITEURL;
			
			$message = '<html>
			<body>
				<div id="main">
					<div id="login">
						<table border="0" cellpadding="0" cellspacing="0">
							<tr>
							  <td>
								<p><img src="http://aerexperts.com/image/logo.png" alt="AERExperts" width="150" ></p>
								</td>
								</tr>
								<tr><td center>
								<h2>Welcome to AERE</h2>
								</td>
								</tr>
								<tr><td>
								<p>Dear '.$FirstName.',</p>
								<p>Thank you for joining AERE.
Please click on the link below to complete and activate your account with us.</p>
								<p><a href="'.$url.'verify.php?id='.$id.'&code='.$code.'">Click HERE</a></p>
								
								<p>Thank you,<br> <strong>AERE Team</strong></p>
							  </td>
							</tr>
						</table>
					</div>
				</div>
		 </body>
		</html>';
			
			 
						
			$subject = "AERE - Your registration confirmation";
						
			if (!smtpmailer($email, ADMIN_EMAIL, ADMIN_NAME, $subject, $message)) {
				if (!empty($error)) 
					echo $error;
			} else {
				echo $msg = "Success";
			}
			
				
	}
						
						
		}
		catch(PDOException $ex)
		{
			echo $ex->getMessage();
		}
		
	exit;
		
}
else if($_REQUEST['action']=="signIn"){
	
	$email = trim($_POST['email1']);
	$upass = trim($_POST['pass1']);
	$sql = "SELECT * FROM tblregister WHERE Email='$email' and password='$upass' LIMIT 1";
	$query= mysql_query($sql);
	$norow=mysql_num_rows($query);
	if($norow>0){
		$userRow=mysql_fetch_array($query);
		if($userRow['IsActive']=="1"){
			if($userRow['Password']==$upass){
				
				$_SESSION['userId'] = $userRow['RegisterId'];
					$_SESSION['userName'] = $userRow['UserName'];
					$_SESSION['userFirstName'] = $userRow['FirstName'];
					ob_clean();
					ob_start();
					echo $msg = "Success"; 
			}else{
				echo "<div class='alert alert-error'>Wrong email or password. Please try again!...</div>";
			}	
			exit;	
		}
		else
		{
			echo "<div class='alert alert-error'>Your account is inactive. Pleae contact to administration.</div>";
			exit;
		}
	}else{
		echo "<div class='alert alert-error'>Wrong email or password. Please try again!...</div>";
	}
	exit;
}
else if($_REQUEST['action']=="forgot"){
	$email = $_POST['email3'];
	
	$sql = "SELECT * FROM tblregister WHERE Email='$email' LIMIT 1";
	$query= mysql_query($sql);
	$row=mysql_fetch_array($query);
	$UserName=$row['UserName'];
	if(!empty($row)){
		$id = base64_encode($row['RegisterId']);
		$code = md5(uniqid(rand()));

		$Query="UPDATE tblregister SET ConfirmationCode='$code' WHERE Email='$email'";
		$res= mysql_query($Query);
		$url=SITEURL;
		$message= "
				   Hello , $UserName
				   <br /><br />
				   You recently requested to reset your password for your AERE account, If you do this then just click the following link to reset your password,
				   <br /><br />
				   Click Following Link To Reset Your Password 
				   <br /><br />
				   <a href='$url/resetpass.php?id=$id&code=$code'>Click here to reset your password</a>
				   <br />
				   <br />
				   If you did not request a password reset, Please ignore this email or reply to let us know.
				   <br />
				   <br />
				   Thank you :)<br />
				   Aere Team
				   ";
			$subject = "Forgot password";
			$to=$email;
		
			if (!smtpmailer($email, ADMIN_EMAIL, ADMIN_NAME, $subject, $message)) {
				if (!empty($error)) 
					echo $error;
			} else {
				echo $msg = "<div class='alert alert-success'>
					We've sent an email to $email.
                    Please click on the password reset link in the email to generate new password. 
			  	</div>";
			}
	}
	else
	{
		echo $msg = "<div class='alert alert-danger'>
					
					Email is not registered!. 
			    </div>";
	}

}
}// end of action condition
?>