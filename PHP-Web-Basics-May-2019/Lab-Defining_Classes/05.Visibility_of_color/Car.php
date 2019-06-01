<?php

include "./Vehicle.php";

class Car extends Vehicle {
    private $brand;
    private $model;
    private $year;

    function __construct($numberDoors, $color, $brand, $model, $year) {
        parent::__construct($numberDoors, $color);
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }

    public function paint($paint_color) {
        parent::setColor($paint_color);
    }
}

$car = new Car(4,'Red', 'Audi', 'A4', 2016);
$car->paint('blue');
echo $car->getColor();