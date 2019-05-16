<?php

$num1 = (int)readline();
$num2 = (int)readline();
$smallerNum = min($num1, $num2);
$largerNum = max($num1, $num2);

for ($i = $smallerNum; $i <= $largerNum; $i++) {
    echo $i . "\n";
}