<html>
     <head>
         <title>PHP Test</title>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     </head>
     <body>
        <script src="jquery_scripts.js"></script>
        <?php
            include 'logic.php';

        ?>
        <script>
            function getAnswer()
            {
                document.getElementById("answer").innerHTML = "5";
                //$.get("View.php")
            }
        </script>

        <button onclick="getAnswer()" >Get External var from PHP</button>

        <h3 id="answer">Text to be updated</h3>
     </body>
</html>