<?php

$n = (int)readline();
$k = (int)readline();

for ($i = $k; $i <= 10; $i++) {
    $sum = $n * $i;
    echo "{$n} X {$i} = {$sum}\n";
}

if ($k > 10) {
    $sum = $n * $k;
    echo "{$n} X {$k} = {$sum}";
}