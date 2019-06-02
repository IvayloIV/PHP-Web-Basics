<?php

include './FoodFactory.php';
include './MoodFactory.php';

$happiness = 0;
$foodFactory = new FoodFactory();
$food = $foodFactory->makeFood();

$foods = explode(',', readline());
for ($i = 0; $i < count($foods); $i++) {
    $foodName = strtolower($foods[$i]);
    $happiness += $food->getHappiness($foodName);
}

$moodFactory = new MoodFactory();
$mood = $moodFactory->createMood();

echo $happiness . PHP_EOL;
echo $mood->getMood($happiness);