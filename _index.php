<?php
require('Car.php');
require('Bicycle.php');

$myCar = new Car('black', 5, 'diesel');

echo $myCar->start();

echo $myCar->forward();

echo $myCar->brake();

var_dump($myCar);

var_dump($myCar->getColor());


$bike = new Bicycle('red', 5, 1);

echo $bike->forward();

echo $bike->brake();

var_dump($bike);
