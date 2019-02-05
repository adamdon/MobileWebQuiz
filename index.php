<html lang="en">

     <head>
         <title>PHP Test</title>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="JavaScript/jquery_scripts.js"></script>
     </head>

     <body onload="getQuestion()">
        <?php
            include 'Interface.php';
        ?>

        <select id="selectQu">
            <option value="0" selected="selected">Question 1</option>
            <option value="1">Question 2</option>
            <option value="2">Question 3</option>
            <option value="3">Question 4</option>
        </select>

        <button onclick="getQuestion()" >Get Question</button>
        <h3 id="question">question text to be updated</h3>

        <button onclick="getAnswer()" >Get Answer</button>
        <h3 id="answer">Answer text to be updated</h3>
     </body>

</html>