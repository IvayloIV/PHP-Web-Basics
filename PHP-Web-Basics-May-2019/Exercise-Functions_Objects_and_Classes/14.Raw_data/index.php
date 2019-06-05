<?php

spl_autoload_register();
$n = intval(readline());

$cars = [];
for ($i = 0; $i < $n; $i++) {
    [$model, $engineSpeed, $enginePower, $cargoWeight, $cargoType, $t1Pressure, $t1Age,
        $t2Pressure, $t2Age, $t3Pressure, $t3Age, $t4Pressure, $t4Age] = explode(' ', readline());

    $engine = new Engine($engineSpeed, $enginePower);
    $cargo = new Cargo($cargoWeight, $cargoType);
    $car = new Car($model, $engine, $cargo);

    $car->addTire(new Tire($t1Pressure, $t1Age));
    $car->addTire(new Tire($t2Pressure, $t2Age));
    $car->addTire(new Tire($t3Pressure, $t3Age));
    $car->addTire(new Tire($t4Pressure, $t4Age));

    $cars[] = $car;
}

$type = readline();
$carsType = array_filter($cars, function (Car $car) use($type) {
    return $car->getCargo()->getCargoType() === $type &&
        ($type === 'fragile' ? $car->isFragile() : $car->isFlamable());
});;

foreach ($carsType as $car) {
    echo $car->getModel() . PHP_EOL;
}