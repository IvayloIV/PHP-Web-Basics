<?php

$string = "Pesho";
$int = 4;
$float = 3.14;
$array = array("Pet", "Dog", "Dino");
$object = (object)[43, 54];

$arr = [$string, $int, $float, $array, $object];
foreach ($arr as $el) {
    checkType($el);
}

function checkType($el) {
    if (is_numeric($el)) {
        var_dump($el);
    } else {
        echo gettype($el) . PHP_EOL;
    }
}