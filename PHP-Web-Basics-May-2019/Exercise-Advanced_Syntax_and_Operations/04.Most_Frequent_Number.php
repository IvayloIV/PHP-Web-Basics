<?php

$nums = array_map('intval', explode(' ', readline()));

$bestSequence = 0;
$bestNum = 0;
for ($i = 0; $i < count($nums); $i++) {
    $currentNum = $nums[$i];
    $currentSequence = 1;

    for ($j = $i + 1; $j < count($nums); $j++) {
        if ($currentNum === $nums[$j]) {
            $currentSequence++;
        }
    }

    if ($currentSequence > $bestSequence) {
        $bestNum = $currentNum;
        $bestSequence = $currentSequence;
    }
}

echo $bestNum;