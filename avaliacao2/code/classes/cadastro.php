<?php
require_once __DIR__ . '/conexao.php';

class Cadastro{
    private $conectar;

    public function __construct(){
        $conexao = new ConexaoBanco();
        $this->conectar = $conexao->getConexao();
    }

    public function cadastrarVaga($empresa, $numero, $email, $vaga,$curso){
        $cmd = $this->conectar->prepare("INSERT INTO vagas (nome_empresa, numero_whatsapp, email_contato, descritivo_vaga, curso) VALUES (:empresa, :numero, :email, :vaga, :curso)");
        $cmd->bindValue(":empresa" ,   $empresa);
        $cmd->bindValue(":numero"  ,   $numero );
        $cmd->bindValue(":email"   ,   $email  );
        $cmd->bindValue(":vaga"    ,   $vaga   );
        $cmd->bindValue(":curso"   ,   $curso  );
        $cmd->execute();
        return true;
    }

    public function mostrarVagas(){
        $cmd = $this->conectar->query("SELECT * FROM vagas");
        return $cmd->fetchAll();
    }

    public function removerVaga($id){
        $cmd = $this->conectar->prepare("SELECT * FROM vagas where id = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
        if(!$cmd->rowCount() > 0){
            return false;
        }else{
            $cmd = $this->conectar->prepare("DELETE FROM vagas WHERE id = :id ");
            $cmd->bindValue(":id", $id);
            $cmd->execute();
            return true;
        }
    }
}

?>