<?php

spl_autoload_register();

try {
    while (($animalType = readline()) !== 'Beast!') {
        $tokens = explode(' ', readline());
        if (count($tokens) < 3 || !class_exists($animalType)) {
            throw new Error('Invalid input!');
        }
        list($name, $age, $gender) = $tokens;

        $animal = new $animalType($name, $age, $gender);
        echo $animal . PHP_EOL;
        produceSound($animal);
    }
} catch (Error $e) {
    echo $e->getMessage() . PHP_EOL;
}

function produceSound(Animal $animal) {
    echo $animal->produceSound() . PHP_EOL;
}