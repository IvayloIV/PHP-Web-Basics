<?php

class Tablet extends Mobile implements TouchScreen {
    /**
     * @var float
     */
    private $stdResolution;

    public function __construct(string $operator, float $stdResolution)
    {
        parent::__construct($operator);
        $this->setStdResolution($stdResolution);
    }

    /**
     * @return float
     */
    public function getStdResolution(): float
    {
        return $this->stdResolution;
    }

    /**
     * @param float $stdResolution
     */
    private function setStdResolution(float $stdResolution): void
    {
        $this->stdResolution = $stdResolution;
    }

    public function canCall(): bool
    {
        // TODO: Implement canCall() method.
    }

    public function battery(): float
    {
        // TODO: Implement battery() method.
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