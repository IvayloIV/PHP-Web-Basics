<?php

class Trainer {
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $badges;

    /**
     * @var Pokemon[]
     */
    private $pokemons;

    /**
     * Trainer constructor.
     * @param string $name
     * @param int $badges
     * @param Pokemon[] $pokemons
     */
    public function __construct(string $name)
    {
        $this->setName($name);
        $this->badges = 0;
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

    /**
     * @return int
     */
    public function getBadges(): int
    {
        return $this->badges;
    }

    /**
     * @param int $badges
     */
    private function setBadges(int $badges): void
    {
        $this->badges = $badges;
    }

    /**
     * @return Pokemon[]
     */
    public function getPokemons(): array
    {
        return $this->pokemons;
    }

    /**
     * @param Pokemon[] $pokemons
     */
    private function setPokemons(array $pokemons): void
    {
        $this->pokemons = $pokemons;
    }

    public function addPokemon(Pokemon $pokemon) {
        $this->pokemons[] = $pokemon;
    }

    public function receiveBadge(string $element) {
        $isValid = false;
        foreach ($this->getPokemons() as $pokemon) {
            if ($pokemon->getElement() === $element) {
                $isValid = true;
                break;
            }
        }

        if ($isValid) {
            $this->badges++;
        } else {
            $newPokemons = [];
            foreach($this->getPokemons() as $pokemon) {
                if ($pokemon->getHealth() > 10) {
                    $pokemon->reduceHealth(10);
                    $newPokemons[] = $pokemon;
                }
            }

            $this->setPokemons($newPokemons);
        }
    }

    public function __toString()
    {
        $countPokemons = count($this->getPokemons());
        return "{$this->getName()} {$this->getBadges()} {$countPokemons}";
    }
}