<?php
require_once('Car.php');
require_once('Bicycle.php');
require_once('Truck.php');
require_once('HighWay.php');
require_once('MotorWay.php');
require_once('PedestrianWay.php');
require_once('ResidentialWay.php');
require_once('Skateboard.php');


echo '<h1> Car </h1>';

$myCar = new Car('black', 5, 'diesel');

echo $myCar->start();

echo $myCar->forward();

echo $myCar->brake();

var_dump($myCar);

var_dump($myCar->getColor());

echo '<h1> Bike </h1>';

$bike = new Bicycle('red', 5, 1);

echo $bike->forward();

echo $bike->brake();

var_dump($bike);

echo '<h1> Truck </h1>';

$myTruck = new Truck('green', 4, 'electric', 50);

$myTruck->setPayload(50);

echo $myTruck->forward();

echo $myTruck->brake();

echo '<h2>' . $myTruck->getFilling() . '</h2>';

var_dump($myTruck);

echo '<h1> Abstract </h1>';

// Instanciations 

$skateBoard = new Skateboard('Blue', 1);
$road = new MotorWay($myTruck);
$sidewalk = new PredestrianWay($myCar);
$lane = new ResidentialWay($myCar);

// Adding vehicules to MotorWay
echo $road->addVehicle($bike);

$road->addVehicle($myCar);

var_dump($road->getCurrentVehicles());

// Adding vehicules to PedestrianWay

echo $sidewalk->addVehicle($myCar);

$sidewalk->addVehicle($bike);

var_dump($sidewalk->getCurrentVehicles());

// Adding vehicules to ResidentialWay

$lane->addVehicle($skateBoard);

var_dump($lane->getCurrentVehicles());

