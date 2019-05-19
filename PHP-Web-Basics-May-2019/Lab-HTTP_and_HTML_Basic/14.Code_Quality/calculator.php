<?php
if (isset($_GET['calculate'])) {
    $operator = $_GET['operator'];
    $firstNum = intval($_GET['number_one']);
    $secondNum = intval($_GET['number_two']);
    $output = '';

    if ($operator === 'sum') {
        $output = $firstNum + $secondNum;
    } else if ($operator === 'subtract') {
        $output = $firstNum - $secondNum;
    } else {
        $output = 'Invalid operator supplied';
    }
}

include './calculator_frontend.php';
