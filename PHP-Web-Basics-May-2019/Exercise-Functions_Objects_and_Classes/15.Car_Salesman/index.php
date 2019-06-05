<?php

spl_autoload_register();

$n = intval(readline());
$engines = [];
for ($i = 0; $i < $n; $i++) {
    $tokens = explode(' ', readline());
    $engineModel = $tokens[0];
    $enginePower = $tokens[1];
    $engineDisplacement = 'n/a';
    $engineEfficiency = 'n/a';

    if (count($tokens) > 3) {
        $engineDisplacement = $tokens[2];
        $engineEfficiency = $tokens[3];
    } else if (count($tokens) > 2) {
        if (is_numeric($tokens[2])) {
            $engineDisplacement = $tokens[2];
        } else {
            $engineEfficiency = $tokens[2];
        }
    }
    $engines[$tokens[0]] = new Engine($engineModel, $enginePower, $engineDisplacement, $engineEfficiency);
}

$m = intval(readline());
$cars = [];
for ($i = 0; $i < $m; $i++) {
    $tokens = explode(' ', readline());
    $carModel = $tokens[0];
    $carEngine = $engines[$tokens[1]];
    $carWeight = 'n/a';
    $carColor = 'n/a';

    if (count($tokens) > 3) {
        $carWeight = $tokens[2];
        $carColor = $tokens[3];
    } else if (count($tokens) > 2) {
        if (is_numeric($tokens[2])) {
            $carWeight = $tokens[2];
        } else {
            $carColor = $tokens[2];
        }
    }
    $cars[$tokens[0]] = new Car($carModel, $carEngine, $carWeight, $carColor);
}

foreach ($cars as $car) {
    echo $car . PHP_EOL;
}