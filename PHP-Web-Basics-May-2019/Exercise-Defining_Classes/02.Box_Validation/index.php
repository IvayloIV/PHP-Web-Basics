<?php

include "./Box.php";

$length = floatval(readline());
$wight = floatval(readline());
$height = floatval(readline());

try {
    $box = new Box($length, $wight, $height);
    echo $box;
} catch (Error $e) {
    echo $e->getMessage();
}