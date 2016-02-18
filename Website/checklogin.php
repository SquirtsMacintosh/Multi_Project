<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'underinfo'); // defining all of the db variables
define('DB_USER','root');
define('DB_PASSWORD','root');

//connecting to mysql and then to the db i've set up
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
?>
