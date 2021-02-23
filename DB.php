<?php






























class DB
{
    // connection
    public $conn;

    private $servername = "localhost";
    private $db_name = "user_credentials";
    private $db_username = "root";
    private $db_password = "";

    function __construct()
    {
        try {
            $this->conn = new PDO(
                "mysql:host=$this->servername;dbname=$this->db_name",
                $this->db_username,
                $this->db_password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connection created";
        } catch (PDOException $e) {
            echo "Connection failed" . $e->getMessage();
        }
    }
}

class MovieModel extends DB {
    public function viewItem()
    {
        return "test";
    }

    public function listItems()
    {
        return "test";
    }

    public function updateItem()
    {
        return "test";
    }

    public function deleteItem()
    {
        return "test";
    }

    public function modifyItem() {
        return "test2";
    }
}

$db = new DB();
$stmt = $db->conn->query("SELECT * FROM credentials");
$result = $stmt->fetchAll();
echo "<pre>";
print_r($result);
echo "</pre>";