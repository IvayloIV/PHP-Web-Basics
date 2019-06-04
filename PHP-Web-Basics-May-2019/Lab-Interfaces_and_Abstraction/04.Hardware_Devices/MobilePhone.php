<?php

class MobilePhone extends Mobile implements TouchScreen {
    /**
     * @var float
     */
    private $size;

    public function __construct(string $operator, float $size)
    {
        parent::__construct($operator);
        $this->setSize($size);
    }

    /**
     * @return float
     */
    public function getSize(): float
    {
        return $this->size;
    }

    /**
     * @param float $size
     */
    private function setSize(float $size): void
    {
        $this->size = $size;
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