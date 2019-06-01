<?php

class Vehicle {
    /**
     * @var string
     */
    protected $color;

    /**
     * @var string
     */
    private $numberDoors;

    /**
     * Vehicle constructor.
     * @param string $color
     */
    public function __construct(string $color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getDoors(): int
    {
        return $this->numberDoors;
    }

    /**
     * @param int $numberDoors
     */
    protected function setDoors(int $numberDoors): void
    {
        $this->numberDoors = $numberDoors;
    }
}