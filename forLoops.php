<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'miscellaneous/header.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2> Simple For Loop </h2>
    <?php

    $incrementor = 0;
    $arrayOfItems = "10,9,8,7,6,5,4,3,2,1";

    for($incrementor = 0; $incrementor <= 9; $incrementor++){

        print"</p> The incrementor will increment 10 times it is at postion" . " " . $incrementor . "</>";

    }




    ?>
    <?php require 'miscellaneous/footer.php' ?>
</body>
</html>