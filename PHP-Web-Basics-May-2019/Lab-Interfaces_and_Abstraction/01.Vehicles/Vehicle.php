<?php

abstract class Vehicle {
    /**
     * @var float
     */
    private $fuelQuantity;

    /**
     * @var float
     */
    private $fuelConsumption;

    /**
     * Vehicle constructor.
     * @param float $fuelQuantity
     * @param float $fuelConsumption
     */
    public function __construct(float $fuelQuantity, float $fuelConsumption)
    {
        $this->setFuelQuantity($fuelQuantity);
        $this->setFuelConsumption($fuelConsumption);
    }

    /**
     * @return float
     */
    public function getFuelQuantity(): float
    {
        return $this->fuelQuantity;
    }

    /**
     * @param float $fuelQuantity
     */
    private function setFuelQuantity(float $fuelQuantity): void
    {
        $this->fuelQuantity = $fuelQuantity;
    }

    /**
     * @return float
     */
    public function getFuelConsumption(): float
    {
        return $this->fuelConsumption;
    }

    /**
     * @param float $fuelConsumption
     */
    private function setFuelConsumption(float $fuelConsumption): void
    {
        $this->fuelConsumption = $fuelConsumption;
    }

    public function Refuel($fuel) {
        $this->fuelQuantity += $fuel;
    }

    /**
     * @param float $distance
     * @throws Exception
     */
    public function Drive(float $distance) {
        $neededFuel = $this->getFuelConsumption() * $distance;
        $type = get_called_class();
        if ($this->getFuelQuantity() < $neededFuel) {
            throw new Exception("{$type} needs refueling");
        }

        $this->fuelQuantity -= $neededFuel;
        echo "{$type} travelled {$distance} km" . PHP_EOL;
    }

    public function __toString()
    {
        $fuelFormat = number_format($this->getFuelQuantity(), 2, '.', '');
        $type = get_called_class();
        return "{$type}: {$fuelFormat}";
    }
}