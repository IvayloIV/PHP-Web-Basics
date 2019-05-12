<?php

$language = readline();

switch ($language) {
    case 'England':
    case 'USA':
        echo 'English';
        break;
    case 'Spain':
    case 'Argentina':
    case 'Mexico':
        echo 'Spanish';
        break;
    default:
        echo 'unknown';
        break;
}