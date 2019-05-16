<?php

$arr = explode(', ', readline());
$towns = [];
for ($i = 0; $i < count($arr); $i += 2) {
    $town = $arr[$i];
    $income = intval($arr[$i + 1]);

    if (!key_exists($town, $towns)) {
        $towns[$town] = 0;
    }
    $towns[$town] += $income;
}

foreach ($towns as $town => $income) {
    echo "{$town} => {$income}\n";
}