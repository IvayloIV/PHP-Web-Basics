<?php

class DesktopComputer extends Computer implements Keyboard, Mouse {
    /**
     * string
     */
    private $keyboardConnected;

    public function __construct(string $processor, string $ram, string $keyboardConnected)
    {
        parent::__construct($processor, $ram);
        $this->setKeyboardConnected($keyboardConnected);
    }

    /**
     * @return mixed
     */
    public function getKeyboardConnected()
    {
        return $this->keyboardConnected;
    }

    /**
     * @param mixed $keyboardConnected
     */
    private function setKeyboardConnected($keyboardConnected): void
    {
        $this->keyboardConnected = $keyboardConnected;
    }

    public function pressKey()
    {
        // TODO: Implement pressKey() method.
    }

    public function changeStatus()
    {
        // TODO: Implement changeStatus() method.
    }

    public function click()
    {
        // TODO: Implement click() method.
    }

    public function move()
    {
        // TODO: Implement move() method.
    }
}