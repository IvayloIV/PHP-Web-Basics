<?php

class Categories {
    /**
     * @var PDO
     */
    private $db;

    /**
     * Products constructor.
     * @param PDO $db
     */
    function __construct($db) {
        $this->db = $db;
    }

    function getList() {
        $result = $this->db->query('SELECT c.id, c.name FROM categories AS c');

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            yield $row;
        }
    }
}