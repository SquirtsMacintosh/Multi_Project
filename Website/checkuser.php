<?php
define('DB_HOST','localhost');
define('DB_NAME','userinfo');
define('DB_USER','root');
define('DB_PASSWORD','root');
$link = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die("Failed Connecting to database!");

//session_start();
if (!empty($_POST['myUsername'])){
  // searching for username and pw from the db
  $query= "SELECT * FROM info WHERE username = '$_POST[myUsername]' and password
    = '$_POST[myPassword]'";
  $result = mysqli_query($link,$query) or die("Failed to get the query!");

  //grabbing the array for the query
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC) or die("Failed to fetch an array of the Username!");
  if (!empty($row['username']) AND !empty($row['password'])){
    header("location:mainPage.php");
  } else {
    echo "Your username or password were inccorect!";
  }
}
//closes the DB connection
//mysqli_close($link) or die("Failed to close the database connection!");
?>
