<?php

class Vehicle {
    private $numberDoors;
    private $color;

    function __construct($numberDoors, $color) {
        $this->numberDoors = $numberDoors;
        $this->color= $color;
    }
}

$myVehicle = new Vehicle(2, 'orangle');
print_r($myVehicle);