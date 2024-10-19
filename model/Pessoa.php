<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/db_barbearia_barbeleon/controller/Conexao.php';

// Definindo a classe Pessoa como abstrata
abstract class Pessoa {
    // Atributos da classe Pessoa
    protected $cod;
    protected $nome;
    protected $cpf;
    protected $email;
    protected $telefone;
    protected $conexao;

    // Getters e Setters

    public function getCod() {
        return $this->cod;
    }

    public function setCod($cod) {
        $this->cod = $cod;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    // Método construtor
    public function __construct() {
        // Inicializa a conexão
        $this->conexao = new Conexao();
    }
}

?>
