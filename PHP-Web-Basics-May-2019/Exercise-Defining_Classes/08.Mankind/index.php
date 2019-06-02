<?php

include_once('./Student.php');
include_once('./Worker.php');

try {
    list($firstName, $lastName, $facultyNumber) = explode(' ', readline());
    list($fistNameW, $lastNameW, $weekSalaryStr, $workHoursPerDayStr) = explode(' ', readline());

    $student = new Student($firstName, $lastName, $facultyNumber);
    $worker = new Worker($fistNameW, $lastNameW, floatval($weekSalaryStr), floatval($workHoursPerDayStr));
    echo $student . PHP_EOL;
    echo $worker;
} catch (Error $e) {
    echo $e->getMessage();
}