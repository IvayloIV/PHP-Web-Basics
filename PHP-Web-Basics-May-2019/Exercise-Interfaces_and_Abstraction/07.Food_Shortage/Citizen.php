<?php

class Citizen implements Person, Birthday, Buyer {
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
    private $id;

    /**
     * @var string
     */
    private $birthday;

    /**
     * @var int
     */
    private $food;

    /**
     * Citizen constructor.
     * @param string $name
     * @param int $age
     * @param string $id
     * @param string $birthday
     */
    public function __construct(string $name, int $age, string $id, string $birthday)
    {
        $this->name = $name;
        $this->age = $age;
        $this->id = $id;
        $this->birthday =$birthday;
        $this->food = 0;
    }

    public function haveSpecialId(string $id)
    {
        return preg_match("/{$id}$/", $this->id);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function getByYear(string $date)
    {
        list($day, $month, $year) = explode('/', $this->birthday);
        return $year === $date;
    }

    public function buyFood()
    {
        $this->food += 10;
    }

    public function getFoodCount()
    {
        return $this->food;
    }
}