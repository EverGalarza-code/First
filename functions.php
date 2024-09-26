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

        

        function newCalc($x) {
            $newnr = $x * 0.75;
            echo "Here is 75% of what you wrote: ".$newnr;
        }

        $x = 100;
        newCalc($x);
        
        echo "<br>";

        $a = 10;
        newCalc($a);

    ?>
    <br>
    <?php

    function calculateCircumference($radius) {
        $circumference = 2 * pi() * $radius;
        echo "The circumference of a circle with radius $radius is " . number_format($circumference, 2) . ".";
    }

    $radius1 = 5;
    $radius2 = 10;

    calculateCircumference($radius1);
    echo "<br>";
    calculateCircumference($radius2);
    
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