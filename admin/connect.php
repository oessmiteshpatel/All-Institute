<?php

 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 session_start();
 // but I strongly suggest you to use PDO or MySQLi.
//$webstatus="developement";  //production, developement,local
  $webstatus="QA";  //production, developement,local
 //$webstatus="local";  //production, developement,local
 //$webstatus="production";  //production, developement,local

 
if($webstatus=="production"){
    // not valid
	define('DBHOST', 'PRDAERECourses.db.11797364.5bf.hostedresource.net');
	define('DBUSER', 'PRDAERECourses');
	define('DBPASS', 'Op3n3y3s@2017');
	define('DBNAME', 'PRDAERECourses');
	define('FROMNAME', 'AERE - All Institute Learning Institute');
	define('USERNAME', 'noreply.allinstitute@gmail.com');
	define('USERPASSWORD', '@ere1234');
	define('SETFROM', 'noreply.allinstitute@gmail.com');
	define('SETTO', 'noreply.allinstitute@gmail.com');
}else if($webstatus=="local"){
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'aere');
	define('FROMNAME', 'AERE - All Institute Learning Institute');
	define('USERNAME', 'myopeneyes3937@gmail.com');
	define('USERPASSWORD', 'W3lc0m3@2018');
	define('SETFROM', 'myopeneyes3937@gmail.com');
	define('SETTO', 'pooja.patel@theopeneyes.com');
}else if($webstatus=="developement"){
	define('DBHOST', 'DevAERECourses.db.11797364.2d8.hostedresource.net');
	define('DBUSER', 'DevAERECourses');
	define('DBPASS', 'W3lc0m3@2018');
	define('DBNAME', 'DevAERECourses');
	define('FROMNAME', 'AERE - All Institute Learning Institute');
	define('USERNAME', 'noreply.allinstitute@gmail.com');
	define('USERPASSWORD', '@ere1234');
	define('SETFROM', 'noreply.allinstitute@gmail.com');
	define('SETTO', 'noreply.allinstitute@gmail.com');
}else if($webstatus=="QA"){
	define('DBHOST', 'QAAERECourses.db.11797364.a8d.hostedresource.net');
	define('DBUSER', 'QAAERECourses');
	define('DBPASS', 'Op3n3y3s@2017');
	define('DBNAME', 'QAAERECourses');
	define('FROMNAME', 'AERE - All Institute Learning Institute');
	define('USERNAME', 'noreply.allinstitute@gmail.com');
	define('USERPASSWORD', '@ere1234');
	define('SETFROM', 'noreply.allinstitute@gmail.com');
	define('SETTO', 'tmehta@theopeneyes.com');
}
 
 $conn = mysql_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysql_select_db(DBNAME);


 // this will avoid mysql_connect() deprecation error.
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 // but I strongly suggest you to use PDO or MySQLi.
 
 //define('DBHOST', 'hiring.db.11797364.hostedresource.com');
 //define('DBUSER', 'hiring');
 //define('DBPASS', 'Hiring@2017');
 //define('DBNAME', 'hiring');
 
 define('DBHOST', 'localhost');
 define('DBUSER', 'root');
 define('DBPASS', '');
 define('DBNAME', 'aere');
 
 $conn = mysql_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysql_select_db(DBNAME);
 
 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
 }



?>

