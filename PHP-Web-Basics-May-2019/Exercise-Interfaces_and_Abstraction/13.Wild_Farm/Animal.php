<?php

abstract class Animal {
    /**
     * @var string
     */
    private $animalName;

    /**
     * @var float
     */
    private $animalWeight;

    /**
     * @var int
     */
    private $foodEaten;

    /**
     * Animal constructor.
     * @param string $animalName
     * @param float $animalWeight
     */
    public function __construct(string $animalName, float $animalWeight)
    {
        $this->animalName = $animalName;
        $this->animalWeight = $animalWeight;
        $this->foodEaten = 0;
    }

    /**
     * @return string
     */
    public function getAnimalName(): string
    {
        return $this->animalName;
    }

    /**
     * @param string $animalName
     */
    private function setAnimalName(string $animalName): void
    {
        $this->animalName = $animalName;
    }

    /**
     * @return float
     */
    public function getAnimalWeight(): float
    {
        return $this->animalWeight;
    }

    /**
     * @param float $animalWeight
     */
    private function setAnimalWeight(float $animalWeight): void
    {
        $this->animalWeight = $animalWeight;
    }

    /**
     * @return int
     */
    public function getFoodEaten(): int
    {
        return $this->foodEaten;
    }

    /**
     * @param int $foodEaten
     */
    private function setFoodEaten(int $foodEaten): void
    {
        $this->foodEaten = $foodEaten;
    }

    public abstract function makeSound();

    public function eat(Food $foot) {
        $this->foodEaten += $foot->getQuantity();
    }
}