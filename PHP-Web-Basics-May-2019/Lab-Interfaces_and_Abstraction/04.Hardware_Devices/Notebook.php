<?php

class Notebook extends Mobile implements TouchScreen, Keyboard, Mouse {
    /**
     * @var string
     */
    private $writtenText;

    public function __construct(string $operator)
    {
        parent::__construct($operator);
        $this->writtenText = '';
    }

    /**
     * @return string
     */
    public function getWrittenText(): string
    {
        return $this->writtenText;
    }

    /**
     * @param string $writtenText
     */
    private function setWrittenText(string $writtenText): void
    {
        $this->writtenText = $writtenText;
    }

    public function pressKey()
    {
        // TODO: Implement pressKey() method.
    }

    public function changeStatus()
    {
        // TODO: Implement changeStatus() method.
    }

    public function canCall(): bool
    {
        // TODO: Implement canCall() method.
    }

    public function battery(): float
    {
        // TODO: Implement battery() method.
    }

    public function click()
    {
        // TODO: Implement click() method.
    }

    public function move()
    {
        // TODO: Implement move() method.
    }

    public function moveFinger()
    {
        // TODO: Implement moveFinger() method.
    }

    public function clickFinger()
    {
        // TODO: Implement clickFinger() method.
    }

    public function writeText()
    {
        // TODO: Implement writeText() method.
    }
}