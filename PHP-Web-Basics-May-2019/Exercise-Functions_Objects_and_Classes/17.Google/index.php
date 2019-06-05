<?php

spl_autoload_register();

/** @var Person[] $people */
$people = [];
while (($line = readline()) !== 'End') {
    $tokens = explode(' ', $line);
    $name = $tokens[0];
    $type = $tokens[1];

    if (!key_exists($name, $people)) {
        $people[$name] = new Person($name);
    }

    switch ($type) {
        case 'company':
            $people[$name]->setCompany(new Company($tokens[2], $tokens[3], $tokens[4]));
            break;
        case 'pokemon':
            $people[$name]->addPokemon(new Pokemon($tokens[2], $tokens[3]));
            break;
        case 'parents':
            $people[$name]->addParent(new Parents($tokens[2], $tokens[3]));
            break;
        case 'children':
            $people[$name]->addChild(new Child($tokens[2], $tokens[3]));
            break;
        case 'car':
            $people[$name]->setCar(new Car($tokens[2], $tokens[3]));
            break;
    }
}

$personName = readline();
echo $people[$personName];