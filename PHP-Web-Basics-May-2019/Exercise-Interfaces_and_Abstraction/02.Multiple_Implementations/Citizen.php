<?php

class Citizen implements Person, Identifiable, Birthable {
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
    private $birthDate;

    /**
     * Citizen constructor.
     * @param string $name
     * @param int $age
     * @param string $id
     * @param string $birthDate
     */
    public function __construct(string $name, int $age, string $id, string $birthDate)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setIdBirtdate($id, $birthDate);
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }

    public function setBirthdate(string $birthDate)
    {
        $this->birthDate = $birthDate;
    }

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function setIdBirtdate(string $id, string $birthDate) {
        $this->setId($id);
        $this->setBirthdate($birthDate);
    }

    public function __toString()
    {
        return "{$this->name}\n{$this->age}\n{$this->id}\n{$this->birthDate}";
    }
}