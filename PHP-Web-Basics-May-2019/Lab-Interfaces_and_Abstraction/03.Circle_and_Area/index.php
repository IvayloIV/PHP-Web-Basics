<?php

spl_autoload_register();

$circle = new Circle(10);
echo $circle->getSurface() . PHP_EOL;
echo $circle->getCircumference() . PHP_EOL;

$rectangle = new Rectangle(15, 35);
echo $rectangle->getSurface();