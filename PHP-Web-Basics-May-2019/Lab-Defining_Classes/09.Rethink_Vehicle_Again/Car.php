<?php

include "./Vehicle.php";

class Car extends Vehicle {
    function __construct($numberDoors, $color, $brand, $model, $year) {
        parent::__construct($color, $brand, $model, $year);
        parent::setDoors($numberDoors);
    }

    public function paint($paint_color) {
        $this->color = $paint_color;
    }
}

$myCar = new Car(4,'Red', 'Audi', 'A4', 2016);
//$myCar->setDoors(15);

