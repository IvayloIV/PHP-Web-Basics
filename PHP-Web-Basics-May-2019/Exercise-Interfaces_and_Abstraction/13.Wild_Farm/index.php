<?php

spl_autoload_register();

while (($line = readline()) !== 'End') {
    $animalTokens = explode(' ', $line);
    list($foodType, $foodQuantity) = explode(' ', readline());

    /** @var Food $food */
    $food = new $foodType($foodQuantity);
    $el = array_splice($animalTokens, 1);

    /** @var Animal $animal */
    $animal = new $animalTokens[0](...$el);

    echo $animal->makeSound() . PHP_EOL;
    try {
        $animal->eat($food);
    } catch (Exception $e) {
        echo $e->getMessage() . PHP_EOL;
    }

    echo $animal . PHP_EOL;
}