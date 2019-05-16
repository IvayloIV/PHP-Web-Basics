<?php

$phoneBook = [];

$line = '';
while (($line = readline()) !== 'END') {
    $tokens = explode(' ', $line);
    $command = $tokens[0];

    if ($command === 'A') {
        $name = $tokens[1];
        $phone = $tokens[2];
        $phoneBook[$name] = $phone;
    } else if ($command === 'S') {
        $name = $tokens[1];
        if (!key_exists($name, $phoneBook)) {
            echo "Contact {$name} does not exist.\n";
        } else {
            echo "{$name} -> {$phoneBook[$name]}\n";
        }
    } else if ($command === 'ListAll') {
        ksort($phoneBook);
        foreach ($phoneBook as $key => $value) {
            echo "{$key} -> {$value}\n";
        }
    }
}