<?php

$teams = [];

$line = '';
while(($line = readline()) !== 'Result') {
    $tokens = explode('|', $line);
    $team = '';
    $player = '';
    $points = intval($tokens[2]);

    if (strtoupper($tokens[0]) === $tokens[0]) {
        $team = $tokens[0];
        $player = $tokens[1];
    } else {
        $team = $tokens[1];
        $player = $tokens[0];
    }

    $team = clearString($team);
    $player = clearString($player);

    if (!key_exists($team, $teams)) {
        $teams[$team] = [];
    }

    $teams[$team][$player] = $points;
}

uksort($teams, function ($a, $b) use($teams) {
    $aPoints = getTotalPoints($teams[$a]);
    $bPoints = getTotalPoints($teams[$b]);
    return $bPoints <=> $aPoints;
});

foreach ($teams as $team => $players) {
    $points = getTotalPoints($players);
    echo "{$team} => {$points}\n";
    uksort($players, function ($a, $b) use($players) {
       return $players[$b] - $players[$a];
    });

    foreach ($players as $player => $points) {
        echo "Most points scored by {$player}\n";
        break;
    }
}

function clearString($str) {
    $el = '';
    $forbiddenChars = ['@','%', '&', '$', '*'];
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (!in_array($char, $forbiddenChars)) {
            $el .= $char;
        }
    }

    return $el;
}

function getTotalPoints($players) {
    $sum = 0;
    foreach ($players as $player => $points) {
        $sum += $points;
    }

    return $sum;
}