<?php

$num = (int)readline();
for($i = 1; $i <= $num; $i++) {
    $sum = 0;
    $currentNum = $i;
    while ($currentNum > 0) {
        $lastNum = $currentNum % 10;
        $sum += $lastNum;
        $currentNum = (int)($currentNum / 10);
    }

    echo "{$i} -> ";
    if ($sum === 5 || $sum === 7 || $sum === 11) {
        echo "True\n";
    } else {
        echo "False\n";
    }
}