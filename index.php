<html>

     <head>
         <title>PHP Test</title>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="JavaScript/jquery_scripts.js"></script>
     </head>

     <body onload="getQuestion()">
        <?php
            include 'logic.php';
        ?>

        <button onclick="getAnswer()" >Get External var from PHP</button>

        <h3 id="question">question text to be updated</h3>
        <h3 id="answer">Answer text to be updated</h3>
     </body>

</html>