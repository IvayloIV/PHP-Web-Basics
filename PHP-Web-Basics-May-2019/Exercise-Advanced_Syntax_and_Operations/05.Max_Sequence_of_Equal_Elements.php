<?php

$nums = array_map('intval', explode(' ', readline()));

$bestNum = 0;
$bestSequence = 0;

for ($i = 0; $i < count($nums); $i++) {
    $currentNum = $nums[$i];
    $currentSequence = 1;

    for ($j = $i + 1; $j < count($nums); $j++) {
        if ($currentNum === $nums[$j]) {
            $currentSequence++;
        } else {
            break;
        }
    }

    if ($bestSequence < $currentSequence) {
        $bestSequence = $currentSequence;
        $bestNum = $currentNum;
    }
}

for ($i = 0; $i < $bestSequence; $i++) {
    echo $bestNum . ' ';
}