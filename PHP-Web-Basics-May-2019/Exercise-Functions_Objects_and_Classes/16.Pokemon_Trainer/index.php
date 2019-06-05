<?php

spl_autoload_register();

$trainers = [];
while(($line = readline()) !== 'Tournament') {
    list($trainerName, $pokemonName, $pokemonElement, $pokemonHealth) = explode(' ', $line);
    $newPokemon = new Pokemon($pokemonName, $pokemonElement, $pokemonHealth);

    if (!key_exists($trainerName, $trainers)) {
        $trainers[$trainerName] = new Trainer($trainerName);
    }
    $trainers[$trainerName]->addPokemon($newPokemon);
}

while (($element = readline()) !== 'End') {
    foreach ($trainers as $trainer) {
        $trainer->receiveBadge($element);
    }
}

usort($trainers, function(Trainer $trainer1, Trainer $trainer2) {
    return $trainer2->getBadges() - $trainer1->getBadges();
});

foreach ($trainers as $trainer) {
    echo $trainer . PHP_EOL;
}