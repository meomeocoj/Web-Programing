<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Your result here</title>
    </head>
    <body>
        <?php

function convertDeg2Rad($value)
{
    echo "to value: ";
    echo deg2rad($value);
}

function convertRad2Deg($value)
{
    echo "to degree: ";
    echo rad2deg($value);
}

$input = $_POST["input"];
$option = $_POST["option"];
if($option == "degree"){
echo "$input degree ";}
else echo "$input rad"; 

echo "<br>";
if ($option == "degree") {
    convertDeg2Rad($input);
} else {
    convertRad2Deg($input);
}
?>
    </body>
</html>
