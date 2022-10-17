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

    <?php

$fname = "fabian";
$lname = "gordon";
$name = "fabian gordon";

//simple string concatination 

echo ("<p> $fname . ' ' . $lname </p>");


//auto capitalization of first letter in a word 

echo("Capitalization of first letter in a word:" . " " .ucfirst($fname). "<br/>");
print "<br/>";
echo("Capitalization of first letter of each word:" . " " . ucwords($name) . "<br/>" );
print "<br/>";
echo("Capitalize entire word" . " " . strtoupper($lname). "<br/>" );
print "<br/>";
echo("Lower case entire word" . " " . strtolower("|THIS WAS ALL UPPER CASE|"). "<br/>" );
print "<br/>";
echo("Repeat String:" . " " . str_repeat('test string',10) . "<br/>");
print "<br/>";
echo("Repeat String converted to uppercase:" . " " .  strtoupper(str_repeat( " ".'string',10) . "<br/>"));
print "<br/>";
echo "Substring of a string: " . substr($name, 3, 9) . "<br/>";
print "<br/>";
echo "get position of string " . strpos($name, 'f') . "<br/>";
print "<br/>";
echo "find a character in a string " . strchr($name, 'a') . "<br/>";
print "<br/>";
echo "get the length of a string" . strlen($name) . "<br/>";
print "<br/>";
echo "Trim spaces on both side of a string: " . "A" . trim ( "MAND" ) . 'a' . '<br/>';
print "<br/>";
echo "Trim spaces to the right of a string "  . "A" . ltrim (' MAND ') . 'A' . '<br/>';
print "<br/>";
echo "Trim spaces on both side of a string: " . "A" . rtrim ( " MAND " ) . 'a' . '<br/>';
print "<br/>";
echo "Replace a string with another string " . str_replace('rise ', 'fall' , $name) . '<br/>';



?>
<?php require 'miscellaneous/footer.php' ?>
</body>
</html>
