<?php

spl_autoload_register();

list($username, $characterType, $specialPoints, $level) = explode(' | ', readline());
$character = new $characterType($username, $level, $specialPoints);
echo $character;