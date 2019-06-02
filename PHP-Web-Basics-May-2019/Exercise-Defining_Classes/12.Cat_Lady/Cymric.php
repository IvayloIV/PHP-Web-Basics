<?php

include_once './Cat.php';

class Cymric extends Cat {
    /**
     * @var int
     */
    private $furLength;

    public function __construct(string $name, int $furLength)
    {
        parent::__construct($name);
        $this->furLength = $furLength;
    }

    /**
     * @return int
     */
    public function getFurLength(): int
    {
        return $this->furLength;
    }

    /**
     * @param int $furLength
     */
    public function setFurLength(int $furLength): void
    {
        $this->furLength = $furLength;
    }

    public function __toString()
    {
        return parent::__toString() . " {$this->getFurLength()}";
    }
}