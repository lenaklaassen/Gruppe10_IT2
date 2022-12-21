<?php
class Database{
    public $conn;

    public function __construct()
    {
        $conn_str = "mysql:host=localhost;dbname=m11575_21";

        $this->conn = new PDO($conn_str,'m11575-21','3QG7YYuQ5');
    }

    public function query($query) {
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}
?>