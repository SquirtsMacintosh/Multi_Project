<?php
define('DB_HOST','localhost');
define('DB_NAME','userinfo');
define('DB_USER','root');
define('DB_PASSWORD','root');
$link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed Connecting to database!");

//grabs the hash from the db to verify against the password
$sql = "SELECT password FROM info WHERE username='$_POST[myUsername]'";
$result = mysqli_query($link, $sql);
$col = mysqli_fetch_object($result);
$hash = $col->password;
//var_dump($hash);

//verifies that our password was correct
if (password_verify($_POST['myPassword'], $hash)) {
  //success
  header("location:mainPage.php");
} else {
  echo "Your username or password were incorrect!";
}
//mysqli_close($link) or die("Failed to close the database connection!");
?>
