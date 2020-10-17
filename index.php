<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'vehicle.php';
require_once 'Truck.php';


$bike = new Bicycle('red', 1);
var_dump($bike);
$bike->setCurrentSpeed(0);
var_dump($bike);

echo $bike->Forward();
echo '<br> Vitesse du vélo : ' .$bike->getCurrentSpeed() . 'km/h <br>';
echo $bike->Brake();
echo '<br> Vitesse du vélo : ' .$bike->getCurrentSpeed() . ' km/h';
echo $bike->Brake();


$tuture = new Car('blue', 5, 'diesel');
var_dump($tuture);

$volkswagen = new Car('black', 4, 'gasoline');
$volkswagen->setCurrentSpeed(0);
var_dump($volkswagen);
echo $volkswagen->start();




$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

var_dump(Car::ALLOWED_ENERGIES);


$truck1 = new Truck(16, 0, 'yellow', '2', 'fuel');
echo $truck1->setEmpty(17);
echo $truck1->forward();
echo $truck1->brake();
