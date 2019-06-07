<?php

class Citizen implements Person {
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
     * Citizen constructor.
     * @param string $name
     * @param int $age
     * @param string $id
     */
    public function __construct(string $name, int $age, string $id)
    {
        $this->name = $name;
        $this->age = $age;
        $this->id = $id;
    }

    public function haveSpecialId(string $id)
    {
        return preg_match("/{$id}$/", $this->id);
    }

    public function getId()
    {
        return $this->id;
    }
}