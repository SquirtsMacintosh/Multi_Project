<?php include 'sessionchecker.php' ?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="webstyle.css">
</head>
<title>QA Teacher</title>
<h1 align="center">
  Teacher Tools
</h1>
<div class="logout" align="right">
<form method="POST" action="logout.php">
<button type="submit">Log Out</button>
</form>
</div>
<div class="teacher_tools" align="left">
<ul>
  <li> <a href="teachertools/quizController.php"> Add Quizzes </a></li>
  <li> <a href="teachertools/gradebook.php"> Quiz Gradebook </a></li>
  <li> <a href="teachertools/courseManager.php"> Course Management </a></li>
</ul>
</div>
<div class="current_quizzes" align="center">
  <h1>Your Quizzes</h1>
</div>
</html>
