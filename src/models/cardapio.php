<?php
use src\db\banco\Database;

class Cardapio 
{
    private $db;
    public function __construct(Database $conexao)
    {
        $this->db = $conexao->getConexao();
        
    }
    public function CadastrarAlimento($nome,$ingredientes, $preco){
        try {
            //code...
            $sqlAdicionar = "
                INSERT INTO cardapio ('Nome','Ingredientes','price') 
                Values($nome, $ingredientes, $preco);
                
                
                ";
                //prepara todos os dados e verifica a situação do db e logo apos executa a adição em nosso banco de dados
                $stmt =$this->db->prepare($sqlAdicionar);
                $stmt->execute([$nome,$ingredientes,$preco]);
                if($stmt->rowCount()>0){
                    echo "Alimento adicionado com suceso ";
                }
        } catch (PDOException $e) {
            return "Erro ao CadastrarAlimento". $e->getMessage();
            //throw $th;
        }



    }
}