<?php

spl_autoload_register();

/** @var Person[] $people */
$people = [];

while(($line = readline()) !== 'End') {
    $tokens = explode(' ', $line);

    if (count($tokens) > 2) {
        $people[] = new Citizen($tokens[0], $tokens[1], $tokens[2]);
    } else {
        $people[] = new Robot($tokens[0], $tokens[1]);
    }
}

$searchId = readline();
foreach ($people as $person) {
    if ($person->haveSpecialId($searchId)) {
        echo $person->getId() . PHP_EOL;
    }
}