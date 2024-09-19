<?php

include 'includes/header.php';

    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coding II Test</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  
    
<?php
    /*
    $GLOBALS
    $_POST
    $_GET
    $_COOKIE
    $_SESSION
    */

        $x = 5;

        function something() {
            $y = 10;
            echo $GLOBALS['x'];
        }

        something();
    ?>

<?php
        echo $_GET['name'];
    ?>

    <form method="GET">
        <input type="hidden" name="name" value="Ever">
        <button type="submit">PRESS ME!</button>
    </form> 
    
  </body>
</html>