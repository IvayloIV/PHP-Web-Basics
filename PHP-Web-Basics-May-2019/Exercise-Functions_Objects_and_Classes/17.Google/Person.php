<?php

class Person {
    /**
     * @var string
     */
    private $name;

    /**
     * @var Company
     */
    private $company;

    /**
     * @var Car
     */
    private $car;

    /**
     * @var Parents[]
     */
    private $parents;

    /**
     * @var Child[]
     */
    private $children;

    /**
     * @var Pokemon[]
     */
    private $pokemons;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->parents = [];
        $this->children = [];
        $this->pokemons = [];
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
    private function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setCompany(Company $company) {
        $this->company = $company;
    }

    public function setCar(Car $car) {
        $this->car = $car;
    }

    public function addPokemon(Pokemon $pokemon) {
        $this->pokemons[] = $pokemon;
    }

    public function addParent(Parents $parent) {
        $this->parents[] = $parent;
    }

    public function addChild(Child $child) {
        $this->children[] = $child;
    }

    public function __toString()
    {
        $result = $this->getName() . PHP_EOL;
        $result .= "Company:" . PHP_EOL;
        if ($this->company) {
            $result .= $this->company . PHP_EOL;
        }
        $result .= "Car:" . PHP_EOL;
        if ($this->car) {
            $result .= $this->car . PHP_EOL;
        }
        $result .= "Pokemon:" . PHP_EOL;

        foreach ($this->pokemons as $pokemon) {
            $result .= $pokemon . PHP_EOL;
        }

        $result .= "Parents:" . PHP_EOL;
        foreach ($this->parents as $parent) {
            $result .= $parent . PHP_EOL;
        }

        $result .= "Children:" . PHP_EOL;
        foreach ($this->children as $child) {
            $result .= $child . PHP_EOL;
        }

        return $result;
    }
}