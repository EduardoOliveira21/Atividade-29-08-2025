<?php

include_once 'class/pessoa.php';
include_once '../config/db.php';

class ModelPessoa {
    private $conn;
    private $table_name = "Pessoa";

    public function __construct() {
        $this->conn = (new Database())->getConnection();
    }

    public function create(Pessoa $pessoa) {
        $query = "INSERT INTO " . $this->table_name . " SET nome=:nome, cpf=:cpf, telefone=:telefone";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nome", $pessoa->getNome());
        $stmt->bindParam(":cpf", $pessoa->getCpf());
        $stmt->bindParam(":telefone", $pessoa->getTelefone());

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function read() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update(Pessoa $pessoa) {
        $query = "UPDATE " . $this->table_name . " SET nome=:nome, telefone=:telefone WHERE cpf=:cpf";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nome", $pessoa->getNome());
        $stmt->bindParam(":telefone", $pessoa->getTelefone());
        $stmt->bindParam(":cpf", $pessoa->getCpf());

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delete($cpf) {
        $query = "DELETE FROM " . $this->table_name . " WHERE cpf = :cpf";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":cpf", $cpf);
        
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>