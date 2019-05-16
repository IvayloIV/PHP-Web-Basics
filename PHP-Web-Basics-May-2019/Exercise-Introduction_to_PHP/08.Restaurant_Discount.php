<?php

$groupSize = (int)readline();
$typePackage = readline();

if ($groupSize > 120) {
    echo 'We do not have an appropriate hall.';
    return;
}

$price = 0;
$typeRoom = '';
if ($groupSize <= 50) {
    $price = 2500;
    $typeRoom = 'Small Hall';
} else if ($groupSize <= 100) {
    $price = 5000;
    $typeRoom = 'Terrace';
} else {
    $price = 7500;
    $typeRoom = 'Great Hall';
}

$discount = 0;
switch ($typePackage) {
    case 'Normal':
        $price += 500;
        $discount = 0.05;
        break;
    case 'Gold':
        $price += 750;
        $discount = 0.1;
        break;
    case 'Platinum':
        $price += 1000;
        $discount = 0.15;
        break;
}

$price -= ($price * $discount);

$pricePerPerson = number_format($price / $groupSize, 2, '.', '');
echo "We can offer you the {$typeRoom}\n";
echo "The price per person is {$pricePerPerson}$";