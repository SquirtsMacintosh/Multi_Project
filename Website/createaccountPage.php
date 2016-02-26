<html>
<head>
  <link rel="stylesheet" type="text/css" href="webstyle.css">
</head>
<div align="center">
  <img src="logo.png">
</div>
<div id="create_account" align="center">
<form method="POST" action="createaccount.php">

  <label>Create Username:</label>
  <input class="createIn" type="text" name="myUser" required><br><br>

  <label>Email:</label>
  <input class="createIn" type="text" name="myEmail" required><br><br>

  <label>Enter Password:</label>
  <input class="createIn" type="password" name="myPass" required><br><br>

  <label>Retype Password:</label>
  <input class="createIn" type="password" name="samePass" required><br><br>

  <input id="button" type="submit" name="submit2" value="Create">
  <button id = "button" onclick="window.location='loginPage.php'" type="submit">Back</button>
</form>
</div>
<body>
</html>
