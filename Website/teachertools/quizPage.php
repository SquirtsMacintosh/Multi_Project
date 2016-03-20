<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="../res/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="style/css" href="../res/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="style/css" href="../style/newStyle.css">
  </head>
  <div class="grid">
    <div class="row">
      <div class="container-fluid">
        <div class="btn-group pull-right" role="group">
          <button type="button" class="btn btn-default">Docs</button>
          <button type="button" class="btn btn-default" onclick="window.location='../aboutPage.php'">About</button>
          <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-option-vertical"></span>USERNAME</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container-fluid">
        <ul class ="nav nav-stacked col-lg-2 col-md-2 col-sm-2">
          <li role="presentation"><a href="../mainPage.php">Main</a></li>
          <li role="presentation"><a class="active" href="../teachertools/quizPage.php">Add Quizzes</a></li>
          <li role="presentation"><a href="../teachertools/gradebookPage.php">Quiz Gradebook</a></li>
          <li role="presentation"><a href="../teachertools/courseManagerPage.php"> Course Management</a></li>
          <li role="presentation"><a href="../contactPage.php">Support</a></li>
        </ul>
        <h1>Add a Quiz</h1>
      </div>
    </div>
  </div>
  <div class="logout-button" align="right">
    <form method="POST" action="../php/logout.php">
      <button type="submit">Log Out</button>
    </form>
  </div>
  <div class="header-info" align="center">
  </div><br><br>
  <div class="date-container" align="center">
    <label>Date</label>
    <input id="datepicker" class="quiz-date" type="text"></input><br><br>
  </div>
  <div class="add-quiz" align="center">
    <label>Quiz Name</label>
    <input class="quiz-name" type="text"></input><br><br><br><br>
    <div id="container">
    </div><br><br>
    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span>Add</button><br><br><br>
    <input class="myButton" type="submit" name="back" onclick="window.location='../mainPage.php'" value="BACK"></input>
    <input class="myButton" type="button" name="submit" value="SUBMIT"></input>
  </div>
</html>
