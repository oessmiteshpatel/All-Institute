<?php
//file name : action
//Developer : nitin 
include 'connect.php';
if(isset($_GET['IsStatus']))
{
$status1=$_GET['IsStatus'];
$select=mysql_query("select * from tblcourse where CourseID='$status1'");
while($row=mysql_fetch_object($select))
{
$status_var=$row->IsStatus;
if($status_var=='0')
{
$status_state=1;
}
else
{
$status_state=0;
}
$update=mysql_query("update tblcourse set IsStatus='$status_state' where CourseID='$status1' ");
if($update)
{
header("Location:view_Course.php");
}
else
{
echo mysql_error();
}
}
?>
<?php
}
?>