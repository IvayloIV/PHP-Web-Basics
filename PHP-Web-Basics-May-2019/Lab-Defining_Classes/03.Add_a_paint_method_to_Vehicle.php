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
     * @param string $color
     * @param string $numberDoors
     */
    public function __construct(string $color, string $numberDoors)
    {
        $this->color = $color;
        $this->numberDoors = $numberDoors;
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
    public function getNumberDoors(): string
    {
        return $this->numberDoors;
    }

    /**
     * @param string $numberDoors
     */
    public function setNumberDoors(string $numberDoors): void
    {
        $this->numberDoors = $numberDoors;
    }

    function paint($color) {
        $this->setColor($color);
    }
}

$myVehicle = new Vehicle('red', 3);
$myVehicle->paint('blue');
echo $myVehicle->getColor();