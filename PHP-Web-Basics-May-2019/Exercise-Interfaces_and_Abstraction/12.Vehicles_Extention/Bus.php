<?php

class Bus extends Vehicle {
    const airConditioner = 1.4;
    public function __construct(float $fuelQuantity, float $fuelConsumption, float $tankCapacity)
    {
        parent::__construct($fuelQuantity, $fuelConsumption + self::airConditioner, $tankCapacity);
    }


    public function DriveEmpty($distance) {
        $this->setFuelConsumption($this->getFuelConsumption() - self::airConditioner);
        parent::Drive($distance);
        $this->setFuelConsumption($this->getFuelConsumption() + self::airConditioner);
    }
}