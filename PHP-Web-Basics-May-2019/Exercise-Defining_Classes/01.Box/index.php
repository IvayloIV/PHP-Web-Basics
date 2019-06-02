<?php

include "./Box.php";

$length = floatval(readline());
$wight = floatval(readline());
$height = floatval(readline());

$box = new Box($length, $wight, $height);
echo $box;