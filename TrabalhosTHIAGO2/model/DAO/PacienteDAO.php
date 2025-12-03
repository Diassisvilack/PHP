<?php

class PacienteDAO{
    public $conexao;

    public function __construct($conexao){
       $this->conexao = $conexao;
    }

    public function cadastrarPaciente($PacienteDTO){
        try{
            $sql = 'INSERT INTO Paciente (Nome, CPF, Telefone, Email, Genero) 
                    VALUES (:Nome, :CPF, :Telefone, :Email, :Genero)';

            $insert = $this->conexao->prepare($sql);

            $insert->bindValue(":Nome",     $PacienteDTO->__getNome());
            $insert->bindValue(":CPF",      $PacienteDTO->__getCPF());
            $insert->bindValue(":Telefone", $PacienteDTO->__getTelefone());
            $insert->bindValue(":Email",    $PacienteDTO->__getEmail());
            $insert->bindValue(":Genero",   $PacienteDTO->__getGenero());

            return $insert->execute();

        }catch (PDOException $erro){
            echo "Erro ao cadastrar: " . $erro->getMessage();
        }
    }

    public function consultarPaciente(){
        try{
            $sql = 'SELECT * FROM Paciente';
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        }catch(PDOException $erro){
            echo "Erro ao consultar: " . $erro->getMessage();
        }
    }

    public function consultarId(int $id){
        $sql = 'SELECT * FROM Paciente WHERE id = :id';
        $consultaId = $this->conexao->prepare($sql);
        $consultaId->bindValue(":id",$id);
        $consultaId->execute();
        return $consultaId->fetch(PDO::FETCH_ASSOC);
    }

    public function excluirPaciente($id){
        try{
            $sql = 'DELETE FROM Paciente WHERE id = :id';
            $delete = $this->conexao->prepare($sql);
            $delete->bindValue(":id",$id);
            $delete->execute();

        }catch(PDOException $erro){
            echo "Erro ao excluir: " . $erro->getMessage();
        }
    }

    public function alterarPaciente($PacienteDTO, $id){
        try{
            $sql = 'UPDATE Paciente 
                    SET Nome=:Nome, CPF=:CPF, Telefone=:Telefone, Email=:Email, Genero=:Genero 
                    WHERE id=:id';

            $altera = $this->conexao->prepare($sql);

            $altera->bindValue(":Nome",     $PacienteDTO->__getNome());
            $altera->bindValue(":CPF",      $PacienteDTO->__getCPF());
            $altera->bindValue(":Telefone", $PacienteDTO->__getTelefone());
            $altera->bindValue(":Email",    $PacienteDTO->__getEmail());
            $altera->bindValue(":Genero",   $PacienteDTO->__getGenero());
            $altera->bindValue(":id",       $id);

            $altera->execute();

        }catch(PDOException $erro){
            echo "Erro ao alterar: " . $erro->getMessage();
        }
    }
}
?>
