<?php

$firstNumber = (float)readline();
$secondNumber = (float)readline();
$sum = $firstNumber + $secondNumber;
$sumStr = number_format($sum, 2, '.', '');

echo "\$firstNumber + \$secondNumber = {$firstNumber} + {$secondNumber} = {$sumStr}";