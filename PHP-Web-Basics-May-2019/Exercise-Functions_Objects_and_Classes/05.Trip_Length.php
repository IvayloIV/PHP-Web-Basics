<?php

[$x1, $y1, $x2, $y2, $x3, $y3] = explode(', ', readline());

$pointAB = calculateDistance($x1, $y1, $x2, $y2);
$pointBC = calculateDistance($x2, $y2, $x3, $y3);
$pointAC = calculateDistance($x1, $y1, $x3, $y3);

$abc = calculateABC($pointAB, $pointBC, $pointAC);
echo $abc;

function calculateABC(float $pointAB, float $pointBC, float $pointAC) {
    if ($pointAB <= $pointAC && $pointAC >= $pointBC) {
        $result = $pointAB + $pointBC;
        return "1->2->3: {$result}";
    } else if ($pointAB <= $pointBC && $pointBC > $pointAC) {
        $result = $pointAB + $pointAC;
        return "2->1->3: {$result}";
    } else {
        $result = $pointBC + $pointAC;
        return "1->3->2: {$result}";
    }
}

function calculateDistance(float $x1, float $y1, float $x2, float $y2) {
    return sqrt(pow($x1 - $x2, 2) + pow($y1- $y2, 2));
}