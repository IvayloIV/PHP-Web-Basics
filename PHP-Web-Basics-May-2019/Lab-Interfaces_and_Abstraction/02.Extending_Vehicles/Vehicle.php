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
     * @var float
     */
    private $tankCapacity;

    /**
     * Vehicle constructor.
     * @param float $fuelQuantity
     * @param float $fuelConsumption
     * @param float $tankCapacity
     */
    public function __construct(float $fuelQuantity, float $fuelConsumption, float $tankCapacity)
    {
        $this->setTankCapacity($tankCapacity);
        $this->setFuelConsumption($fuelConsumption);
        $this->setFuelQuantity($fuelQuantity);
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
     * @throws Exception
     */
    private function setFuelQuantity(float $fuelQuantity): void
    {
        $this->checkFuel($fuelQuantity);
        if ($fuelQuantity > $this->tankCapacity) {
            throw new Exception('Cannot fit fuel in tank');
        }

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
    protected function setFuelConsumption(float $fuelConsumption): void
    {
        $this->fuelConsumption = $fuelConsumption;
    }

    /**
     * @return float
     */
    public function getTankCapacity(): float
    {
        return $this->tankCapacity;
    }

    /**
     * @param float $tankCapacity
     */
    private function setTankCapacity(float $tankCapacity): void
    {
        $this->tankCapacity = $tankCapacity;
    }

    /**
     * @param $fuel
     * @throws Exception
     */
    public function Refuel($fuel) {
        $this->checkFuel($fuel);
        $this->setFuelQuantity($this->fuelQuantity + $fuel);
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

        $neededCapacity = $this->fuelQuantity - $neededFuel;
        $this->setFuelQuantity($neededCapacity);
        echo "{$type} travelled {$distance} km" . PHP_EOL;
    }

    public function __toString()
    {
        $fuelFormat = number_format($this->getFuelQuantity(), 2, '.', '');
        $type = get_called_class();
        return "{$type}: {$fuelFormat}";
    }

    /**
     * @param $fuel
     * @throws Exception
     */
    private function checkFuel($fuel) {
        if ($fuel <= 0) {
            throw new Exception('Fuel must be a positive number');
        }
    }
}