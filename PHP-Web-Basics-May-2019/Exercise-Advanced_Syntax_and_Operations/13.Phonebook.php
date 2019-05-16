<?php

$phoneBook = [];

$line = '';
while (($line = readline()) !== 'END') {
    $tokens = explode(' ', $line);
    $command = $tokens[0];
    $name = $tokens[1];

    if ($command === 'A') {
        $phone = $tokens[2];
        $phoneBook[$name] = $phone;
    } else if ($command === 'S') {
        if (!key_exists($name, $phoneBook)) {
            echo "Contact {$name} does not exist.\n";
        } else {
            echo "{$name} -> {$phoneBook[$name]}\n";
        }
    }
}