<?php

class Conexao {
    /* 
    * Variáveis da classe para armazenar as informações de conexão com o banco de dados.
    * $host: Endereço do servidor de banco de dados (neste caso, localhost, pois o servidor é local).
    * $usuario: Nome de usuário do banco de dados (por padrão, 'root' em servidores locais).
    * $senha: Senha do usuário para acessar o banco de dados (vazia por padrão para servidores locais).
    * $banco: Nome do banco de dados que será utilizado pela aplicação.
    * $conexao: Variável que armazenará a conexão ativa com o banco de dados.
    */
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "db_barbearia_barbeleon";
    private $conexao; 

    // Construtor da classe Conexao, responsável por estabelecer a conexão com o banco de dados.
    public function __construct() {
        // Cria uma nova instância da classe mysqli, passando as credenciais para a conexão com o banco de dados.
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

        /* 
        * Verifica se houve erro ao tentar conectar com o banco de dados.
        * Se a conexão falhar, o método connect_error retorna o erro e o script é interrompido com a mensagem de erro.
        */
        if ($this->conexao->connect_error) {
            die("Falha na conexão: " . $this->conexao->connect_error);
        }
    }

    // Método que retorna a conexão ativa com o banco de dados.
    public function getConexao() {
        // Retorna a conexão atual, permitindo o uso em outros métodos da aplicação.
        return $this->conexao;
    }
}

?>
