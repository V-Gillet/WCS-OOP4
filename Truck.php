<?php

require_once 'Vehicle.php';


class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];

    protected int $stock = 0;
    protected int $capacity;
    protected string $energy;

    public function __construct(string $color, int $nbSeats, string $energy, int $stock)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setCapacity($stock);
    }

    public function setCapacity(int $capacity)
    {
        $this->capacity = $capacity;
        return $capacity;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }


    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getStock(): int
    {
        return $this->energy;
    }

    public function setStock($stock)
    {
        $this->stock = $stock;
        return $this;
    }

    public function IsFullOrFilling(int $stock)
    {
        if ($stock < $this->capacity) {
            return 'filling';
        } else {
            return 'full';
        }
    }
}
