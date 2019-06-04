<?php

abstract class Mobile {
    /**
     * @var string
     */
    private $operator;

    public function __construct(string $operator)
    {
        $this->setOperator($operator);
    }

    /**
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     */
    protected function setOperator(string $operator): void
    {
        $this->operator = $operator;
    }

    public abstract function canCall(): bool;

    public abstract function battery(): float;
}