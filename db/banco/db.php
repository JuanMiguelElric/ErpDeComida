<?php
namespace src\db\banco;

use PDO;
use PDOException;

class Database
{
    private $DbServidor = '127.0.0.1';
    private $DbUsuario = 'BREId';
    private $DbSenha = 'uGKa4sQfGqmKcZRZ';
    private $DbTable = 'erptest';

    private $conexao;

    public function __construct()
    {
        try {
            $dsn = "mysql:host={$this->DbServidor};dbname={$this->DbTable}";
            $this->conexao = new PDO($dsn, $this->DbUsuario, $this->DbSenha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            //verifica se a conexão com o banco de dados está ativa se não estiver retornará um erro
        } catch (PDOException $e) {
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
            die();
        }
    }

    public function getConexao()
    {
        return $this->conexao;
    }
}
?>
