//use mysql server info to connect to a database
<?php  mysql_connect("your.hostaddress.com", "username", "password") or die(mysql_error()) ;
 mysql_select_db("Database_Name") or die(mysql_error()) ;  ?>

// script that searches data base OR creates data base for users on site
