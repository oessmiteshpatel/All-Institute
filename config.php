<?php  
	ob_start();
	error_reporting(1);
	session_start();
	$conn = mysql_connect('localhost', 'root', '');
	if (!$conn){
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("aere", $conn);
?>