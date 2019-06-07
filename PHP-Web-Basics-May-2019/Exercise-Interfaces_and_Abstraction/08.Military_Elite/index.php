<?php

spl_autoload_register();
$people = [];
$privates = [];

while (($line = readline()) !== 'End') {
    $tokens = explode(' ', $line);
    $type = $tokens[0];
    $id = $tokens[1];
    $firstName = $tokens[2];
    $lastName = $tokens[3];

    if ($type === 'Private') {
        $salary = floatval($tokens[4]);
        $newPrivates = new PrivateSoldier($id, $firstName, $lastName, $salary);
        $people[] = $newPrivates;
        $privates[$id] = $newPrivates;
    } else if ($type === 'LeutenantGeneral') {
        $salary = floatval($tokens[4]);
        $leutenantGeneral = new LeutenantGeneral($id, $firstName, $lastName, $salary);

        for ($i = 5; $i < count($tokens); $i++) {
            $leutenantGeneral->addPrivate($privates[$tokens[$i]]);
        }
        $people[] = $leutenantGeneral;
    } else if ($type === 'Engineer') {
        $salary = floatval($tokens[4]);
        $corps = $tokens[5];
        $newEngineer = new Engineer($id, $firstName, $lastName, $salary, $corps);

        for ($i = 6; $i < count($tokens) - 1; $i += 2) {
            $newEngineer->addRepair(new Repair($tokens[$i], $tokens[$i + 1]));
        }
        $people[] = $newEngineer;
    } else if ($type === 'Commando') {
        $salary = floatval($tokens[4]);
        $corps = $tokens[5];
        $newCommando = new Commando($id, $firstName, $lastName, $salary, $corps);

        for ($i = 6; $i < count($tokens) - 1; $i += 2) {
            $newCommando->addMission(new Mission($tokens[$i], $tokens[$i + 1]));
        }
        $people[] = $newCommando;
    } else if ($type === 'Spy') {
        $codeNumber = $tokens[4];
        $people[] = new Spy($id, $firstName, $lastName, $codeNumber);
    }
}

foreach ($people as $person) {
    echo $person;
}