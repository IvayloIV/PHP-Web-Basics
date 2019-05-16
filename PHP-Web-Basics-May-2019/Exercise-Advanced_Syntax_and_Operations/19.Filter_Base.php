<?php

$ages = [];
$salaries = [];
$positions = [];

$line = '';
while (($line = readline()) !== 'filter base') {
    $tokens = explode(' -> ', $line);
    $name = $tokens[0];

    if (ctype_digit($tokens[1])) {
        $ages[$name] = intval($tokens[1]);
    } else if (is_numeric($tokens[1])){
        $salaries[$name] = floatval($tokens[1]);
    } else {
        $positions[$name] = $tokens[1];
    }
}

$type = readline();

if ($type === 'Age') {
    printReport($ages, $type);
} else if ($type === 'Salary') {
    printReport($salaries, $type);
} else if ($type === 'Position') {
    printReport($positions, $type);
}

function printReport($collection, $type) {
    foreach ($collection as $name => $value) {
        if ($type === 'Salary') {
            $value = number_format($value, 2, '.', '');
        }
        echo "Name: {$name}\n";
        echo "{$type}: {$value}\n";
        echo "====================\n";
    }
}