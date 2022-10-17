<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'miscellaneous/header.php' ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statement</title>
</head>
<body>

<h2> If Statements </h2>

    
</body>



<?php
$age = 24;
$randomNum = rand(10,100);


if ($randomNum >= $age)
{
print "<br/>";
print "<br/>";
  
 echo "<h4 class = 'text-success'> the number is greater or equal to the number 24! refresh the page to try again</h4>";

}
else 
{
    print "<br/>";
    print "<br/>";
 echo "<h4 class = 'text-danger' > this random number is not what we are looking for! refresh the page to try again </h4>";

}
$age = '';



?>
<?php require 'miscellaneous/footer.php' ?>
</html>
