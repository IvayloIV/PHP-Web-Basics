<?php

class Vehicle {
    /**
     * @var int
     */
    private $numberDoors;

    /**
     * @var string
     */
    private $color;

    function __construct($numberDoors, $color) {
        $this->setDoors($numberDoors);
        $this->setColor($color);
    }

    function getDoors() {
        return $this->numberDoors;
    }

    function setDoors($numberDoors) {
        $this->numberDoors = $numberDoors;
    }

    function getColor() {
        return $this->color;
    }

    function setColor($color) {
        $this->color = $color;
    }

    public function __get($name) {
        if (property_exists($this, $name)) {
            return $this->$name;
        }

        return 'property doesn’t exist';
    }
}

$myVehicle = new Vehicle(2, 'orangle');
$myVehicle->setDoors(4);
echo $myVehicle->numberDoors;