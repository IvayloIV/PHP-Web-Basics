<?php

spl_autoload_register();

$date1 = readline();
$date2 = readline();
echo DateModifier::getDifference($date1, $date2);