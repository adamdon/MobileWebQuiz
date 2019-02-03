<html>
     <head>
         <title>PHP Test</title>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     </head>
     <body onload="getQuestion()">
        <script src="jquery_scripts.js"></script>
        <?php
            include 'logic.php';

        ?>
        <script>
            function getAnswer()
            {
                $.get('logic.php?request=a', function(data)
                {
                    $('#answer').text(data);
                });
            }
        </script>

        <script>
            function getQuestion()
            {
                $.get('logic.php?request=q', function(data)
                {
                    $('#question').text(data);
                });
            }
        </script>

        <button onclick="getAnswer()" >Get External var from PHP</button>

        <h3 id="question">question text to be updated</h3>
        <h3 id="answer">Answer text to be updated</h3>
     </body>
</html>