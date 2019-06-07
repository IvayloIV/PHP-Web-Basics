<?php

class Robot implements Person {
    /**
     * @var string
     */
    private $model;

    /**
     * @var string
     */
    private $id;

    /**
     * Robot constructor.
     * @param string $model
     * @param string $id
     */
    public function __construct(string $model, string $id)
    {
        $this->model = $model;
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