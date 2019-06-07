<?php

class Truck extends Vehicle {
    public function __construct(float $fuelQuantity, float $fuelConsumption, float $tankCapacity)
    {
        parent::__construct($fuelQuantity, $fuelConsumption + 1.6, $tankCapacity);
    }

    public function Refuel($fuel)
    {
        parent::setFuelQuantity(parent::getFuelQuantity() + ($fuel * 0.95));
    }
}