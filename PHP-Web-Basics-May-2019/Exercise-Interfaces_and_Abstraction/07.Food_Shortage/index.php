<?php

spl_autoload_register();

/** @var Buyer[] $elements */
$elements = [];
$n = intval(readline());
for ($i = 0; $i < $n; $i++) {
    $tokens = explode(' ', readline());
    $name = $tokens[0];
    $age = intval($tokens[1]);

    if (count($tokens) > 3) {
        $id = $tokens[2];
        $birthdate = $tokens[3];
        $elements[$name] = new Citizen($name, $age, $id, $birthdate);
    } else {
        $group = $tokens[2];
        $elements[$name] = new Rebel($name, $age, $group);
    }
}

while(($name = readline()) !== 'End') {
    if (key_exists($name, $elements)) {
        $elements[$name]->buyFood();
    }
}

$count = 0;
foreach ($elements as $el) {
    $count += $el->getFoodCount();
}
echo $count;