<?php

class DBConnection {
    static function getConnection() {
        return new PDO('mysql:host=localhost;dbname=shop', 'root', '',
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
}