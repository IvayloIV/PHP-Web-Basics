<?php

abstract class Mammal extends Animal {
    /**
     * @var string
     */
    private $livingRegion;

    public function __construct(string $animalName, float $animalWeight, string $livingRegion)
    {
        parent::__construct($animalName, $animalWeight);
        $this->livingRegion = $livingRegion;
    }

    /**
     * @return string
     */
    public function getLivingRegion(): string
    {
        return $this->livingRegion;
    }

    /**
     * @param string $livingRegion
     */
    protected function setLivingRegion(string $livingRegion): void
    {
        $this->livingRegion = $livingRegion;
    }

    public function __toString()
    {
        $type = get_called_class();
        return "{$type}[{$this->getAnimalName()}, {$this->getAnimalWeight()}, {$this->getLivingRegion()}, {$this->getFoodEaten()}]";
    }
}