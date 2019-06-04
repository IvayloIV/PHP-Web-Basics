<?php

class Laptop extends Computer implements Keyboard, Mouse, TouchScreen {
    /**
     * @var float
     */
    private $battery;

    public function __construct(string $processor, string $ram, float $battery)
    {
        parent::__construct($processor, $ram);
        $this->setBattery($battery);
    }

    /**
     * @return float
     */
    public function getBattery(): float
    {
        return $this->battery;
    }

    /**
     * @param float $battery
     */
    private function setBattery(float $battery): void
    {
        $this->battery = $battery;
    }

    public function pressKey()
    {
        // TODO: Implement pressKey() method.
    }

    public function changeStatus()
    {
        // TODO: Implement changeStatus() method.
    }

    public function click()
    {
        // TODO: Implement click() method.
    }

    public function move()
    {
        // TODO: Implement move() method.
    }

    public function moveFinger()
    {
        // TODO: Implement moveFinger() method.
    }

    public function clickFinger()
    {
        // TODO: Implement clickFinger() method.
    }

    public function writeText()
    {
        // TODO: Implement writeText() method.
    }
}