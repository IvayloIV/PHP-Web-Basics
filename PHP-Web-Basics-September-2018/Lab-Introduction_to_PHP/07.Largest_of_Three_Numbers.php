<?php

$num1 = (int)readline();
$num2 = (int)readline();
$num3 = (int)readline();

$largestNum = $num1;

if ($num2 > $largestNum) {
    $largestNum = $num2;
}

if ($num3 > $largestNum) {
    $largestNum = $num3;
}

echo $largestNum;
