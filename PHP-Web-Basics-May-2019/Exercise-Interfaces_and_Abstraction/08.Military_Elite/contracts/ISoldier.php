<?php

interface ISoldier
{
    /**
     * @return string
     */
    public function getId(): string;

    /**
     * @return string
     */
    public function getFirstName(): string;

    /**
     * @return string
     */
    public function getLastName(): string;
}