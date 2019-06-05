<?php

class Tire {
    /**
     * @var float
     */
    private $pressure;

    /**
     * @var int
     */
    private $age;

    public function __construct(float $pressure, int $age)
    {
        $this->setPressure($pressure);
        $this->setAge($age);
    }

    /**
     * @return float
     */
    public function getPressure(): float
    {
        return $this->pressure;
    }

    /**
     * @param float $pressure
     */
    protected function setPressure(float $pressure): void
    {
        $this->pressure = $pressure;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    protected function setAge(int $age): void
    {
        $this->age = $age;
    }
}