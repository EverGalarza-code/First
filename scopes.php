<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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