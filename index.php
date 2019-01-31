<html>
     <head>
         <title>PHP Test</title>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



     </head>
     <body>
        <script src="jquery_scripts.js"></script>
        <?php
            include 'logic.php';




            echo '<p>Test</p>' . $txt;
        ?>
        <button>Get External var from PHP</button>
        <h3>Text to be updated</h3>
     </body>
</html>