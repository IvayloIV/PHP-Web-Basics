<?php

$speed = intval(readline());
$area = readline();

function getLimit($area) {
    $limit = 0;

    switch ($area) {
        case 'motorway':
            $limit = 130;
            break;
        case 'interstate':
            $limit = 90;
            break;
        case 'city':
            $limit = 50;
            break;
        case 'residential':
            $limit = 20;
            break;
    }

    return $limit;
}

$limit = getLimit($area);
$diff = $speed - $limit;
if ($diff > 0) {
    if ($diff <= 20) {
        echo 'speeding';
    } else if ($diff <= 40) {
        echo 'excessive speeding';
    } else {
        echo 'reckless driving';
    }
}