<?php

class Db
{
    public $conn;

    function __construct()
    {
        try {
            $this->conn = new PDO(
                "mysql:host=" . DB_HOST. ";dbname=" . DB_DATABASE,
                DB_USER,
                DB_PASS
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed" . $e->getMessage();
        }
    }
}