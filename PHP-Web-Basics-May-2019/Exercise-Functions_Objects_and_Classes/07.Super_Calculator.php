<?php

$result = [];
while (($command = readline()) !== 'finally') {
    try {
        $result[] = $command();
    } catch (Exception $e) {
        echo 'Caught exception: ' . $e->getMessage() . PHP_EOL;
    }
}

$isValid = true;
while ($isValid) {
    try {
        $command = readline() . 'Command';
        $result = $command($result);
        $isValid = false;
    } catch (Exception $e) {
        echo 'Caught exception: ' . $e->getMessage() . PHP_EOL;
    }
}
echo join(', ', $result);

function sum() {
    $num1 = floatval(readline());
    $num2 = floatval(readline());
    return $num1 + $num2;
}

function multiply() {
    $num1 = floatval(readline());
    $num2 = floatval(readline());
    return $num1 * $num2;
}

/**
 * @throws Exception
 */
function divide() {
    $num1 = floatval(readline());
    $num2 = floatval(readline());

    if (!$num2) {
        throw new Exception('Division by zero.');
    }

    return $num1 / $num2;
}

function subtract() {
    $num1 = floatval(readline());
    $num2 = floatval(readline());
    return $num1 - $num2;
}

function factorial() {
    $num = intval(readline());
    $sum = 1;
    for ($i = $num; $i > 1; $i--) {
        $sum *= $i;
    }
    return $sum;
}

/**
 * @throws Exception
 */
function root() {
    $num = floatval(readline());

    if ($num < 0) {
        throw new Exception('Can\'t take the root of a negative number');
    }
    return sqrt($num);
}

function power() {
    $num1 = floatval(readline());
    $num2 = floatval(readline());

    return pow($num1, $num2);
}

function absolute() {
    $num = floatval(readline());
    return abs($num);
}

function pythagorean() {
    $num1 = floatval(readline());
    $num2 = floatval(readline());

    return sqrt(pow($num1, 2) + pow($num2, 2));
}

/**
 * @throws Exception
 */
function triangleArea() {
    $num1 = floatval(readline());
    $num2 = floatval(readline());
    $num3 = floatval(readline());

    $s = ($num1 + $num2 + $num3) / 2;
    $aSqrt = $s * ($s - $num1) * ($s - $num2) * ($s - $num3);
    if ($aSqrt < 0) {
        throw new Exception('Can\'t take the root of a negative number');
    }

    return sqrt($aSqrt);
}

/**
 * @throws Exception
 */
function quadratic() {
    $a = floatval(readline());
    $b = floatval(readline());
    $c = floatval(readline());

    if ($a === 0) {
        throw new Exception('Division by zero.');
    }

    $d = pow($b, 2) - 4 * $a * $c;
    if ($d < -1) {
        return 0;
    }

    $x1 = (-$b + sqrt($d)) / (2 * $a);
    $x2 = (-$b - sqrt($d)) / (2 * $a);
    return $x1 + $x2;

}

function sumCommand($result) {
    while(count($result) >= 2) {
        $num1 = array_shift($result);
        $num2 = array_shift($result);

        $result[] = $num1 + $num2;
    }
    return $result;
}

function multiplyCommand($result) {
    while(count($result) >= 2) {
        $num1 = array_shift($result);
        $num2 = array_shift($result);

        $result[] = $num1 * $num2;
    }
    return $result;
}

/**
 * @param $result
 * @return array
 * @throws Exception
 */
function divideCommand($result) {
    while(count($result) >= 2) {
        $num1 = array_shift($result);
        $num2 = array_shift($result);

        if (!$num2) {
            throw new Exception('Division by zero.');
        }
        $result[] = $num1 / $num2;
    }
    return $result;
}

function subtractCommand($result) {
    while(count($result) >= 2) {
        $num1 = array_shift($result);
        $num2 = array_shift($result);

        $result[] = $num1 - $num2;
    }
    return $result;
}

function factorialCommand($result) {
    for ($i = 0; $i < count($result); $i++) {
        $num = $result[$i];
        $sum = 1;
        for ($k = $num; $k > 1; $k--) {
            $sum *= $k;
        }

        $result[$i] = $num;
    }
    return $result;
}

/**
 * @param $result
 * @return mixed
 * @throws Exception
 */
function rootCommand($result) {
    for ($i = 0; $i < count($result); $i++) {
        if ($result[$i] < 0) {
            throw new Exception('Can\'t take the root of a negative number');
        }
        $result[$i] = sqrt($result[$i]);
    }
    return $result;
}

function powerCommand($result) {
    while(count($result) >= 2) {
        $num1 = array_shift($result);
        $num2 = array_shift($result);

        $result[] = pow($num1, $num2);
    }
    return $result;
}

function absoluteCommand($result) {
    for ($i = 0; $i < count($result); $i++) {
        $result[$i] = abs($result[$i]);
    }
    return $result;
}

function pythagoreanCommand($result) {
    while(count($result) >= 2) {
        $num1 = array_shift($result);
        $num2 = array_shift($result);

        $result[] = sqrt(pow($num1, 2) + pow($num2, 2));
    }
    return $result;
}

/**
 * @param $result
 * @return array
 * @throws Exception
 */
function triangleAreaCommand($result) {
    $mainArr = $result;
    while(count($mainArr) >= 3) {
        $a = array_shift($mainArr);
        $b = array_shift($mainArr);
        $c = array_shift($mainArr);

        $s = ($a + $b + $c) / 2;
        $aSqrt = $s * ($s - $a) * ($s - $b) * ($s - $c);

        if ($aSqrt < 0) {
            throw new Exception('Can\'t take the root of a negative number');
        }
        $mainArr[] = sqrt($aSqrt);
    }
    return $mainArr;
}

/**
 * @param $result
 * @return array
 * @throws Exception
 */
function quadraticCommand($result) {
    while(count($result) >= 3) {
        $a = array_shift($result);
        $b = array_shift($result);
        $c = array_shift($result);

        if ($a === 0) {
            throw new Exception('Division by zero.');
        }

        $d = pow($b, 2) - 4 * $a * $c;
        if ($d < -1) {
            $result[] = 0;
            continue;
        }

        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
        $result[] = $x1 + $x2;
    }
    return $result;
}