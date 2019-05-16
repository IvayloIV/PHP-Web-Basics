<?php

$users = [];

$line = '';
while(($line = readline()) !== 'login') {
    $tokens = explode(' -> ', $line);
    $username = $tokens[0];
    $password = $tokens[1];

    $users[$username] = $password;
}


$count = 0;
while(($line = readline()) !== 'end') {
    $tokens = explode(' -> ', $line);
    $username = $tokens[0];
    $password = $tokens[1];

    if (key_exists($username, $users) && $users[$username] === $password) {
        echo "{$username}: logged in successfully\n";

    } else {
        echo "{$username}: login failed\n";
        $count++;
    }
}

echo "unsuccessful login attempts: {$count}";