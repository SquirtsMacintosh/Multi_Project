<html>
<head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" type="text/css" href="quiz.css">
  <script>
    $(function() {
      $( "#datepicker" ).datepicker();
    });
  </script>
</head>

<h1>Add a New Quiz Below</h1>
<p>Enter your quiz with the following format, currently we only support 3 questions</p>
<br><br>
<label>Date</label>
<input id="datepicker" class="quiz-date" type="text"></input><br><br>
   <div class="add-quiz" align="center">
      <label>Quiz Name</label>
      <input class="quiz-name" type="text"></input><br><br><br><br>

      <label>Question 1</label>
      <input id="questionOne" class="quiz-questions" type="text"></input><br><br>
      <label>a) </label>
      <input id="optionAOne" class="quiz-options" type="text"></input><br><br>
      <label>b)</label>
      <input id="optionBOne" class="quiz-options" type="text"></input><br><br>
      <label>c)</label>
      <input id="optionCOne" class="quiz-options" type="text"></input><br><br>
      <label>d)</label>
      <input id="optionDOne" class="quiz-options" type="text"></input><br><br><br><br>

      <br>
      <input type="button" name="submit" value="SUBMIT"></input>
    </div>
</html>
