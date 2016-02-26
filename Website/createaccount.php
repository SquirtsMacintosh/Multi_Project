<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'userinfo'); // defining all of the db variables
define('DB_USER','root');
define('DB_PASSWORD','root');

//generates a hashed password + salt
$salt = uniqid(mt_rand(), true);
$hash = password_hash($_POST["myPass"].$salt, PASSWORD_BCRYPT);

//connecting to mysql and then to the db i've set up
$link=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
  or die("Failed to connect to MySQL:");

//adds created user data into database
$sql = "INSERT INTO `info`(`username`, `password`, `email`, `salt`) VALUES
  ('$_POST[myUser]', '$hash', '$_POST[myEmail]', '$salt')";

$query = mysqli_query($link,$sql) or die("Cannot retrieve data ");

//check to see if the data was inserted into the db
if ($query) {
  header("location:loginPage.php");
} else {
  header("location:createaccountPage.php");
}

//mysql_close() or die("Failed to close mysql connection");
?>
