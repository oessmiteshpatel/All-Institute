<?php
include 'side_bar.php';
include 'header.php';
include 'connect.php';
//include 'functions.php';
/*
if (isset($_REQUEST['save'])) {
    $newpass = $_POST['newpass'];
    $repass = $_POST['repass'];


    if ($newpass == $repass) {
        $zub = $_SESSION['zub'];

        $query = "update admin set `password`='" . $newpass . "' where `username`='" . $zub . "'";
        $ex = mysql_query($query);

        if ($ex) {
            // echo "PASSWORD CHANGED SUCESSFULLY";

            echo "<script>alert('Password Change Sussfully');</script>";
        }
         else if($ex) {
           echo "<script>alert('Password Do not Match ');</script>";
             }
        
    }
}
 * 
 */
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
			echo "<script>alert('Update Sucessfully'); </script>";
		}
		else{
			echo "<script>alert('Your new and Retype Password is not match'); </script>";
		}
		}
		else
		{
		echo "<script>alert('Your old password is wrong'); </script>";
		}
                
                }
?>
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form data-bvalidator-validate method="post" class="my-frm" enctype="multipart/form-data" >
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="3"><h3 style="text-align: center;">Change Password</h3></th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>Old Password</th>
                                <th>New Password</th>
                                <th>Re-Enter Password</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="password" name="oldpass" data-bvalidator="required" class="form-control" placeholder="Old Password"/></td>
                                <td><input type="password" name="newpass" data-bvalidator="required" class="form-control" placeholder="New Password"/></td>
                                <td><input type="password" name="repass" data-bvalidator="required" class="form-control" placeholder="Re-Entere Password"/></td>


                            </tr>
                        </tbody>


                        <thead>
                            <tr>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td><input type="submit" name="save" value="Save" class="btn btn-success"/></td>
                            </tr>
                        </tbody>
                    </table>
                </form>



            </div>
        </div>

    </div>


</div>
<!-- END PAGE CONTENT WRAPPER -->                                

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
<!-- END PAGE PLUGINS -->

<!-- START TEMPLATE -->



<script type="text/javascript" src="js/plugins.js"></script>        
<script type="text/javascript" src="js/actions.js"></script>    
<script src="js/jquery.bvalidator.js"></script>
<script src="js/jquery.bvalidator-yc.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.my-frm').bValidator();
    });
</script>
</body>
</html>

