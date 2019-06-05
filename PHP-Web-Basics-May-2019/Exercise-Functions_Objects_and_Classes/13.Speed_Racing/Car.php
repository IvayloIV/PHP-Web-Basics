<?php

class Car {
    /**
     * @var string
     */
    private $model;

    /**
     * @var float
     */
    private $fuelAmount;

    /**
     * @var float
     */
    private $fuelCost;

    /**
     * @var float
     */
    private $distance;

    public function __construct(string $model, float $fuelAmount, float $fuelCost)
    {
        $this->setModel($model);
        $this->setFuelAmount($fuelAmount);
        $this->setFuelCost($fuelCost);
        $this->distance = 0;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    private function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return float
     */
    public function getFuelAmount(): float
    {
        return $this->fuelAmount;
    }

    /**
     * @param float $fuelAmount
     */
    private function setFuelAmount(float $fuelAmount): void
    {
        $this->fuelAmount = $fuelAmount;
    }

    /**
     * @return float
     */
    public function getFuelCost(): float
    {
        return $this->fuelCost;
    }

    /**
     * @param float $fuelCost
     */
    private function setFuelCost(float $fuelCost): void
    {
        $this->fuelCost = $fuelCost;
    }

    /**
     * @return float
     */
    public function getDistance(): float
    {
        return $this->distance;
    }

    /**
     * @param float $distance
     */
    private function setDistance(float $distance): void
    {
        $this->distance = $distance;
    }


    /**
     * @param float $distance
     * @throws Exception
     */
    public function travel(float $distance)
    {
        $fuelUsed = round($distance * $this->fuelCost, 2);
        if ($fuelUsed > round($this->fuelAmount, 2)) {
            throw new Exception("Insufficient fuel for the drive");
        }

        $this->fuelAmount -= $fuelUsed;
        $this->distance += $distance;
    }

    public function __toString()
    {
        $fuelAmount = number_format(abs($this->getFuelAmount()), 2, '.', '');
        return "{$this->getModel()} {$fuelAmount} {$this->getDistance()}";
    }
}