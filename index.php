<?php

require_once 'Car.php';
require_once 'Skateboard.php';
require_once 'Truck.php';
require_once 'Bicycle.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$car = new Car('yellow', 5, 'electric');

try {
    $car->start(false);
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo 'Ma voiture roule comme un donut.';
}
