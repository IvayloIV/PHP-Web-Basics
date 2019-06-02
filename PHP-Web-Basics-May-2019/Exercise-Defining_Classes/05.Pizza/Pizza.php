<?php

include_once './Dough.php';
include_once './Topping.php';

class Pizza {
    /**
     * @var string
     */
    private $name;

    /**
     * @var Dough
     */
    private $dough;

    /**
     * @var Topping[]
     */
    private $toppings;

    public function __construct(string $name, int $toppingCount)
    {
        $this->checkToppingCount($toppingCount);
        $this->setName($name);
        $this->toppings = [];
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
    public function setName(string $name): void
    {
        if (strlen($name) === 0 || strlen($name) > 15) {
            throw new Exception('Pizza name should be between 1 and 15 symbols.');
        }
        $this->name = $name;
    }

    /**
     * @return Dough
     */
    public function getDough(): Dough
    {
        return $this->dough;
    }

    /**
     * @param Dough $dough
     */
    public function setDough(Dough $dough): void
    {
        $this->dough = $dough;
    }

    /**
     * @return Topping[]
     */
    public function getToppings(): array
    {
        return $this->toppings;
    }

    public function addTopping(Topping $topping) {
        $this->toppings[] = $topping;
    }

    private function checkToppingCount(int $toppingCount) {
        if ($toppingCount >= 10) {
            throw new Exception('Number of toppings should be in range [0..10].');
        }
    }

    public function getCalories() {
        $toppingCalories = 0;
        foreach ($this->getToppings() as $topping) {
            $toppingCalories += $topping->getCaloriesPerGram();
        }

        return $toppingCalories + $this->dough->calculateCalories();
    }

    public function __toString()
    {
        $formatCalories = number_format($this->getCalories(), 2, '.', '');
        return "{$this->getName()} - {$formatCalories} Calories.";
    }
}