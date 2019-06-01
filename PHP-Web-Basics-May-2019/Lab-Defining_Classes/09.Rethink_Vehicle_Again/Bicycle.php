<?php

include './Vehicle.php';

class Bicycle extends Vehicle {
    private $forSkirt;
    private $rides;

    function __construct($color, $brand, $model, $year, $forSkirt) {
        parent::__construct($color, $brand, $model, $year);
        $this->setDoors();
        $this->forSkirt = $forSkirt;
        $this->rides = false;
    }

    public function isRides() {
        return $this->rides;
    }

    private function setRides(bool $mode) {
        $this->rides = $mode;
    }

    public function ride() {
        $this->setRides(true);
    }

    public function stop() {
        $this->setRides(false);
    }

    public function setDoors(int $numberDoors = 0): void {
        parent::setDoors($numberDoors);
    }

    function __toString() {
        $ride = $this->isRides() ? 'yes' : 'no';
        return "Brand: {$this->brand}\n  Model: {$this->model}\n Year: {$this->year}\n Ride: {$ride}";
    }
}

$b1 = new Bicycle('Red', 'Audi', 'S8', 2019, false);
$b1->ride();
$b2 = new Bicycle('Blue', 'Audi', 'S8', 2019, false);
$b2->stop();

echo $b1 . PHP_EOL;
echo $b2;
