<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>All-Institute | Change password</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php
include 'side_bar.php';
include 'header.php';
include 'connect.php';
include 'functions.php';




$error = false;

if(isset($_POST['save']))
		{
		$oldpass=$_POST['oldpass'];
		$newpass=$_POST['newpass'];
		$repass=$_POST['repass'];
                
		$chg_pwd=mysql_query("select * from admin where id='1'");
		$chg_pwd1=mysql_fetch_array($chg_pwd);
                
		$data_pwd=$chg_pwd1['password'];
                
		if($data_pwd==$oldpass){
                    
		if($newpass==$repass){
                    
	         $update_pwd=mysql_query("update admin set password='$newpass' where id='1'");
			 ?>
						<center><div class="alert alert-success" id="update_pass" style="width:1200px; margin:0px 0px 10px 0px">
									<strong>Updated successfully!</strong>
								</div>	  
						</center>
	<script>
		setTimeout(function() {
		$('#update_pass').fadeOut('hide');
		}, 10000);
					
	</script>					
	<?php
		}
		else{
            ?>
            <center><div class="alert alert-danger" id="update_pass_not" style="width:1200px; margin:0px 0px 10px 0px">
                        <strong>Your new and retype password is not match!</strong>
                    </div>	  
            </center>
<script>
setTimeout(function() {
$('#update_pass_not').fadeOut('hide');
}, 10000);
        
</script>					
<?php

			//echo "<script>alert('Your new and Retype Password is not match'); </script>";
		}
		}
		else
		{

            ?>
            <center><div class="alert alert-danger" id="update_pass_old" style="width:1200px; margin:0px 0px 10px 0px">
                        <strong>Your old password is wrong!</strong>
                    </div>	  
            </center>
<script>
setTimeout(function() {
$('#update_pass_old').fadeOut('hide');
}, 10000);
        
</script>					
<?php

		//echo "<script>alert('Your old password is wrong'); </script>";
		}
                
                }
?>
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
         <div class="panel-heading">      
                     <h3 class="panel-title"><b>Change password</b> </h3>  
                     
                     </div>
            </div>
            <div class="box">

                <script src="js/index.js"></script>
                <form name="form_register" id='' method="post" class="my_frm"  enctype="multipart/form-data" >

                    <table class="table">

                        <tr>
                            <th width="30%"> Old Password :</th>

                            <td><input type="password" name="oldpass" id="Title" class="form-control" placeholder="Old Password"/></td>
                        </tr>
                        <tr>
                            <th width="30%">New Password :</th>

                            <td><input type="password" name="newpass" id="OfferedBy" class="form-control" placeholder="New Password"/></td>
                        </tr>
                        <tr>
                            <th>Confirm password :</th>

                            
                                 <td><input type="password" name="repass" id="OfferedBy" class="form-control" placeholder="Confirm password"/></td>
                          
                        </tr>
                        

                        <tr>
                            <th>&nbsp;</th>

                            <td><input type="submit" name="save" class="btn btn-warning"  value="Save" /></td>

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



</html>

<?php ob_end_flush(); ?>
