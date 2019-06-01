<?php

class Vehicle {
    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $numberDoors;

    /**
     * Vehicle constructor.
     * @param string $numberDoors
     * @param string $color
     */
    public function __construct(string $numberDoors, string $color)
    {
        $this->numberDoors = $numberDoors;
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
     * @return string
     */
    public function getDoors(): string
    {
        return $this->numberDoors;
    }

    /**
     * @param string $numberDoors
     */
    public function setDoors(string $numberDoors): void
    {
        $this->numberDoors = $numberDoors;
    }
}