<?php

function isUniqueNum($num) {
    $numStr = strval($num);
    return $numStr[0] !== $numStr[1] && $numStr[1] !== $numStr[2] && $numStr[0] !== $numStr[2];
}

$num = (int)readline();
$result = [];

if ($num > 999) {
    $num = 999;
}

for ($i = 100; $i <= $num; $i++) {
    if (isUniqueNum($i)) {
        array_push($result, $i);
    }
}

if (count($result) === 0) {
    echo 'no';
} else {
    echo join(', ', $result);
}