<?php

include_once './Cat.php';

class StreetExtraordinaire extends Cat {
    /**
     * @var int
     */
    private $decibelsOfMeows;

    public function __construct(string $name, int $decibelsOfMeows)
    {
        parent::__construct($name);
        $this->decibelsOfMeows = $decibelsOfMeows;
    }

    /**
     * @return int
     */
    public function getDecibelsOfMeows(): int
    {
        return $this->decibelsOfMeows;
    }

    /**
     * @param int $decibelsOfMeows
     */
    public function setDecibelsOfMeows(int $decibelsOfMeows): void
    {
        $this->decibelsOfMeows = $decibelsOfMeows;
    }

    public function __toString()
    {
        return parent::__toString() . " {$this->getDecibelsOfMeows()}";
    }
}