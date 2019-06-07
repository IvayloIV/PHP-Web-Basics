<?php

interface IRepair
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int
     */
    public function getHoursWorked(): int;
}