<?php

$months = ["January", "February", "March",
    "April", "May", "June",  "July", "August",
    "September", "October", "November", "December"
];

$monthNumber = intval(readline());
if ($monthNumber <= count($months)) {
    echo $months[$monthNumber - 1];
} else {
    echo 'Invalid Month!';
}