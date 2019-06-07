<?php

class Car extends Vehicle {
    public function __construct(float $fuelQuantity, float $fuelConsumption)
    {
        parent::__construct($fuelQuantity, $fuelConsumption + 0.9);
    }
}