<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];

    private bool $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function setParkBrake($hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(bool $isBrakeOn)
    {
        $this->setParkBrake($isBrakeOn);
        if ($this->hasParkBrake === false) {
            return $this->forward();
        } else {
            throw new Exception('Your brake is on.');
        }
    }
}
