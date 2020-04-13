<?php

require_once('MotorWay.php');
require_once('PedestrianWay.php');
require_once('ResidentialWay.php');
require_once('Vehicle.php');


$autoroutedusoleil = new MotorWay();

echo 'This is a Motorway, there is '. $autoroutedusoleil -> getNbLane(). 'lanes and the speed limit is ' . $autoroutedusoleil -> getMaxSpeed() . ' km/h<br>';


$car = new Vehicle('car');
$autoroutedusoleil -> addVehicle($car);

$bike = new Vehicle('bike');
$autoroutedusoleil -> addVehicle($bike);

var_dump($autoroutedusoleil->getCurrentVehicles());