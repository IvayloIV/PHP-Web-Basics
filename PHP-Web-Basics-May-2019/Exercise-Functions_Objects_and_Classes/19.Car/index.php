<?php

spl_autoload_register();

list($speed, $fuel, $fuelEconomy) = explode(' ', readline());
$car = new Car($speed, $fuel, $fuelEconomy);

while (($line = readline()) !== 'END') {
    $tokens = explode(' ', $line);
    if ($tokens[0] === 'Travel') {
        $car->travel($tokens[1]);
    } else if ($tokens[0] === 'Refuel') {
        $car->refuel($tokens[1]);
    } else if ($line === 'Distance') {
        echo $car->getDistance() . PHP_EOL;
    } else if ($line === 'Time') {
        echo $car->getTime() . PHP_EOL;
    } else if ($line === 'Fuel') {
        echo $car->getFuelLeft() . PHP_EOL;
    }
}