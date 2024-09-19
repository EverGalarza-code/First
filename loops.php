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
       //While loop - Executes a block of code as long as a specified condition is true.

       $x = 1;
       while ($x < 5) {
            echo "While loop<br>";
            $x++;
       }
    ?>
    
    <?php
       //Do while loop - Similar to the while loop, but the code block is executed at least once before the condition is checked.

       $x = 1;
       do {
        echo "Do while loop<br>";
        $x++;
       }
       while ($x <= 5);
       ?>

    <?php
       //For Loop - Typically used for iterating over a range of values, with a loop counter.

       for ($x = 0; $x <= 10; $x++) {
            echo "For Loop<br>";
       }
       ?>

    <?php
       //Foreach Loop - Used for iterating over elements in a collection or array.

       $array = array("Ever", "Isaac", "Brian");

       foreach ($array as $loopdata) {
            echo "My name is ".$loopdata."<br>";

       }
       ?>
   
    
</body>
</html>