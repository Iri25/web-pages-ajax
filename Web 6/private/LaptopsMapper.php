<?php

class LaptopsMapper {
    private $serverName;
    private $userName;
    private $password;
    private $databaseName;
    private $connection;

    public function __construct() {
        $this->serverName = "localhost";
        $this->userName = "root";
        $this->password = "";
        $this->databaseName = "ajax";
    }

    private function createConnection() {
        $this->connection = new mysqli($this->serverName, $this->userName, $this->password, $this->databaseName);
    }

    private function closeConnection() {
        $this->connection->close();
    }

    public function getLaptops($where = null) {
        $this->createConnection();
        $sql = $where === null ? "SELECT name FROM Laptops" : "SELECT name FROM Laptops WHERE $where";
        $result = $this->connection->query($sql);
        $resultList = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $resultList[] = $row;
            }
        }

        $this->closeConnection();

        return $resultList;
    }

}