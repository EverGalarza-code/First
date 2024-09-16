<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
   
    
</body>
</html>