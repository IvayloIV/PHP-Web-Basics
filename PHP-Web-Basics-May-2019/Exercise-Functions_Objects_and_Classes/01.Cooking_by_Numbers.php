<?php

function chopNum($num) {
    return $num / 2;
}

function diceNum($num) {
    return sqrt($num);
}

function spiceNum($num) {
    return $num + 1;
}

function bakeNum($num) {
    return $num * 3;
}

function filletNum($num) {
    return $num * 0.8;
}

$num = intval(readline());
$commands = explode(', ', readline());
foreach ($commands as $command) {
    $command .= 'Num';
    $num = $command($num);
    echo $num . PHP_EOL;
}