<?php

include './Book.php';

class GoldenEditionBook extends Book {
    public function __construct(string $title, string $author, float $price)
    {
        parent::__construct($title, $author, $price);
    }

    public function setPrice(float $price): void {
        $price *= 1.3;
        parent::setPrice($price);
    }
}