<?php

$month = date('m', strtotime(readline()));
$totalDays = cal_days_in_month(CAL_GREGORIAN, $month, 2019);

for ($i = 1; $i <= $totalDays; $i++) {
    if (date('N', strtotime(2018 . '-' . $month . '-' . $i)) == 7) {
        echo $i . "rd " . $month . ", " . "2018\n";
    }
}