<?php

class AddRemoveCollection implements Add, Remove {
    /**
     * @var string[]
     */
    private $collection;

    public function __construct()
    {
        $this->collection = [];
    }

    public function addItem(string $item)
    {
        array_unshift($this->collection, $item);
        return 0;
    }

    public function removeItem()
    {
        return array_pop($this->collection);
    }
}