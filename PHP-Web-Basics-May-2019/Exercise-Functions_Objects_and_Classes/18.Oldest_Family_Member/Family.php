<?php

class Family {
    /**
     * @var Person[]
     */
    private $people;

    public function __construct()
    {
        $this->people = [];
    }

    public function addMember(Person $person) {
        $this->people[] = $person;
    }

    public function getOldestMember() {
        $oldest = null;

        foreach ($this->people as $person) {
            if ($oldest === null || $oldest->getAge() < $person->getAge()) {
                $oldest = $person;
            }
        }

        return $oldest;
    }
}