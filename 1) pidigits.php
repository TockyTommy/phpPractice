<!--
    Find PI to the Nth Digit - 
    Enter a number and have the program generate PI up to that many decimal places. 
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
    <h1>PI to the Nth digit</h1>
    <p>Note: the limit is 13</p>
    <form action="pidigits.php" method="post">
        <label>N:</label>
        <input type="text" name="n">
        <input type="submit" value="calculate">

    </form>
</body>
</html>

<?php

/*
    future considerations:
    1) catch non numbers
    2) catch non whole numbers
    3) suffix logic: right now the program uses if else statements to determine the suffix
    example: 1st 2nd and 3rd and it works as intended because the number limit is only 13.
    but in larger programs, 21st, 22nd, 23rd etc will require better logic.
*/

    // catch any empty values
    if (!isset($_POST["n"]) || $_POST["n"] === "") {
    return;
}

    $pi = pi();
    $roundto = $_POST["n"]; 
    $rounded = null;

    if ($roundto<=13 && $roundto>=0){

        $rounded = round($pi,$roundto);
        if($roundto == 1){
            echo "Pi rounded to the {$roundto}st digit is {$rounded}";
        } else if ($roundto == 2){
            echo "Pi rounded to the {$roundto}nd digit is {$rounded}";
        } else if ($roundto == 3){
            echo "Pi rounded to the {$roundto}rd digit is {$rounded}";
        } else {
            echo "Pi rounded to the {$roundto}th digit is {$rounded}";
        }
    } else if ($roundto>13){
        echo "Sorry! {$roundto} exceeds the limit of 13.";
    } else if ($roundto<0){
        echo "That is not a valid number!";
    }
?>
