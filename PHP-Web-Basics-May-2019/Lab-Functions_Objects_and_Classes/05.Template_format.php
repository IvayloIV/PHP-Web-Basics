<?php

function addQuestionFormat($str, $quest, $answer) {
    $str .= '  <question>' . PHP_EOL . "    {$quest}" . PHP_EOL;
    $str .= '  </question>' . PHP_EOL . '  <answer>' . PHP_EOL;
    $str .= "    {$answer}" . PHP_EOL . '  </answer>' . PHP_EOL;

    return $str;
}

$tokens = explode(', ', readline());
$output = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$output .= '<quiz>' . PHP_EOL;

for ($i = 0; $i < count($tokens); $i += 2) {
    $quest = $tokens[$i];
    $answer = $tokens[$i + 1];
    $output = addQuestionFormat($output, $quest, $answer);
}

$output .= '</quiz>';
echo $output;