<?php

interface IEngineer
{
    /**
     * @return Repair[]
     */
    public function getRepairs(): array;

    public function addRepair(Repair $repair);
}