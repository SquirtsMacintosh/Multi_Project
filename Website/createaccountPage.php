<html>
<head>
  <link rel="stylesheet" type="text/css" href="webstyle.css">
</head>
<div align="center">
  <img src="logo.png">
</div>
<div id="create_account" align="center">
<form method="POST" action="createaccount.php">
  Create Username:<br>
  <input type="text" name="myUser" required><br>
  Email:<br>
  <input type="text" name="myEmail" required><br>
  Enter Password:<br>
  <input type="text" name="myPass" required><br>
  Retype Password:<br>
  <input type="text" name="samePass" required><br><br>
  <input id="button" type="submit" name="submit2" value="Log-In"><br>
</form>
<form action="loginPage.php">
  <button id = "button" type="submit">Back</button>
</form>
</div>
<body>
</html>
