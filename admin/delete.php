<html>
<head>

	<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                

</head>
<?php 
error_reporting(0);
include 'connect.php';
$delete=$_GET['CourseID'];

$qq=mysql_query("select * FROM `tblcourse` WHERE CourseID='$delete'");
$r2=mysql_fetch_array($qq);

$result=mysql_query("DELETE FROM `tblcourse` WHERE CourseID='$delete'");
unlink("upload/".$r2['Image']);	

//header("location:view_Course.php");
if($result)
{
	echo "<script>
			window.location.href='view_Course.php#rec_delete';
	</script>";
}

?> 
<body>


</body>
 </html>