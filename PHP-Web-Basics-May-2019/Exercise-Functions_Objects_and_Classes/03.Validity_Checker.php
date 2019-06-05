<?php

function getDistanceTowPoints($x1, $x2, $y1, $y2) {
    return sqrt(pow($x1 - $x2, 2) + pow($y1 - $y2, 2));
}

function isValid($num) {
    return round($num) === $num;
}

function printPoints($x1, $x2, $y1, $y2, $distance) {
    echo "{{$x1}, {$y1}} to {{$x2}, {$y2}} is ";
    echo (isValid($distance) ? 'valid' : 'invalid') . PHP_EOL;
}

list($x1, $y1, $x2, $y2) = array_map('intval', explode(', ', readline()));

$distance1 = getDistanceTowPoints($x1, 0, $y1, 0);
printPoints($x1, 0, $y1, 0, $distance1);

$distance2 = getDistanceTowPoints($x2, 0, $y2, 0);
printPoints($x2, 0, $y2, 0, $distance2);

$distance3 = getDistanceTowPoints($x1, $x2, $y1, $y2);
printPoints($x1, $x2, $y1, $y2, $distance3);