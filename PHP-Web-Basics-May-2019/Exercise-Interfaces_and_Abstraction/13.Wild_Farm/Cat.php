<?php

class Cat extends Felime {
    /**
     * @var string
     */
    private $breed;

    public function __construct(string $animalName, float $animalWeight, string $livingRegion, string $breed)
    {
        parent::__construct($animalName, $animalWeight, $livingRegion);
        $this->breed = $breed;
    }

    /**
     * @return string
     */
    public function getBreed(): string
    {
        return $this->breed;
    }

    /**
     * @param string $breed
     */
    private function setBreed(string $breed): void
    {
        $this->breed = $breed;
    }

    public function makeSound()
    {
        return 'Meowwww';
    }

    public function __toString()
    {
        return "Cat[{$this->getAnimalName()}, {$this->getBreed()}, {$this->getAnimalWeight()}, {$this->getLivingRegion()}, {$this->getFoodEaten()}]";
    }
}