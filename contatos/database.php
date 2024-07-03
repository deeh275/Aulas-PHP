<?php
class Database {
    private $host = 'localhost';
    private $bd = 'contatos';
    private $usuario = 'root';
    private $senha = "";
    private $conexao;

    public function __construct() {
        try {
           $this->conexao = new PDO("mysql:host=$this->host;dbname=$this->bd", $this->usuario, $this->senha);
           $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $this->conexao->exec("set names utf8");
        } catch (PDOException $e) {
            echo 'Conexão com o banco falhou!' . $e->getMessage();
            exit;
        }
    }

    public function getConexao() {
        return $this->conexao;
    }
}
?>