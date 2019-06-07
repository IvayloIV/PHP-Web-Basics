<?php

class Demon extends Character {
    /**
     * @var float
     */
    private $energy;

    public function __construct(string $username, int $level, float $energy)
    {
        parent::__construct($username, $level);
        $this->setEnergy($energy);
        $this->setHashedPassword(strlen($username) * 217);
    }

    /**
     * @return float
     */
    public function getEnergy(): float
    {
        return $this->energy;
    }

    /**
     * @param float $energy
     */
    private function setEnergy(float $energy): void
    {
        $this->energy = $energy;
    }

    public function __toString()
    {
        $result = parent::__toString() . PHP_EOL;
        $result .= number_format($this->energy * $this->getLevel(), 1, '.', '');
        return $result;
    }
}