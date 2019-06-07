<?php

include_once './contracts/ISoldier.php';

abstract class Soldier implements ISoldier
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * Soldier constructor.
     * @param string $id
     * @param string $firstName
     * @param string $lastName
     */
    public function __construct(string $id, string $firstName, string $lastName)
    {
        $this->setId($id);
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    protected function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    protected function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    protected function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function __toString()
    {
        return "Name: {$this->getFirstName()} {$this->getLastName()} Id: {$this->getId()}";
    }
}