<?php

class Database {
    private $host = 'localhost';
    private $db_name = 'pessoa';
    private $username = 'root';
    private $password = 'root';
    private $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Erro ao conectar ao banco de dados: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>