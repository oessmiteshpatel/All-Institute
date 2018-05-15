<link rel="stylesheet" href="css_new/all_ins.css">

<footer class="footer"  id="footer" role="contentinfo">
    <div id="inner-footer" class="wrap cf">
              <div class="m-all t-all d-3of4"> 
        <!--<div class="source-org copyright cf"><span>&copy; 2015. All Rights Reserved. </span>
                  <ul id="menu-terms" class="terms-nav terms-links">
            <li id="menu-item-484" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-484"><a href="http://elearning.tritraining.com.au" onclick="__gaTracker('send', 'event', 'outbound-widget', 'http://elearning.tritraining.com.au', 'eLearning Login');">eLearning Login</a></li>
            <li id="menu-item-471" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-471"><a href="terms-and-conditions/index.php">*^Terms and Conditions</a></li>
            <li id="menu-item-521" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-521"><a href="policies-and-procedures/index.php">Policies and Procedures</a></li>
            <li id="menu-item-474" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-474"><a href="audit-information/index.php">Audit Info &#038; Partnering Agencies</a></li>
          </ul>
                </div>-->
        
        <nav role="navigation" class="hom">
                  <ul id="menu-footer" class="footer-nav footer-links cf" style="margin: 13px 0 14px 0;">
           <!-- <div class="m-all t-all hot d-1of2 footer-logo"> <img src="image/footer-logo.png"> </div>
          

  <li id="menu-item-145" class="m-all t-all hot d-1of3">
                      <h3 class="heading">Our Story</h3>
                      <ul class="sub-menu ">
                <li id="menu-item-153" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-153"><a href="#">Assessment Services</a></li>
                <li id="menu-item-154" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-154"><a href="#">Educational Services</a></li>
                <li id="menu-item-155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-155"><a href="#">Research Services</a></li>
              </ul>
                    </li>

-->
            <li id="menu-item-42" class="m-all t-all hot d-1of2">
                      <h3 class="heading">Contact Us</h3>
                      <ul class="sub-menu" style="margin-top:21px;">
                <li id="menu-item-153" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-153"><i class="fa fa-home fa-footer"></i>Gaithersburg, MD 20879 , Located only 23 &nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;miles away from Washington, DC </li>
                <li id="menu-item-154" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-154"><i class="fa fa-phone fa-footer"></i><a href="tel:443-716-8075">443-716-8075</a></li>
                <li id="menu-item-155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-155"><i class="fa fa-envelope fa-footer"></i><a href="mailto:manny@aerexperts.com">manny@aerexperts.com</a></li>
                <li id="menu-item-155" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-155"><i class="fa fa-globe fa-footer"></i><a href="http://www.aerexperts.com" target="_blank">www.aerexperts.com</a></li>
              </ul>
                    </li>
          </ul>
                  <div id="recent-posts-2" class="widget widget_recent_entries">
            <h3 class="widgettitle">From the Blog</h3>
            <ul>
                      <li> <a href="#">Risky Business – Overcoming the fear of failure</a> </li>
                    </ul>
          </div>
        </nav>
      </div>
        
			<div class="m-all t-all hot d-1of4 footer-form d-form">
          <p class="form-msg">Send us a short message</p>
        <div id="message" style="color:blue;text-align:center;font-size:12px;"></div>
        
			<?php
	
	if(isset($_POST['send']))
	{
		$fname=$_POST['fname'];
		
		
		$contact=$_POST['contact'];
		$email=$_POST['email'];
		$remark=$_POST['remark'];
		$code=$_POST['code'];
		
		
		session_start();
		if(strcmp($_SESSION['code'],$_POST['code']) !=0)
		{
      // $errors["code"]="You entered Wrong Captcha Code";
			// echo "<script>alert('please try again code is wrong');
				
      // </script>";
      ?>
			
      <!-- <center><div class="alert alert-danger" id="insert_not_contact" style="width:800px; margin:0px 0px 0px 0px">
									<strong>Your record was not inserted successfully!</strong>
								</div>	  
						</center> -->
	<script>
		setTimeout(function() {
		$('#insert_not_contact').fadeOut('hide');
		}, 10000);
					
	</script>					
<?php
		}
		else
		{
	
						$insert=mysql_query("insert into tablcontact(Fname,Contact,Email,Remark)
						values('$fname','$contact','$email','$remark')");
						
						//var_dump($insert);
						//exit;
	
						if($insert)
						{?>
                        
							
							<?php 
							
							       require_once('email/class.phpmailer.php');
									$mail = new PHPMailer(); // create a new object
									$mail->IsSMTP(); // enable SMTP
									$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
									$mail->SMTPAuth = true; // authentication enabled
									$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
									$mail->Host = "smtp.gmail.com";
									$mail->Port = 465; // or 587
									$mail->IsHTML(true);
									$mail->FromName="OpenEyes Software Solutions Pvt.Ltd"; 
									$mail->Username = "myopeneyes3937@gmail.com";
									$mail->Password = "W3lc0m3@2018";
									$mail->SetFrom("myopeneyes3937@gmail.com");
									
									$mail->Subject = "User Visited";
									$mail->Body = " <img src='http://aerexperts.com/image/logo.png' height='80px' width='180px'> <br><br><br>
									Hello, <br/>
									
										User Visited  Email :$email<br/>
										User Visited Name : $fname<br/>
										User Visited contact Number : $contact<br/>
										
										User Contact :$pno<br/><br/><br/>
										
										Kind Regards, <br/>
										Thank You,<br/>
										Our Team <br/>";
									$mail->AddAddress('myopeneyes3937@gmail.com');
									if(!$mail->Send())
									{
										echo "Mailer Error: " . $mail->ErrorInfo;
									}
									else
									{
								
										echo ("<script>alert('record inserted...!');</script>");	
									}
							
						}
		}
		
	

	}
	
?>

		

    <div class='gf_browser_unknown gform_wrapper' id='gform_wrapper_6' >
	
		<form method="post" enctype="multipart/form-data" >
            <div class="gform_body">
                  <ul id="gform_fields_6" class="gform_fields top_label form_sublabel_below description_below">
                       <li id="field_6_1" class="gfield gfield_contains_required field_sublabel_below field_description_below">
                          <label class="gfield_label" for="input_6_1">First Name<span class="gfield_required">*</span></label>
                          <div class="ginput_container">
                            <input name="fname"  class="large" placeholder="* Your name" type="text" required oninvalid="this.setCustomValidity('Please enter your name')" oninput="setCustomValidity('')">
                          </div>
                      </li>
                    <li id="field_6_4" class="gfield field_sublabel_below field_description_below">
                        <label class="gfield_label" for="input_6_2">Phone</label>
                        <div class="ginput_container">
                            <input name="contact"  class="large"  placeholder="* Phone number" type="text" pattern="[0-9\-.\s]+" required oninvalid="this.setCustomValidity('Please enter only numeric without any special character')" oninput="setCustomValidity('')">
                        </div>
                    </li>
                    <li id="field_6_3" class="gfield gfield_contains_required field_sublabel_below field_description_below">
                          <label class="gfield_label" for="input_6_3">Email<span class="gfield_required">*</span></label>
                        <div class="ginput_container">
                          <input name="email"   class="large" placeholder="* Email" type="email" required oninvalid="this.setCustomValidity('Please enter a valid email address')" oninput="setCustomValidity('')">
                        </div>
                    </li>
					<li>
						<div class="m-all t-all hot d-1of2">
							<input  class="gform_button button" style="margin-top:10px;" value="Send" type="submit" name="send" />
						</div> 
					</li>
					</ul>
              
            </div>
			
           <div class="gform_body">
              <div class="ginput_container">
                 <textarea name="remark"  placeholder="* Remarks" required oninvalid="this.setCustomValidity('Please enter your remarks')" oninput="setCustomValidity('')"></textarea>
				
              </div>
              <tr>
					    <div class="ginput_container">
                          <input name="code" id="code" class="large" required placeholder="* Enter below code here" type="text"  required oninvalid="this.setCustomValidity('Please type the below code')" oninput="setCustomValidity('')">
						   <?php
								if(isset($errors["code"]))
								{
									echo $errors["code"];
								}
							?>
                        </div>
			  </tr>
            <tr>
            	
				
                <td>
                	<img src="generatecaptcha.php?rand=<?php echo rand(); ?>" style="margin-top:10px;" id="im">
                	
                   <a href='javascript:ref();'style="margin-top:10px;    float: right;
    margin-right: 52px;">
                    <h3> Refresh</h3>
                    </a>
                    
                	<script language="javascript">
						function ref()
						{
							var img=document.images['im'];	
							
							img.src=img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
						}
					</script>
                    
                </td>
                
            </tr>
           
      </div>
        </form>
         
    </div>
	
	
	
	
  </footer>
  <div class="copyright Provided-by">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 design col-md-offset-4">Provided by <a href="http://www.aerexperts.com/" target="_blank"> Assessment, Education & Research Experts</a></div>
      
    </div>
  </div>
</div>
<div class="copyright">
  <div class="container">
    <div class="row">
     
      <div class="col-md-4 col-sm-4 design col-md-offset-4"> Powered by <a style="color:white"; href="http://www.theopeneyes.com/" target="_blank">OpenEyes Technologies, Inc.</a></div>
    </div>
  </div>
</div>

<style>

  .copyright {
  background: rgba(48, 48, 46, 0.9) none repeat scroll 0 0;
  color: #fff;
  font-size: 13px;
  margin: 0;
  padding: 5px 0;
  position: relative;
  text-align: center;
}
.copyright .design a{ color:#fff; } 
.Provided-by .design a, .Provided-by{ font-size:14px; line-height:16px; } 
</style> 