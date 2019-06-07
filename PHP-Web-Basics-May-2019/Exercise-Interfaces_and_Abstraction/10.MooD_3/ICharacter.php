<?php

interface ICharacter
{
    /**
     * @return string
     */
    public function getUsername(): string;

    /**
     * @return string
     */
    public function getHashedPassword(): string;

    /**
     * @return int
     */
    public function getLevel(): int;
}