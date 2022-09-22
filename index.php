<?php
include "./Shoe.php";
//===========objektas================
$shoe = new Shoe("Nike","grey",46,"rubber");
print_r($shoe);
echo "<br>";
echo $shoe->manufacturer;
echo "<hr>";


//===========masyvas=================
$shoeArr = ["manufacturer"=>"Nike", "color"=>"grey", "size"=>46, "material"=>"rubber"];
print_r($shoeArr);
echo "<br>";
echo $shoeArr['manufacturer'];



echo "<hr>";
echo $shoe->manufacturer;

$shoe->manufacturer = "Adidas";
echo "<hr>";
echo $shoe->manufacturer;

$shoe->description();

$shoe2 = new Shoe("Lakoste","brown",45,"leater");
$shoe2->description();
echo $shoe;

// echo "<br>";
// echo $shoe->color;
// echo "<br>";
// echo $shoe->size;
// echo "<br>";
// echo $shoe->material;
// echo "<br>";


// foreach ($shoe as $prop) {
//     echo "<h1>".$prop."</h1>";
// }

$shoe3 = new Shoe();

$shoe3->manufacturer = "Prada";
$shoe3->color = "yellow";
$shoe3->size = "37";
$shoe3->material = "candies";

echo $shoe3;
$shoe3->description();


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>