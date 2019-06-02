<?php

include_once './Cat.php';

class Siamese extends Cat {
    /**
     * @var int
     */
    private $earSize;

    public function __construct(string $name, int $earSize)
    {
        parent::__construct($name);
        $this->earSize = $earSize;
    }

    /**
     * @return int
     */
    public function getEarSize(): int
    {
        return $this->earSize;
    }

    /**
     * @param int $earSize
     */
    public function setEarSize(int $earSize): void
    {
        $this->earSize = $earSize;
    }

    public function __toString()
    {
        return parent::__toString() . " {$this->getEarSize()}";
    }
}