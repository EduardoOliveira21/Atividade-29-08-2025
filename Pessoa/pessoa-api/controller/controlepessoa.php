<?php

include_once '../model/modelPessoa.php';
include_once '../class/pessoa.php';
include_once 'controlePessoa.php';

class ControlePessoa {
    private $model;

    public function __construct() {
        $this->model = new ModelPessoa();
    }

    public function criarPessoa($nome, $cpf, $telefone) {
        // Validação simples
        if (empty($nome) || empty($cpf) || empty($telefone)) {
            return "Todos os campos são obrigatórios!";
        }

        $pessoa = new Pessoa();
        $pessoa->setNome($nome);
        $pessoa->setCpf($cpf);
        $pessoa->setTelefone($telefone);

        if ($this->model->create($pessoa)) {
            return "Pessoa cadastrada com sucesso!";
        } else {
            return "Erro ao cadastrar pessoa!";
        }
    }

    public function listarPessoas() {
        return $this->model->read();
    }

    public function atualizarPessoa($nome, $cpf, $telefone) {
        // Validar e atualizar pessoa
        $pessoa = new Pessoa();
        $pessoa->setNome($nome);
        $pessoa->setCpf($cpf);
        $pessoa->setTelefone($telefone);

        if ($this->model->update($pessoa)) {
            return "Pessoa atualizada com sucesso!";
        } else {
            return "Erro ao atualizar pessoa!";
        }
    }

    public function excluirPessoa($cpf) {
        if ($this->model->delete($cpf)) {
            return "Pessoa excluída com sucesso!";
        } else {
            return "Erro ao excluir pessoa!";
        }
    }
}
?>
