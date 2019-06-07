<?php

class Truck extends Vehicle {
    public function __construct(float $fuelQuantity, float $fuelConsumption)
    {
        parent::__construct($fuelQuantity, $fuelConsumption + 1.6);
    }

    public function Refuel($fuel)
    {
        parent::Refuel($fuel * 0.95);
    }
}