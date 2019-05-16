<?php

$nums = array_map('intval', explode(' ', readline()));

$bestSequence = 0;
$startIndex = 0;

for ($i = 0; $i < count($nums); $i++) {
    $currentSequence = 1;

    for ($j = $i; $j < count($nums) - 1; $j++) {
        if ($nums[$j] < $nums[$j + 1]) {
            $currentSequence++;
        } else {
            break;
        }
    }

    if ($bestSequence < $currentSequence) {
        $bestSequence = $currentSequence;
        $startIndex = $i;
    }
}

for ($i = $startIndex; $i < $startIndex + $bestSequence; $i++) {
    echo $nums[$i] . ' ';
}