<?php

class Dough {
    const flourType = [
      'white' => 1.5,
      'wholegrain' => 1
    ];

    const bakingTechniques = [
        'crispy' => 0.9,
        'chewy' => 1.1,
        'homemade' => 1
    ];

    const caloriesPerGram = 2;

    /**
     * @var string
     */
    private $flourType;

    /**
     * @var string
     */
    private $bakingTechnique;

    /**
     * @var float
     */
    private $weight;

    public function __construct(string $flourType, string $bakingTechnique, float $weight)
    {
        $this->setFlourType($flourType);
        $this->setBakingTechnique($bakingTechnique);
        $this->setWeight($weight);
    }

    /**
     * @return string
     */
    public function getFlourType(): string
    {
        return $this->flourType;
    }

    /**
     * @param string $flourType
     */
    public function setFlourType(string $flourType): void
    {
        if (!key_exists(strtolower($flourType), self::flourType)) {
            throw new Exception('Invalid type of dough.');
        }
        $this->flourType = $flourType;
    }

    /**
     * @return string
     */
    public function getBakingTechnique(): string
    {
        return $this->bakingTechnique;
    }

    /**
     * @param string $bakingTechnique
     */
    public function setBakingTechnique(string $bakingTechnique): void
    {
        if (!key_exists(strtolower($bakingTechnique), self::bakingTechniques)) {
            throw new Exception('Invalid type of dough.');
        }
        $this->bakingTechnique = $bakingTechnique;
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
    public function setWeight(float $weight): void
    {
        if ($weight < 1 || $weight > 200) {
            throw new Exception('Dough weight should be in the range [1..200].');
        }
        $this->weight = $weight;
    }

    public function calculateCalories() {
        $flourPrice = self::flourType[strtolower($this->getFlourType())];
        $bakingTechniquePrice = self::bakingTechniques[strtolower($this->getBakingTechnique())];
        return self::caloriesPerGram * $this->getWeight() *$flourPrice * $bakingTechniquePrice;
    }
}