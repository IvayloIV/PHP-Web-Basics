<?php

function cutCommand($num, $limit) {
    $count = 0;
    while ($num / 4 >= $limit) {
        $num /= 4;
        $count++;
    }
    if ($count > 0) {
        echo "Cut x{$count}" . PHP_EOL;
        return washCommand($num);
    }

    return $num;
}

function lapCommand($num, $limit) {
    $count = 0;
    while ($num * 0.8 >= $limit) {
        $num *= 0.8;
        $count++;
    }
    if ($count > 0) {
        echo "Lap x{$count}" . PHP_EOL;
        return washCommand($num);
    }

    return $num;
}

function grindCommand($num, $limit) {
    $count = 0;
    while ($num - 20 >= $limit) {
        $num -= 20;
        $count++;
    }
    if ($count > 0) {
        echo "Grind x{$count}" . PHP_EOL;
        return washCommand($num);
    }

    return $num;
}

function etchCommand($num, $limit) {
    $count = 0;
    while ($num - 2 >= $limit) {
        $num -= 2;
        $count++;
    }
    if ($count > 0) {
        echo "Etch x{$count}" . PHP_EOL;
        return washCommand($num);
    }

    return $num;
}

function xrayCommand($num, $limit) {
    if ($num < $limit) {
        echo 'X-ray x1' . PHP_EOL;
        return $num + 1;
    }

    return $num;
}

function washCommand($num) {
    $num = floor($num);
    echo 'Transporting and washing' . PHP_EOL;
    return $num;
}

$nums = array_map('intval', explode(', ', readline()));
$limit = array_shift($nums);
foreach ($nums as $num) {
    echo "Processing chunk {$num} microns" . PHP_EOL;
    $num = cutCommand($num, $limit);
    $num = lapCommand($num, $limit);
    $num = grindCommand($num, $limit);
    $num = etchCommand($num, $limit - 1);
    $num = xrayCommand($num, $limit);
    echo "Finished crystal {$num} microns" . PHP_EOL;
}
