<?php

class Products {
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

    function getCount() {
        $result = $this->db->query('SELECT COUNT(*) as `product_count` FROM products');
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    function getList($skippedItems, $itemsCount) {
        $result = $this->db->query("SELECT p.id, p.name, p.price, c.name AS category_name FROM products AS p
                                    INNER JOIN categories AS c ON p.category_id = c.id
                                    LIMIT {$skippedItems}, {$itemsCount}");

        while($row = $result->fetch(PDO::FETCH_ASSOC)) {
            yield $row;
        }
    }

    function getOne($id) {
        $stm = $this->db->prepare('SELECT p.id, p.name, p.description, p.price, c.name AS category_name FROM products AS p
                                    INNER JOIN categories AS c ON p.category_id = c.id
                                    WHERE p.id = :product_id');
        $stm->bindParam('product_id', $id);
        $stm->execute();

        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    function createProduct($name, $description, $price, $category_id) {
        $stm = $this->db->prepare('INSERT INTO products(`name`, `description`, `price`, `category_id`)
                                            VALUES(:name, :description, :price, :category_id)');

        $stm->bindParam('name', $name);
        $stm->bindParam('description', $description);
        $stm->bindParam('price', $price);
        $stm->bindParam('category_id', $category_id);

        $stm->execute();
        return $this->db->lastInsertId();
    }

    function editProduct($id, $name, $description, $price, $category_id) {
        $this->db->beginTransaction();
        $stm = $this->db->prepare('UPDATE `products` SET `name`=:name, `description`=:description, `price`=:price, category_id=:category_id
                                            WHERE `id`=:id');

        $stm->bindParam('id', $id);
        $stm->bindParam('name', $name);
        $stm->bindParam('description', $description);
        $stm->bindParam('price', $price);
        $stm->bindParam('category_id', $category_id);

        $stm->execute();
        $this->db->commit();
        return $id;
    }

    function removeProduct($id) {
        $stm = $this->db->prepare('DELETE FROM `products` WHERE `id`=:id');
        $stm->bindParam('id', $id);
        $stm->execute();
    }
}