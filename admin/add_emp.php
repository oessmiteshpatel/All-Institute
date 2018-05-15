<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>jQuery UI Datepicker - Default functionality</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function () {
        $("#datepicker").datepicker();
        $("#datepicker1").datepicker();
    });
</script>

<?php
include 'side_bar.php';
include 'header.php';
include 'connect.php';
include 'functions.php';




$error = false;

if (isset($_POST['save'])) {

    // clean user inputs to prevent sql injectionfs
    $fname = trim($_POST['fname']);
    $fname = strip_tags($fname);
    $fname = htmlspecialchars($fname);



    $lname = trim($_POST['lname']);
    $lname = strip_tags($lname);
    $lname = htmlspecialchars($lname);

    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $skype = trim($_POST['skype']);
    $skype = strip_tags($skype);
    $skype = htmlspecialchars($skype);

    $inkdin = trim($_POST['inkdin']);
    $inkdin = strip_tags($inkdin);
    $inkdin = htmlspecialchars($inkdin);

    $dob = trim($_POST['dob']);
    $dob = strip_tags($dob);
    $dob = htmlspecialchars($dob);

    $month = trim($_POST['month']);
    $month = strip_tags($month);
    $month = htmlspecialchars($month);

    $phone = trim($_POST['phone']);
    $phone = strip_tags($phone);
    $phone = htmlspecialchars($phone);

    $phone1 = trim($_POST['phone1']);
    $phone1 = strip_tags($phone1);
    $phone1 = htmlspecialchars($phone1);

    $address1 = trim($_POST['address1']);
    $address1 = strip_tags($address1);
    $address1 = htmlspecialchars($address1);

    $address2 = trim($_POST['address2']);
    $address2 = strip_tags($address2);
    $address2 = htmlspecialchars($address2);

    $city = trim($_POST['city']);
    $city = strip_tags($city);
    $city = htmlspecialchars($city);

    $state = trim($_POST['state']);
    $state = strip_tags($state);
    $state = htmlspecialchars($state);

    $zip = trim($_POST['zip']);
    $zip = strip_tags($zip);
    $zip = htmlspecialchars($zip);

    $companyId = trim($_POST['companyId']);
    $companyId = strip_tags($companyId);
    $companyId = htmlspecialchars($companyId);

    $company = trim($_POST['company']);
    $company = strip_tags($company);
    $company = htmlspecialchars($company);

    $agencyId = trim($_POST['agencyId']);
    $agencyId = strip_tags($agencyId);
    $agencyId = htmlspecialchars($agencyId);

    $agency = trim($_POST['agency']);
    $agency = strip_tags($agency);
    $agency = htmlspecialchars($agency);

    $agency = trim($_POST['agency']);
    $agency = strip_tags($agency);
    $agency = htmlspecialchars($agency);

    $bestTime = trim($_POST['bestTime']);
    $bestTime = strip_tags($bestTime);
    $bestTime = htmlspecialchars($bestTime);

    $a_date = trim($_POST['a_date']);
    $a_date = strip_tags($a_date);
    $a_date = htmlspecialchars($a_date);

    $a_time = trim($_POST['a_time']);
    $a_time = strip_tags($a_time);
    $a_time = htmlspecialchars($a_time);

    $avalible = trim($_POST['avalible']);
    $avalible = strip_tags($avalible);
    $avalible = htmlspecialchars($avalible);

    $avalibleJoin = trim($_POST['avalibleJoin']);
    $avalibleJoin = strip_tags($avalibleJoin);
    $avalibleJoin = htmlspecialchars($avalibleJoin);

    $visa = trim($_POST['visa']);
    $visa = strip_tags($visa);
    $visa = htmlspecialchars($visa);

    $clientBill = trim($_POST['clientBill']);
    $clientBill = strip_tags($clientBill);
    $clientBill = htmlspecialchars($clientBill);

    $minimumEx = trim($_POST['minimumEx']);
    $minimumEx = strip_tags($minimumEx);
    $minimumEx = htmlspecialchars($minimumEx);

    $currentPay = trim($_POST['currentPay']);
    $currentPay = strip_tags($currentPay);
    $currentPay = htmlspecialchars($currentPay);

    $conform = trim($_POST['conform']);
    $conform = strip_tags($conform);
    $conform = htmlspecialchars($conform);

    $lastssn = trim($_POST['lastssn']);
    $lastssn = strip_tags($lastssn);
    $lastssn = htmlspecialchars($lastssn);

    $reson = trim($_POST['reson']);
    $reson = strip_tags($reson);
    $reson = htmlspecialchars($reson);


    $note = trim($_POST['note']);
    $note = strip_tags($note);
    $note = htmlspecialchars($note);
    
    $highest  = trim($_POST['highest']);
    $highest  = strip_tags($highest);
    $highest  = htmlspecialchars($highest);
    
    $institute = trim($_POST['institute']);
    $institute = strip_tags($institute);
    $institute = htmlspecialchars($institute);
    
    $feedback = trim($_POST['feedback']);
    $feedback = strip_tags($feedback);
    $feedback = htmlspecialchars($feedback);
    
    $candidate = trim($_POST['candidate']);
    $candidate = strip_tags($candidate);
    $candidate = htmlspecialchars($candidate);
    
    $current = trim($_POST['current']);
    $current = strip_tags($current);
    $current = htmlspecialchars($current);
    
    $jobid = trim($_POST['jobid']);
    $jobid = strip_tags($jobid);
    $jobid = htmlspecialchars($jobid);
    
    $jobtitle = trim($_POST['jobtitle']);
    $jobtitle = strip_tags($jobtitle);
    $jobtitle = htmlspecialchars($jobtitle);
    
    $cemail = trim($_POST['cemail']);
    $cemail = strip_tags($cemail);
    $cemail = htmlspecialchars($cemail);
    
    $cname = trim($_POST['cname']);
    $cname = strip_tags($cname);
    $cname = htmlspecialchars($cname);
    
    $sender = trim($_POST['sender']);
    $sender = strip_tags($sender);
    $sender = htmlspecialchars($sender);
    
    $comment = trim($_POST['comment']);
    $comment = strip_tags($comment);
    $comment = htmlspecialchars($comment);

    if (!$error) {

        //$query = "INSERT INTO tbl_emp(user_name ,first_name ,last_name,company,email,group_id) VALUES('$user_name','$first_name','$last_name','$company','$email','$group_id')";
        $query = "INSERT INTO tbl_emp1(fname,lname,email,skype,inkdin,dob,month,phone,phone1,address1,address2,city,state,zip,companyId,company,agencyId,agency,bestTime,a_date,a_time,avalible,avalibleJoin,visa,clientBill,minimumEx,currentPay,conform,lastssn,reson,note,highest,institute,feedback,candidate,current,jobid,jobtitle,cemail,cname,sender,comment) VALUES('$fname','$lname','$email','$skype','$inkdin','$dob','$month','$phone','$phone1','$address1','$address2','$city','$state','$zip','$companyId','$company','1','The open Eyes','$bestTime','$a_date','$a_time','$avalible','$avalibleJoin','$visa','$clientBill','$minimumEx','$currentPay','$conform','$lastssn','$reson','$note','$highest','$institute','$feedback','$candidate','$current','$jobid','$jobtitle','$cemail','$cname','$sender','$comment')";
        $res = mysql_query($query);

        if ($res) {
            echo 'success';
            /*
              $errTyp = "success";
              $errMSG = "Successfully registered, you may login now";
              unset($fname);
              unset($mname);
              unset($lname);
              unset($email);
              unset($phone);
              unset($compay_id);image1
              unset($company);
              unset($address1);

              unset($address2);
              unset($city);
              unset($state);
              unset($agency_id);
              unset($agency);
              unset($ability);
              unset($a_date);
              unset($a_time);
              unset($salary);
              unset($s_date);
              unset($e_salary);
              unset($visa);
              unset($note);
             * 
             */
        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again later...";
        }
    }
    $id = mysql_insert_id();
    $imgFile = $_FILES['image1']['name'];
    $tmp_dir = $_FILES['image1']['tmp_name'];
    $imgSize = $_FILES['image1']['size'];

    $upload_dir = 'uploads/'; // upload directory

    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'doc', 'pdf', 'docx', 'txt', 'rtf'); // valid extensions
    // rename uploading image
    $userpic = $id . "_resume." . $imgExt;

    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions)) {
        // Check file size '5MB'
        if ($imgSize < 5000000) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic);
        } else {
            $errMSG = "Sorry, your file is too large.";
        }
    } else {
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }

    $imgFile1 = $_FILES['image2']['name'];
    $tmp_dir1 = $_FILES['image2']['tmp_name'];
    $imgSize1 = $_FILES['image2']['size'];

    $upload_dir = 'uploads/'; // upload directory

    $imgExt = strtolower(pathinfo($imgFile1, PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'doc', 'pdf', 'docx', 'txt', 'rtf'); // valid extensions
    // rename uploading image
    $userpic1 = $id . "_doc." . $imgExt;

    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions)) {
        // Check file size '5MB'
        if ($imgSize1 < 50000000000) {
            move_uploaded_file($tmp_dir1, $upload_dir . $userpic1);
        } else {
            $errMSG = "Sorry, your file is too large.";
        }
    } else {
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }

    $sql = "update tbl_emp1 set image1='$userpic',image2='$userpic1' where id='$id' ";
//mysql_query($sql);

    foreach ($_POST as $key => $value) {
        $v = "";
        $v = trim($value);
        $v = strip_tags($v);
        $v = htmlspecialchars($v);
        ${$key} = $v;
    }
    $variables = array();
    $inkdin = $POST['inkdin'];
    $variables['fullname'] = $fname . ' ' . $lname;
    $variables['currentlocation'] = $city . ' ' . $zip;
    $variables['inkdin'] = $_POST['inkdin'];
    $variables['visa'] = $visa;
    $variables['clientBill'] = $clientBill;
    $variables['experience'] = $experience;
    $variables['bestTime'] = $bestTime;
    $variables['avalible'] = $avalible;
    $variables['a_date'] = $a_date;
    $variables['qualification'] = $qualification;

    $variables['jobtitle'] = $jobtitle;
    $variables['feedback'] = $feedback;
    $variables['proposedrate'] = $proposedrate;
    if ($sender == "Mukut") {
        $sender = "Mukut Chatterjee";
        $senderemail = 'MChatterjee@TheOpenEyes.in';
    } elseif ($sender == "Swar") {
        $sender = "Swar Pandya";
        $senderemail = 'spandya@theopeneyes.in';
    } elseif ($sender == "Gopal") {
        $sender = "Gopal Chauhan";
        $senderemail = 'gchauhan@theopeneyes.in';
    }
    $variables['senderemail'] = $senderemail;
    $variables['sender'] = $sender;
    $template = file_get_contents("email03.html");
    $clientemail = 'nshirasad@theopeneyes.in';
    $variables['clientemail'] = $clientemail;
    foreach ($variables as $key => $value) {
        $template = str_replace('{{' . $key . '}}', $value, $template);
    }

    $template;

    $subj = "For the position of $jobtitle at $city $zip";
    $to = $_REQUEST['form-email'];
//$from = ADMIN_EMAIL;
//$name = ADMIN_NAME;
//Adminsection
    $adminsubj = 'New registration for course PSY201';
    define('GUSER', 'myopeneyes3937@gmail.com'); // GMail username
    define('GPWD', 'Welcome@1234'); // GMail password
    define('ADMIN_EMAIL', 'tmehta@theopeneyes.com');  //Admin EmailId  //manny@aerexperts.com

    define('ADMIN_NAME', 'AERE');  //Admin Name


    define('SMTPUSER', 'you@yoursmtp.com');
    define('SMTPPWD', 'password');
    define('SMTPSERVER', 'smtp.yoursmtp.com');


    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer();

    function smtpmailer($to, $from, $from_name, $subject, $body) {
        $from = strtolower($from);
        global $error, $mail;
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 1;  // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true;  // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->Username = GUSER;
        $mail->Password = GPWD;
        $email->SetFrom('mchatterjee@theopeneyes.in', $from_name);
        $mail->Subject = $subject;
        $mail->IsHTML(true);
        $mail->Body = $body;
        $mail->AddAddress($to);
        if (!$mail->Send()) {
            $error = 'Mail error: ' . $mail->ErrorInfo;
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
        //$mail->AddCC(ADMIN_EMAIL, ADMIN_NAME);
        $mail->AddBCC('nitin2005mca@gmail.com', 'Nitin Shirasad');
        $mail->AddBCC('tmehta@theopeneyes.com', 'Trushant Mehta');
        if (!$mail->Send()) {
            $error = 'Mail error: ' . $mail->ErrorInfo;
            return false;
        } else {
            $error = 'Message sent!';
            return true;
        }
    }

    if (smtpmailerdemo($clientemail, $senderemail, $sender, $subj, $template)) {
        smtpmailerdemo($senderemail, $clientemail, $client, $subj, $template);
        echo "success";
    } else {
        echo "error not sendt";
        // if (!smtpmailer($clientemail, $senderemail, $sender, $subj, $template, false)) {
        if (!empty($error)) {
            echo $error;
        } else {
            echo "success";
        }
    }

}
?>


<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <script language = "Javascript">
                    function echeck(str) {

                        var at = "@"
                        var dot = "."
                        var lat = str.indexOf(at)
                        var lstr = str.length
                        var ldot = str.indexOf(dot)
                        if (str.indexOf(at) == -1) {
                            alert("Invalid E-mail ID")
                            return false
                        }

                        if (str.indexOf(at) == -1 || str.indexOf(at) == 0 || str.indexOf(at) == lstr) {
                            alert("Invalid E-mail ID")
                            return false
                        }

                        if (str.indexOf(dot) == -1 || str.indexOf(dot) == 0 || str.indexOf(dot) == lstr) {
                            alert("Invalid E-mail ID")
                            return false
                        }

                        if (str.indexOf(at, (lat + 1)) != -1) {
                            alert("Invalid E-mail ID")
                            return false
                        }

                        if (str.substring(lat - 1, lat) == dot || str.substring(lat + 1, lat + 2) == dot) {
                            alert("Invalid E-mail ID")
                            return false
                        }

                        if (str.indexOf(dot, (lat + 2)) == -1) {
                            alert("Invalid E-mail ID")
                            return false
                        }

                        if (str.indexOf(" ") != -1) {
                            alert("Invalid E-mail ID")
                            return false
                        }

                        return true
                    }

                    function ValidateForm() {
                        var emailID = document.form1.email

                        if ((emailID.value == null) || (emailID.value == "")) {
                            alert("Please Enter your Email ID")
                            emailID.focus()
                            return false
                        }
                        if (echeck(emailID.value) == false) {
                            emailID.value = ""
                            emailID.focus()
                            return false
                        }
                        return true
                    }
                </script>
                <script>
                    function phoneno() {
                        $('#phone').keypress(function (e) {
                            var a = [];
                            var k = e.which;

                            for (i = 48; i < 58; i++)
                                a.push(i);

                            if (!(a.indexOf(k) >= 0))
                                e.preventDefault();
                        });
                    }
                </script>
                <script typ="text/javascript" src="validation.js" >
                </script>
                <form name="form1" method="post" class="my_frm"  enctype="multipart/form-data">

                    <table class="table">

                        <tr>
                            <th width="30%">First Name :</th>

                            <td><input type="text" name="fname" id="fname" class="form-control" placeholder="First Name"/></td>
                        </tr>

                        <tr>
                            <th>Last Name :</th>

                            <td><input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name"/></td>
                        </tr>
                        <tr>
                            <th>Contact # :</th>

                            <td><input type="text" name="phone" id="phone" onkeypress="phoneno()" maxlength="10"  class="form-control" placeholder="Contact No"/></td>
                        </tr>

                        <tr>
                            <th>Alternate # :</th>

                            <td><input type="text" name="phone1" id="phone" onkeypress="phoneno()" maxlength="10" class="form-control" placeholder="Alternate No"/></td>
                        </tr>







                           <!--  <tr>
                                <th>Address1</th>
                            
                                <td><input type="text" name="address1" id="address1"  class="form-control" placeholder="Address1"/></td>
                            </tr>

                            <tr>
                                <th>Address2 </th>
                            
                                <td><input type="text" name="address2" id="address2"  class="form-control" placeholder="Address2"/></td>
                            </tr> -->

                        <tr>
                            <th>City</th>

                            <td><input type="text" name="city" id="city"  class="form-control" placeholder="City"/></td>
                        </tr>

                            <!-- <tr>
                                <th>State</th>
                            
                                <td><input type="text" name="state" id="state"  class="form-control" placeholder="State"/></td>
                            </tr> -->

                        <tr>
                            <th>Zip Code</th>

                            <td><input type="text" name="zip" id="state"  class="form-control" placeholder="Zip Code"/></td>
                        </tr>
                        <tr>
                            <th>Skype ID :</th>

                            <td><input type="text" name="skype" id="" class="form-control" placeholder="Skype ID:"/></td>
                        </tr>

                        <tr>
                            <th>LinkedIn URL:</th>

                            <td><input type="text" name="inkdin" id="" class="form-control" placeholder="Linkdin ID:"/></td>
                        </tr>
                        <tr>
                            <th>Email Address:</th>

                            <td><input type="text" name="email" id="email"  class="form-control" placeholder="Email"/></td>
                        </tr>
                        <tr>
                            <th>Work Authorization:</th>

                            <td><select name="visa" id="visa"  class="form-control" placeholder="Work Authorization" />
                        <option value="US Citizen">US Citizen</option>
                        <option value="Green Card">Green Card</option>
                        <option value="H1B">H1B</option>
                        <option value="H4 EAD">H4 EAD</option>
                        <option value="L2 EAD">L2 EAD</option>
                        <option value="GC EAD">GC EAD</option>
                        <option value="TN Visa">TN Visa</option>
                        <option value="OPT OR CPT">OTP/CPT</option>
                        <option value="Put H1B">Put H1B</option>
                        <option value="inspite of H1">inspite of H1</option>
                        </select></td>
                        </tr>

                        <tr>
                            <th>Proposed Rate :</th>

                            <td><input type="text" name="proposedrate" id="proposedrate"  class="form-control" placeholder="Proposed Rate"/></td>
                        </tr>

                        <tr>
                            <th>Minimum Expected Rate :</th>

                            <td><input type="text" name="minimumEx" id="minimumEx"  class="form-control" placeholder="Minimum Expected Rate"/></td>
                        </tr>

                        <tr>
                            <th>Current Pay Rate :</th>

                            <td>

                                <input type="text" name="currentPay" id="visa"  class="form-control" placeholder="Current Pay Rate"/></td>
                        </tr>
                        <tr>
                            <th>Total Experience</th>

                            <td><input type="text" name="experience" id="experience"  class="form-control" placeholder="Total Experience"/></td>
                        </tr>
                        <tr>
                            <th>Company Id</th>

                            <td><input type="text" name="companyId" id="agency_id"  class="form-control" placeholder="Company Id"/></td>
                        </tr>

                        <tr>
                            <th>Company</th>

                            <td>
                                <select name='company'class="form-control">
                                    <option selected="selected">select parent menu</option>

                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <th>Best Time to Call</th>

                            <td>
                                <select name="bestTime" id="bestTime" class="form-control" placeholder="Best Time to Call">
                                    <option value="Early Morning (6AM to 9AM)">Early Morning (6AM to 9AM)</option>
                                    <option value="Morning (9AM till 12PM)">Morning (9AM till 12PM)</option>
                                    <option value="Early Evening (3PM to 6PM)">Early Evening (3PM to 6PM)</option>
                                    <option value="Evening (6PM to 9PM)">Evening (6PM to 9PM)</option>
                                    <option value="Night (9PM to mid-night)">Night (9PM to mid-night)</option>
                                </select>

                            </td>
                        </tr>





                        <tr>
                            <th>Preferable Interview Type:</th>

                            <td><table><tr>
                                        <td width="10%"><input type="radio" class="form-control" name="avalible" value="In-Person" ></td>
                                        <td width="10%"> In-Person</td>
                                        <td width="10%"><input type="radio" class="form-control" name="avalible" value="Skype"></td>
                                        <td width="10%"> avalible<td>
                                        <td width="10%"><input type="radio" class="form-control" name="avalible" value="Telephone"></td>
                                        <td width="10%"> Telephone<td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th>Comfortable for Employment and Background check</th>

                            <td><table>
                                    <tr>
                                        <td width="10%"><input type="radio" class="form-control" name="conform" value="Yes" ></td><td width="10%"> Yes</td>
                                        <td width="10%"><input type="radio" class="form-control" name="conform" value="No"></td><td width="10%"> No</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <th>Last four SSN :</th>

                            <td><input type="text" name="lastssn" id="lastssn"  class="form-control" placeholder="Last four SSN"/></td>
                        </tr>
                        <tr>
                            <th>Birth Date & Month</th>

                            <td><table><tr>
                                        <td><input type="text" name="dob" id="date"  class="form-control" placeholder="Date"/></td><td><input type="text" name="month" id="month"  class="form-control" placeholder="month"/></td>
                                    </tr>
                                </table>

                            </td>
                        </tr>

                        <tr>
                            <th>Tentative Joining Date</th>



                            <td><input type="text" name="a_date" id="datepicker1"  class="form-control" placeholder="Tentative Joining Date"/></td>
                        </tr>
                        <tr>
                            <th>Reason for ending last assignment / Reason for searching a new job :</th>

                            <td>
                                <textarea  name="reson" id="reson"  class="form-control" placeholder="Reason for ending last assignment" rows="4" cols="50"/></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Highest Education Qualification :</th>

                            <td><input type="text" name="highest" id="qualification"  class="form-control" placeholder="Education Qaulification"/></td>
                        </tr>

                        <tr>
                            <th>Education Institute :</th>

                            <td><input type="text" name="institute" id="institute"  class="form-control" placeholder="Education Institute"/></td>
                        </tr>
                        <tr>
                            <th>Feedback by OpenEyesTech :</th>

                            <td><textarea name="feedback" id="feedback" class="form-control"rows="4" cols="50"/></textarea></td>
                        </tr>
                        <tr>
                            <th>Candidate ID  :</th>

                            <td><input type="text" name="candidate" id="candidate_id"  class="form-control" placeholder="Candidate ID"/></td>
                        </tr>
                        <tr>
                            <th>Current / Last Employer   :</th>

                            <td><input type="text" name="current" id="lastemployer"  class="form-control" placeholder="Current / Last Employer"/></td>
                        </tr>
                        <tr>
                            <th>Job ID from MyOpenEyes :</th>

                            <td><input type="text" name="jobid" id="Job ID from MyOpenEyes"  class="form-control" placeholder="Job ID from MyOpenEyes"/></td>
                        </tr>
                        <tr>
                            <th width="30%">Job Title :</th>

                            <td><input type="text" name="jobtitle" id="jobtitle" class="form-control" placeholder="Job Title"/></td>
                        </tr>
                        <tr>
                            <th>Email Address of the client :</th>

                            <td><input type="text" name="cemail" id="clientemail"  class="form-control" placeholder="Email Address of the client"/></td>
                        </tr>
                        <tr>
                            <th>Full name of the client :</th>

                            <td><input type="text" name="cname" id="client"  class="form-control" placeholder="Full name of the client"/></td>
                        </tr>
                        <tr>
                            <th>Sender :</th>

                            <td><select name="sender" id="sender"><option value="Mukut">Mukut</option>
                                    <option value="Swar">Swar</option>
                                    <option value="Gopal">Gopal</option>
                            </td>
                        </tr>
                        <tr>
                            <th>Recruiter’s comment :</th>

                            <td>
                                <textarea  name="comment" id="comment"  class="form-control" placeholder="Recruiter’s comment" rows="4" cols="50"/></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th>Resume :</th>

                            <td><input class="form-control" type="file" name="image1"  /></td>
                        </tr>

                        <tr>
                            <th>Skill Matrix :</th>

                            <td><input class="form-control" type="file" name="imagee2"  /></td>
                        </tr>

                        <tr>
                            <th>&nbsp;</th>

                            <td><input type="submit" name="save" onClick="return validateForm()" value="Save" class="btn btn-success"/></td>
                        </tr>
                    </table>
                </form>



            </div>
        </div>

    </div>


</div>
<!-- END PAGE CONTENT WRAPPER -->                                



<!-- END PAGE CONTENT -->
</div>
<?php
include 'footer.php';
?>
<!-- START PLUGINS -->
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
<!-- END PLUGINS -->

<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>  



<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/tableExport.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jquery.base64.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/html2canvas.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/jspdf.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/base64.js"></script>    


<!-- END PAGE PLUGINS -->

<!-- START TEMPLATE -->



<script type="text/javascript" src="js/plugins.js"></script>        
<script type="text/javascript" src="js/actions.js"></script>    
<script src="js/jquery.bvalidator.js"></script>
<script src="js/jquery.bvalidator-yc.js"></script>








<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->                      


<!-- START THIS PAGE PLUGINS-->        

<!-- END THIS PAGE PLUGINS-->  

<!-- START TEMPLATE -->

<script type="text/javascript">
                                $(document).ready(function () {
                                    $('.my-frm').bValidator();
                                });
</script>

</body>
</html>
<?php ob_end_flush(); ?>
