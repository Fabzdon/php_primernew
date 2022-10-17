<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'miscellaneous/header.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h2> Switch Statements </h2>
<body>
   <?php
   

   $counter = 0;

   for($counter = 0; $counter <= 5; $counter ++){
    switch($counter){

    case 1:
        echo("<p> The counter is at 1</p>");
        break;

         case 2: 
             echo("<p> The counter is at 2</p>");
                break;

             case 3: 
                echo("<p> The counter is at 3</p>");
                break;

                    case 4: 
                     echo("<p> The counter is at 4</p>");
                        break;

                            case 5: 
                                echo("<p> The counter is at 5</p>");
                                break;

                 }
}
   

   ?>
   <?php require 'miscellaneous/footer.php' ?>
</body>
</html>