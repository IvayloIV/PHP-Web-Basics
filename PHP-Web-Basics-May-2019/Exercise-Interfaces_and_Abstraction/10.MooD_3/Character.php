<?php

abstract class Character implements ICharacter
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $hashedPassword;

    /**
     * @var int
     */
    private $level;

    public function __construct(string $username, int $level)
    {
        $this->setUsername($username);
        $this->setLevel($level);
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    protected function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getHashedPassword(): string
    {
        return $this->hashedPassword;
    }

    /**
     * @param string $hashedPassword
     */
    protected function setHashedPassword(string $hashedPassword): void
    {
        $this->hashedPassword = $hashedPassword;
    }

    /**
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    protected function setLevel(int $level): void
    {
        $this->level = $level;
    }

    public function __toString()
    {
        $type = get_called_class();
        return "\"{$this->getUsername()}\" | \"{$this->getHashedPassword()}\" -> {$type}";
    }
}