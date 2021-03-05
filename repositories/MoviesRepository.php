<?php

class BlogRepository extends Db
{
    public function getAll() {
        $stmt = $this->conn->prepare("
            SELECT 
                * 
            FROM 
                movies
            ");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}