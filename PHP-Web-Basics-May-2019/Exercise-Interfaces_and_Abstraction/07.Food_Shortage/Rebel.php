<?php

class Rebel implements Buyer {
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

    /**
     * @var string
     */
    private $group;

    /**
     * @var int
     */
    private $food;

    /**
     * Rebel constructor.
     * @param string $name
     * @param int $age
     * @param string $group
     */
    public function __construct(string $name, int $age, string $group)
    {
        $this->name = $name;
        $this->age = $age;
        $this->group = $group;
        $this->food = 0;
    }

    public function buyFood()
    {
        $this->food += 5;
    }

    public function getFoodCount()
    {
        return $this->food;
    }
}