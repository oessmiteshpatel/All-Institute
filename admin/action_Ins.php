<?php
include 'connect.php';
if(isset($_GET['IsActive']))
{
	$status1=$_GET['IsActive'];
	$select=mysql_query("select * from tblmstinstructor where InsId='$status1'");
	while($row=mysql_fetch_object($select))
	{
		$status_var=$row->IsActive;
		if($status_var=='0')
		{
			$status_state=1;
		}
		else
		{
			$status_state=0;
		}
		$update=mysql_query("update tblmstinstructor set IsActive='$status_state' where InsId='$status1' ");
		if($update)
		{
			header("Location:view_Instructor.php");
		}
		else
		{
			echo mysql_error();
		}
	}
}
?>
