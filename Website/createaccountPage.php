<html>
<head>
  <link rel="stylesheet" type="text/css" href="webstyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="res/parsley.min.js"></script>
</head>

<div align="center">
  <img src="logo.png">
</div>

<div id="create_accountss" align="center">
<form method="POST" action="createaccount.php" data-parsley-validate>

  <label>Create Username:</label>
  <input class="createIn" type="text" name="myUser" data-parsley-required data-parsley-length="[6,20]"><br><br>
  <div class="error-block"></div>

  <label>Email:</label>
  <input class="createIn" type="text" name="myEmail" data-parsley-required data-parsley-type="email"><br><br>
  <div class="error-block"></div>

  <label>Enter Password:</label>
  <input class="createIn" type="password" name="myPass" data-parsley-required data-parsley-length="[6,30]"><br><br>

  <label>Retype Password:</label>
  <input class="createIn" type="password" name="samePass" data-parsley-required="[6,30]"><br><br>

  <input id="button" type="submit" name="submit2" value="Create">
  <button id = "button" onclick="window.location='loginPage.php'" type="submit">Back</button>
</form>
</div>
<body>
</html>
