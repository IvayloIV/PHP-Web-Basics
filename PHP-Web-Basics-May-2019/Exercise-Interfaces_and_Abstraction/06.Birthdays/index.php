<?php

spl_autoload_register();

/** @var Birthday[] $elements */
$elements = [];
while(($line = readline()) !== 'End') {
    $tokens = explode(' ', $line);
    if ($tokens[0] === 'Robot') {
        continue;
    }

    $el = array_splice($tokens, 1);
    $elements[] = new $tokens[0](...$el);
}

$year = readline();
foreach ($elements as $person) {
    if ($person->getByYear($year)) {
        echo $person->getBirthday() . PHP_EOL;
    }
}