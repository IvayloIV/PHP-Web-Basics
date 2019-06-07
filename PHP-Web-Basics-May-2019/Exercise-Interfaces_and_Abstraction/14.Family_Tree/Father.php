<?php

class Father {
    /**
     * @var string
     */
    private $yearBirth;

    /**
     * @var string
     */
    private $yearDead;

    /**
     * @var string
     */
    private $name;

    /**
     * Father constructor.
     * @param string $yearBirth
     * @param string $yearDead
     * @param string $name
     */
    public function __construct(string $yearBirth, string $yearDead, string $name)
    {
        $this->yearBirth = $yearBirth;
        $this->yearDead = $yearDead;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getYearBirth(): string
    {
        return $this->yearBirth;
    }

    /**
     * @param string $yearBirth
     */
    protected function setYearBirth(string $yearBirth): void
    {
        $this->yearBirth = $yearBirth;
    }

    /**
     * @return string
     */
    public function getYearDead(): string
    {
        return $this->yearDead;
    }

    /**
     * @param string $yearDead
     */
    protected function setYearDead(string $yearDead): void
    {
        $this->yearDead = $yearDead;
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
     * @throws Exception
     */
    protected function setName(string $name): void
    {
        if (strlen($name) < 3) {
            throw new Exception('The name should be a string at least 3 characters long');
        }
        $this->name = $name;
    }
}