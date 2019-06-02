<?php

class Book {
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $author;

    /**
     * @var float
     */
    private $price;

    /**
     * Book constructor.
     * @param string $title
     * @param string $author
     * @param float $price
     */
    public function __construct(string $title, string $author, float $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        if (strlen($title) < 3) {
            throw new Error('Title not valid!');
        }

        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor(string $author): void
    {
        list($firstName, $lastName) = explode(' ', $author);
        if (is_numeric($lastName[0])) {
            throw new Error('Author not valid!');
        }

        $this->author = $author;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        if ($price <= 0) {
            throw new Error('Price not valid!');
        }
        $this->price = $price;
    }
}