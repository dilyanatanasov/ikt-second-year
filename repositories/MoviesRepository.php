<?php


class MoviesRepository extends Db
{
    public function getAll() {
        $sql = "
            SELECT * FROM movies
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}