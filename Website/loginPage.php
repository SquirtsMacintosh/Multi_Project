<html>
<head>
<link rel="stylesheet" type="text/css" href="webstyle.css">
</head>
<div align="center">
  <img id="logo" src="logo.png">
</div>
<div id="user_info" align="center">
<form method="POST" action="checkuser.php">
  <h1 id="logtext">Log In</h1>
    <input type="text" name="myUsername" placeholder="username" required="required"></input>
    <input type="text" name="myPassword" placeholder="password" required="required"></input> <br><br>
  <input id="button" type="submit" name="submit" value="Log-In"></input>
  <button id="button" onclick="window.location='createaccountPage.php'">Create</button>
</form>
</div>
</html>
