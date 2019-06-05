<?php

include_once './Car.php';

$n = intval(readline());

/** @var Car[] $cars */
$cars = [];
for ($i = 0; $i < $n; $i++) {
    [$model, $fuelAmount, $fuelCost] = explode(' ', readline());
    $cars[$model] = new Car($model, $fuelAmount, $fuelCost);
}

while(($line = readline()) !== 'End') {
    try {
        [$drive, $model, $distance] = explode(' ', $line);
        $cars[$model]->travel($distance);
    } catch (Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }
}

foreach ($cars as $car) {
    echo $car . PHP_EOL;
}