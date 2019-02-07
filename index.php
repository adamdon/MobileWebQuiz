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

        <div id="content">
            <button onclick="startGame()" >Start Game!</button>
        </div>

     </body>

</html>