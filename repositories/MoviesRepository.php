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
                title LIKE CONCAT('%', :topic , '%') OR
                description LIKE CONCAT('%', :topic , '%') OR
                main_actor LIKE CONCAT('%', :topic , '%')
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":topic", $topic, PDO::PARAM_STR);
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

    public function getAllCommentsForMovie($movie_id) {
        $sql = "
            SELECT UC.username, C.comment, C.created_at FROM movies M
            INNER JOIN comments C ON C.movie_id = M.id
            INNER JOIN user_credentials UC ON UC.id = C.user_id
            WHERE M.id = :id 
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $movie_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update($data) {
        $sql = "
            UPDATE
                movies
            SET
                title = :title,
                description = :description,
                main_actor = :main_actor,
                duration = :duration,
                rating = :rating,
                thumbnail = :thumbnail
            WHERE
                id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $data["id"], PDO::PARAM_INT);
        $stmt->bindValue(":title", $data["title"], PDO::PARAM_STR);
        $stmt->bindValue(":description", $data["description"], PDO::PARAM_STR);
        $stmt->bindValue(":main_actor", $data["main_actor"], PDO::PARAM_STR);
        $stmt->bindValue(":duration", $data["duration"], PDO::PARAM_INT);
        $stmt->bindValue(":rating", $data["rating"], PDO::PARAM_INT);
        $stmt->bindValue(":thumbnail", $data["thumbnail"], PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function delete($id) {
        $sql = "
            DELETE FROM movies WHERE id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function addComment($movie_id, $user_id, $comment)
    {
        $sql = "
            INSERT INTO comments(id, movie_id, user_id, comment)
            VALUES(NULL, :movie_id, :user_id, :comment)
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":movie_id", $movie_id, PDO::PARAM_INT);
        $stmt->bindValue(":user_id", $user_id, PDO::PARAM_INT);
        $stmt->bindValue(":comment", $comment, PDO::PARAM_STR);
        return $stmt->execute();
    }
}