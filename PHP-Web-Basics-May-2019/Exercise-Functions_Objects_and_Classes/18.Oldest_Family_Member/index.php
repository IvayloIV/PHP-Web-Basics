<?php

spl_autoload_register();

$n = intval(readline());
$family = new Family();
for ($i = 0; $i < $n; $i++) {
    [$name, $age] = explode(' ', readline());
    $family->addMember(new Person($name, $age));
}

echo $family->getOldestMember();