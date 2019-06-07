<?php

class AddCollection implements Add {
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
        $index = count($this->collection);
        $this->collection[] = $item;
        return $index;
    }
}