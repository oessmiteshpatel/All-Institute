<?php

 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 session_start();
 // but I strongly suggest you to use PDO or MySQLi.
//$webstatus="developement";  //production, developement,local
 // $webstatus="QA";  //production, developement,local
 $webstatus="local";  //production, developement,local
if($webstatus=="production"){
    // not valid
	define('DBHOST', 'PRDAERECourses.db.11797364.5bf.hostedresource.net');
	define('DBUSER', 'PRDAERECourses');
	define('DBPASS', 'Op3n3y3s@2017');
	define('DBNAME', 'PRDAERECourses');
}else if($webstatus=="local"){
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBNAME', 'aere');
}else if($webstatus=="developement"){
	define('DBHOST', 'DevAERECourses.db.11797364.2d8.hostedresource.net');
	define('DBUSER', 'DevAERECourses');
	define('DBPASS', 'W3lc0m3@2018');
	define('DBNAME', 'DevAERECourses');
}else if($webstatus=="QA"){
	define('DBHOST', 'QAAERECourses.db.11797364.a8d.hostedresource.net');
	define('DBUSER', 'QAAERECourses');
	define('DBPASS', 'Op3n3y3s@2017');
	define('DBNAME', 'QAAERECourses');
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

