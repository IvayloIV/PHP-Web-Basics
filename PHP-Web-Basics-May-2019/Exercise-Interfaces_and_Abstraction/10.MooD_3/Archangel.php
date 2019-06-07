<?php

class Archangel extends Character {
    /**
     * @var int
     */
    private $mana;

    public function __construct(string $username, int $level, int $mana)
    {
        parent::__construct($username, $level);
        $this->setMana($mana);
        $this->setHashedPassword(strrev($username) . (strlen($username) * 21));
    }

    /**
     * @return int
     */
    public function getMana(): int
    {
        return $this->mana;
    }

    /**
     * @param int $mana
     */
    private function setMana(int $mana): void
    {
        $this->mana = $mana;
    }

    public function __toString()
    {
        $result = parent::__toString() . PHP_EOL;
        $result .= $this->mana * $this->getLevel();
        return $result;
    }
}