<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'userinfo'); // defining all of the db variables
define('DB_USER','root');
define('DB_PASSWORD','root');
//define('DB_PORT', '8889');

//connecting to mysql and then to the db i've set up
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

function SignIn() {
  session_start();
  if (!empty($_POST['Username'])) {
      $query = mysql_query("SELECT * FROM info WHERE username = '$_POST[Username]' and password
        = '$_POST[Password]'") or die("Failed to connect to database: " . mysql_error());
      $row = mysql_fetch_array($query) or die("Failed to fetch array: " . mysql_error());
      if (!empty($row['username']) AND !empty($row['password'])) {
        $_SESSION['username'] =  $row['password'];
        echo "Success on logging in!";
        header("location:main.html");
      } else {
        echo "Your username or password were incorrect.";
      }
  }
}
if (isset($_POST['submit'])) {
  SignIn();
}
?>
