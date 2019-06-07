<?php

class Pet implements Birthday {
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $birthday;

    /**
     * Pet constructor.
     * @param string $name
     * @param string $birthday
     */
    public function __construct(string $name, string $birthday)
    {
        $this->name = $name;
        $this->birthday = $birthday;
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
}