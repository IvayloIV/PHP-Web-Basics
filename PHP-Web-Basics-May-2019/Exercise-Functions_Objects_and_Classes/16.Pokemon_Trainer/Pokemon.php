<?php

class Pokemon {
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $element;

    /**
     * @var float
     */
    private $health;

    /**
     * Pokemon constructor.
     * @param string $name
     * @param string $element
     * @param float $health
     */
    public function __construct(string $name, string $element, float $health)
    {
        $this->setName($name);
        $this->setElement($element);
        $this->setHealth($health);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    protected function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getElement(): string
    {
        return $this->element;
    }

    /**
     * @param string $element
     */
    protected function setElement(string $element): void
    {
        $this->element = $element;
    }

    /**
     * @return float
     */
    public function getHealth(): float
    {
        return $this->health;
    }

    /**
     * @param float $health
     */
    protected function setHealth(float $health): void
    {
        $this->health = $health;
    }

    public function reduceHealth(float $health) {
        $this->health -= $health;
    }
}