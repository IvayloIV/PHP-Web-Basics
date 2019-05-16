<?php

$phoneBook = [];

$line = '';
while (($line = readline()) !== 'Over') {
    $tokens = explode(' : ', $line);
    $firstElement = $tokens[0];
    $secondElement = $tokens[1];

    if (is_numeric($firstElement)) {
        $phoneBook[$secondElement] = $firstElement;
    } else {
        $phoneBook[$firstElement] = $secondElement;
    }
}

ksort($phoneBook);
foreach ($phoneBook as $key => $value) {
    echo "{$key} -> {$value}\n";
}