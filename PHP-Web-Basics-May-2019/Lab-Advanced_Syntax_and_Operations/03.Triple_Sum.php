<?php

$nums = array_map('intval', explode(' ', readline()));

$find = false;
for ($i = 0; $i < count($nums); $i++) {
    for ($j = $i + 1; $j < count($nums); $j++) {
        for ($k = 0; $k < count($nums); $k++) {
            $a = $nums[$i];
            $b = $nums[$j];
            $c = $nums[$k];

            if ($a + $b === $c) {
                echo "{$a} + {$b} == {$c}\n";
                $find = true;
            }
        }
    }
}

if (!$find) {
    echo "No";
}