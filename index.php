<?php
require_once 'bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'ResidentialWay.php';
require_once 'PedestrianWay.php';
require_once 'Skateboard.php';

/*echo "Challenge1";
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
*/

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);
echo "<br>";
echo "<br>";
echo "<br>";
$car = new Car('green', 4, 'electric');
echo "<br>";
echo $car->forward();
echo "<br>";
var_dump($car);
echo "<br>";
echo "<br>";
echo "<br>";
var_dump(Car::ALLOWED_ENERGIES);
echo "<br>";
echo "<br>";
echo "<br>";
echo "Challenge2";
echo "<br>";
$truck = new Truck("Blue",6,'electric',300);
echo "<br>";
echo $truck->forward();
echo "<br>";
echo $truck->brake();
echo "<br>";
echo $truck->Capacity(150);
echo "<br>";
echo $truck->Capacity(300);
echo "<br>";
echo "<br>";
echo "Challenge3";
echo "<br>";
$skate = new Skateboard('red',1);
$test = new PedestrianWay();
$test->addVehicles($skate);
print_r($test);
echo "<br>";
echo "<br>";
$car = new Car('blue',4,'electric');
$test2 = new MotorWay();
$test2->addVehicles($car);
print_r($test2);
echo "<br>";
echo "<br>";
$truck = new Truck('Black',3,'Diesel',40000);
$test3 = new ResidentialWay();
$test3->addVehicles($truck);
print_r($test3);
echo "<br>";
echo "<br>";
//Ne fontionne pas
$car2= new Car('yellow',6,'Essence');
$test4 = new PedestrianWay();
$test4->addVehicles($car2);
print_r($test4);
echo "<br>";
echo "<br>";
echo "Challenge4";
echo "<br>";
$ferrari = new Car('red',2,'Essence');
$ferrari->setHasParkBrake(true);
echo "<br>";
try {
    $ferrari->start();
}catch (Exception $e){
    echo "Exception received  : ". $e->getMessage() ;
} finally {
    echo "Ma voiture roule comme un donut";
    echo "<br>";
}
echo "<br>";
print_r($ferrari);
