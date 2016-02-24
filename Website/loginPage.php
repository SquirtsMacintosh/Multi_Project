<html>
<head>
<link rel="stylesheet" type="text/css" href="webstyle.css">
</head>
<div align="center">
  <img id="logo" src="logo.png">
</div>
<div id="user_info" align="center">
<form method="POST" action="checkuser.php">
  <span id="inlineinput">
    Username:
    <input type="text" name="myUsername" required></input>
  </span>
  <span id="inlineinput">
    Password:
    <input type="text" name="myPassword" required></input> <br><br>
  </span>
  <input id="button" type="submit" name="submit" value="Log-In"></input>
</form>
<form action="createaccountPage.php">
  <button id="button" type="submit">Create</button>
</form>
</html>
