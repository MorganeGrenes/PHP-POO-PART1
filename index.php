<?php

require_once('Bicycle.php');
require_once('Car.php');

$bike = new Bicycle();
var_dump($bike);
$bike->setColor('red');
$bike->setCurrentSpeed(0);
var_dump($bike);

echo $bike->getForward();
echo '<br> Vitesse du vélo : ' .$bike->getCurrentSpeed() . 'km/h <br>';
echo $bike->getBrake();
echo '<br> Vitesse du vélo : ' .$bike->getCurrentSpeed() . ' km/h';
echo $bike->getBrake();


$tuture = new Car('blue', 5, 'diesel');
var_dump($tuture);

$volkswagen = new Car('black', 4, 'gasoline');
$volkswagen->setCurrentSpeed(0);
var_dump($volkswagen);
echo $volkswagen->start();