<?php
require_once 'bicycle.php';
require_once 'Car.php';

$bike = new Bicycle("blue");
print_r($bike) ;
echo "<br>";
$bike->setColor("red");
print_r($bike) ;
echo "<br>";
echo $bike->getColor();
echo "<br>";

$bike2 = new Bicycle("yellow");
echo "<br>";
print_r($bike2) ;
echo "<br>";
$bike2->setColor("Black");
echo "<br>";
print_r($bike2) ;
echo "<br>";
echo $bike2->getColor();
echo "<br>";
echo "<br>";
$car = new Car("blue",4,"Diesel");
echo "<br>";
print_r($car) ;
echo "<br>";
$car2 = new Car("Yellow",4,"Essence");
echo "<br>";
print_r($car2) ;