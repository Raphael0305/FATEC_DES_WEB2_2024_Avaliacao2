<?php

class ConexaoBanco{
    private $conexao;

    public function __construct(){
        $this->conectarBanco('vagas', 'localhost', 'root', '');
    }

    public function conectarBanco($dbname,$host,$user,$senha){
        try {
            $this->conexao = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
        } catch (PDOException $e) {
            echo "Erro com o banco de dados:".$e->getMessage();
            exit();
        }
    }

    public function getConexao(){
        return $this->conexao;
    }

    public function __destruct(){

        $this->conexao = null;
    }

}
?>