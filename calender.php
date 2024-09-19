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
       $dayofweek = date("w");
       
       switch ($dayofweek) {
          case 1; 
            echo "<p>It is Monday!</p>";
            break;

        case 2; 
            echo "<p>It is Tuesday!</p>";
            break;

        case 3; 
            echo "<p>It is Wednesday!</p>";
            break;

        case 4; 
            echo "<p>It is Thursday!</p>";
            break;

        case 5; 
            echo "<p>It is Friday!</p>";
            break;

        case 6; 
            echo "<p>It is Saturday!</p>";
            break;

        case 0; 
            echo "<p>It is Sunday!</p>";
            break;

       }
    ?>
   
    
</body>
</html>