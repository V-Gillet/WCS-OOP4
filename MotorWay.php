<?php

require 'Highway.php';

final class MotorWay extends Highway
{

    private int $nbLane = 4;
    private int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        if (!is_a($vehicle, 'Bicycle') && !is_a($vehicle, 'Skateboard')) {
            return $this->currentVehicles[] = $vehicle;
        } else {
            return $this->currentVehicles[] = 'Vehicle not authorized';
        }
    }
}
