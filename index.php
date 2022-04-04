<?php
require_once('Car.php');
require_once('Bicycle.php');
require_once('Truck.php');

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

$moto = new Vehicule('red', 1);

var_dump($moto);