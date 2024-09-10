<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
   
    
</body>
</html>