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
       $x = 3;
        /*
       if ($x == 1) {
            echo "is very handsome!";
       }
       elseif ($x == 2) {
           echo "Kinda";
       } 
       elseif ($x == 3) {
        echo "Sort of";
        } 
        elseif ($x == 4) {
        echo "Kinda";
        } 
       else {
        echo "False!";
       }
       */
    ?>

    <?php
        $x = 5;

        switch ($x) {
            case 1:
                echo "The answer is 1";
            break;

            case 2:
                echo "The answer is 2";
            break;
            case 3:
                echo "The answer is 3";
            break;
            case 4:
                echo "The answer is 4";
            break;
            default :
                echo "There is no answer";
        }
    ?>
   
   <?php
      if (isset($_SESSION['userId'])){
        echo '<p>You are logged in!</p>';
      }
      else {
        echo '<p>You are logged out!</p>';
      }
      ?>
</body>
</html>