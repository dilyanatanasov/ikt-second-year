<?php


class MoviesRepository extends Db
{
    public function create($data) {
        $sql = "
            INSERT INTO movies(id, title, description, main_actor, duration, rating, thumbnail)
            VALUES(NULL, :title, :description, :main_actor, :duration, :rating, :thumbnail)
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":title", $data["title"], PDO::PARAM_STR);
        $stmt->bindValue(":description", $data["description"], PDO::PARAM_STR);
        $stmt->bindValue(":main_actor", $data["main_actor"], PDO::PARAM_STR);
        $stmt->bindValue(":duration", $data["duration"], PDO::PARAM_INT);
        $stmt->bindValue(":rating", $data["rating"], PDO::PARAM_INT);
        $stmt->bindValue(":thumbnail", $data["thumbnail"], PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function getAll() {
        $sql = "
            SELECT * FROM movies
        ";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAllByTopic($topic) {
        $sql = "
            SELECT
                *
            FROM
                movies
            WHERE
                LOWER(title) LIKE CONCAT('%', :topic , '%') OR
                LOWER(description) LIKE CONCAT('%', :topic , '%') OR
                LOWER(main_actor) LIKE CONCAT('%', :topic , '%')
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":topic", strtolower($topic), PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getById($id) {
        $sql = "
            SELECT * FROM movies WHERE id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function delete($id) {
        $sql = "
            DELETE FROM movies WHERE id = :id        
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
}