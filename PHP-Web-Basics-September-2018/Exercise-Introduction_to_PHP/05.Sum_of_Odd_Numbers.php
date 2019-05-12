<?php

$num = (int)readline();

$sum = 0;
$counter = 1;
for ($i = 1; $i <= $num; $i++) {
    echo $counter . "\n";
    $sum += $counter;
    $counter += 2;
}

echo "Sum: {$sum}";