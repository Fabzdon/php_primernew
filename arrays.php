<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'miscellaneous/header.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h2> Arrays Demonstration </h2>
<body>
    <?php

    $variables = array(1,2,3,4,5,6,7,8,9,10);

    $size = count($variables);

    $count = 0;

    for($i = 0; $i < 9; $i++){

        echo "<p> Array position $i has the number: $variables[$i] </p>";

    }







   ?>
   <?php require 'miscellaneous/footer.php' ?>
</body>
</html>
