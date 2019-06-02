<?php

class Topping {
    const types = [
        'meat' => 1.2,
        'veggies' => 0.8,
        'cheese' => 1.1,
        'sauce' => 0.9
    ];

    const caloriesPerGram = 2;

    /**
     * @var string
     */
    private $type;

    /**
     * @var float
     */
    private $weight;

    public function __construct(string $type, float $weight)
    {
        $this->setType($type);
        $this->setWeight($weight);
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    private function setType(string $type): void
    {
        if (!key_exists(strtolower($type), self::types)) {
            throw new Exception("Cannot place {$type} on top of your pizza.");
        }
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    private function setWeight(float $weight): void
    {
        if ($weight < 1 || $weight > 50) {
            throw new Exception("{$this->getType()} weight should be in the range [1..50].");
        }
        $this->weight = $weight;
    }

    function getCaloriesPerGram() {
        return self::caloriesPerGram * $this->getWeight() * self::types[strtolower($this->getType())];
    }
}