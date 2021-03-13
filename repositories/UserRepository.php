<?php


class UserRepository extends Db
{
    public function create($data) {
        $sql = "
            INSERT INTO user_credentials(id, username, first_name, last_name, password)
            VALUES(NULL, :username, :first_name, :last_name, :password)
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":username", $data["username"], PDO::PARAM_STR);
        $stmt->bindValue(":first_name", $data["first_name"], PDO::PARAM_STR);
        $stmt->bindValue(":last_name", $data["last_name"], PDO::PARAM_STR);
        $stmt->bindValue(":password", $data["password"], PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function getByUsernameAndPassword($username, $password) {
        $sql = "
            SELECT * FROM user_credentials
            WHERE username = :username AND password = :password
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":username", $username, PDO::PARAM_STR);
        $stmt->bindValue(":password", $password, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}