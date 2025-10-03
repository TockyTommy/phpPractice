<!--
    Find e to the Nth Digit
    Just like the previous problem, but with e instead of PI. 
    Enter a number and have the program generate e up to that many decimal places. 
    Keep a limit to how far the program will go.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Find E to the Nth number. </h1>
    <p>note that the limit is 12.</p>
    <form action="eToNthDigit.php" method="post">
        <label>N:</label>
        <input type="text" name="n">
        <input type="submit" value="Calculate">
    </form>
</body>
</html>

<?php

    /*
    future considerations - same as the previous
    1) catch non numbers
    2) catch non whole numbers
    3) suffix logic: right now the program uses if else statements to determine the suffix
    example: 1st 2nd and 3rd and it works as intended because the number limit is only 12.
    but in larger programs, 21st, 22nd, 23rd etc will require better logic.
    */

   // catch any empty values
    if (!isset($_POST["n"]) || $_POST["n"] === "") {
    return;
    }

    $e = exp(1);
    $roundto = $_POST["n"];
    $rounded = null;

    if ($roundto<0){
        echo "That is not a valid number";
    } else if ($roundto > 12){
        echo "{$roundto} is over the limit, please try a number between 0 and 12.";
    } else {
        $rounded = round($e,$roundto);

        if($roundto == 1){
            echo "e rounded to the {$roundto}st digit is {$rounded}";
        } else if ($roundto == 2){
            echo "e rounded to the {$roundto}nd digit is {$rounded}";
        } else if ($roundto == 3){
            echo "e rounded to the {$roundto}rd digit is {$rounded}";
        } else {
            echo "e rounded to the {$roundto}th digit is {$rounded}";
        }
    }
?>
