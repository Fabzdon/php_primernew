<!DOCTYPE html>
<html lang="en">
<?php include 'miscellaneous/header.php' ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>
        Functions
    </h2>
    

    <?php


    function returnAvg($num1, $num2, $num3){

        $avg = $num1 + $num2 + $num3 / 3;

        return $avg;

    };

    $num1 = 10;
    $num2 = 20;
    $num3 = 30;
    $i = 0;
    for($i = 0; $i <= 9; $i++){
    $num1 ++;
    $num2 ++;
    $avgOfNumbers = returnAvg($num1, $num2, $num3);
    echo "The Average of " . $num1 . " + " . $num2 . " + ". $num3 . " = " . $avgOfNumbers . '<br/>';

    }


    ?>
    <?php require 'miscellaneous/footer.php' ?>

</html>