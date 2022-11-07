<?php


abstract class Highway
{
    private array $currentVehicles = [];
    private int $nbLane;
    private int $maxSpeed;

    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;
        return $this;
    }

    public function getnbLane()
    {
        return $this->nbLane;
    }

    public function setNblane($nbLane)
    {
        $this->nbLane = $nbLane;
        return $this;
    }

    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }

    abstract function addVehicle(Vehicle $vehicle);
}
