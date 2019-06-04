<?php

spl_autoload_register();

[$car, $fuelQuantity, $fuelConsumption, $tankCapacity] = explode(' ', readline());
$car = new Car($fuelQuantity, $fuelConsumption, $tankCapacity);

[$truck, $fuelQuantity, $fuelConsumption, $tankCapacity] = explode(' ', readline());
$truck = new Truck($fuelQuantity, $fuelConsumption, $tankCapacity);

[$bus, $fuelQuantity, $fuelConsumption, $tankCapacity] = explode(' ', readline());
$bus = new Bus($fuelQuantity, $fuelConsumption, $tankCapacity);

$n = intval(readline());
for ($i = 0; $i < $n; $i++) {
    try {
        [$command, $type, $data] = explode(' ', readline());
        $vehicle = null;

        if ($type === 'Car') {
            $vehicle = $car;
        } else if ($type === 'Truck') {
            $vehicle = $truck;
        } else {
            $vehicle = $bus;
        }

        $vehicle->$command($data);
    } catch (Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }
}

echo $car . PHP_EOL;
echo $truck . PHP_EOL;
echo $bus;