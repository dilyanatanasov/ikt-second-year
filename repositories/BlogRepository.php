<?php

class BlogRepository extends Db
{
    public function getById($id) {
        $stmt = $this->conn->prepare("
            SELECT 
                * 
            FROM 
                credentials 
            WHERE 
                id = $id;
            ");
        $stmt->execute();
        return $stmt->fetchObject();
    }

    public function getAll() {
        $stmt = $this->conn->prepare("
            SELECT 
                * 
            FROM 
                credentials
            ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}