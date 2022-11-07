<?php



final class PedestrianWay extends Highway
{

    private int $nbLane = 1;
    private int $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {
        if (is_a($vehicle, 'Bike') && is_a($vehicle, 'Skateboard')) {
            return $this->currentVehicles[] = $vehicle;
        } else {
            return $this->currentVehicles[] = 'Vehicle not authorized';
        }
    }
}
