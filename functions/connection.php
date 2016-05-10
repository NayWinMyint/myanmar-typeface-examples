<?php

/*-------- Connect Localhost --------------*/
	define('DBHOST', 'localhost');  // Add the Database Host Server Name. localhost in general cases.
	define('DBNAME', 'mm-typeface-examples'); // Add Name of Database Here
	define('DBUSER', 'root'); // Add Database Username here
	define('DBPASS', 'root'); //Mysql User Password

/*----  Connect Real Hosting ----------------
	define('DBHOST','Bmusica.db.11655047.hostedresource.com');
	define('DBUSER','Bmusica');
	define('DBPASS','nayW!N30');
	define('DBNAME','Bmusica');

/*----------Conecction End ------------*/

	$con = mysqli_connect(DBHOST,DBUSER,DBPASS) or die('Could not connect: ' . mysqli_connect_error());

	mysqli_select_db($con,DBNAME);
	mysqli_set_charset($con,"utf8") or die('Could not connect: ' . mysqli_connect_error());
	//mysql_query(‘SET CHARACTER SET utf8′);
	//mysqli_query(“SET SESSION collation_connection =’utf8_general_ci’”);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>
