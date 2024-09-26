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



    </form>
    <?php
       //String
       $name = 'DataTypes are interesting.';

       //Integer
       $name = 13;

       //Float
       $name = 13.72008;

       /*
       //BooLean
       true = 1
       false = 0
       */

       //Array
       $names = array("Ever","Isaac","Brian");
       echo $names['2'];
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