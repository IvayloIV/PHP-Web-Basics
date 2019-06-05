<?php

class Car {
    /**
     * @var float
     */
    private $speed;

    /**
     * @var float
     */
    private $fuel;

    /**
     * @var float
     */
    private $fuelEconomy;

    /**
     * @var float
     */
    private $totalDistance;

    /**
     * @var float
     */
    private $timeTraveled;

    /**
     * @var float
     */
    private $minutePerKm;

    /**
     * @var float
     */
    private $fuelPerKm;

    public function __construct(float $speed, float $fuel, float $fuelEconomy)
    {
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->fuelEconomy = $fuelEconomy;
        $this->totalDistance = 0;
        $this->timeTraveled = 0;

        $this->minutePerKm = 60 / $speed;
        $this->fuelPerKm = $fuelEconomy / 100;
    }

    /**
     * @return float
     */
    public function getSpeed(): float
    {
        return $this->speed;
    }

    /**
     * @param float $speed
     */
    private function setSpeed(float $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @return float
     */
    public function getFuel(): float
    {
        return $this->fuel;
    }

    /**
     * @param float $fuel
     */
    private function setFuel(float $fuel): void
    {
        $this->fuel = $fuel;
    }

    /**
     * @return float
     */
    public function getFuelEconomy(): float
    {
        return $this->fuelEconomy;
    }

    /**
     * @param float $fuelEconomy
     */
    private function setFuelEconomy(float $fuelEconomy): void
    {
        $this->fuelEconomy = $fuelEconomy;
    }

    public function travel(float $distance) {
        $neededFuel = $this->fuelPerKm * $distance;

        if ($this->fuel < $neededFuel) {
            $distance = $this->fuel / $this->fuelPerKm;
            $this->fuel = 0;
        } else {
            $this->fuel -= $neededFuel;
        }

        $this->totalDistance += $distance;
        $this->timeTraveled += $distance * $this->minutePerKm;
    }

    public function refuel(float $liters) {
        $this->fuel += $liters;
    }

    public function getDistance() {
        $distance = number_format(round($this->totalDistance, 1), 1);
        return "Total Distance: {$distance}";
    }

    public function getTime() {
        $hours = floor($this->timeTraveled / 60);
        $minutes = floor($this->timeTraveled % 60);
        return "Total Time: {$hours} hours and {$minutes} minutes";
    }

    public function getFuelLeft() {
        $fuel = number_format(round($this->fuel, 1), 1);
        return "Fuel left: {$fuel} liters";
    }
}