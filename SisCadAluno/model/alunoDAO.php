<?php

require_once '../includes/conexao.php'; 
require_once 'alunoDTO.php';

class AlunoDAO {
    private $conexao;

    public function __construct() {
        $this->conexao = Conexao::getInstance();
    }

    public function cadastrar(AlunoDTO $aluno) {
        $sql = "INSERT INTO aluno (nome, telefone, endereco, email, curso) 
                VALUES (:nome, :telefone, :endereco, :email, :curso)";
        
        $stmt = $this->conexao->prepare($sql);
        
        return $stmt->execute([
            ':nome' => $aluno->nome,
            ':telefone' => $aluno->telefone,
            ':endereco' => $aluno->endereco,
            ':email' => $aluno->email,
            ':curso' => $aluno->curso
        ]);
    } 

    public function consultar() {
    $sql = "SELECT * FROM aluno ORDER BY nome";
    $stmt = $this->conexao->prepare($sql);
    $stmt->execute();
        
        $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        
        $listaAlunos = [];
    // O Warning ocorre porque $row não tem a chave 'matricula' sem a linha acima.
    while ($row = $stmt->fetch()) { 
        $aluno = new AlunoDTO();
        $aluno->Matrícula = $row['Matrícula']; // <--- ESTA É A LINHA 38 (ou próxima)
        $aluno->nome = $row['nome'];
        // ... restante do código
        $listaAlunos[] = $aluno;
    }
    return $listaAlunos;
}
    
    
    public function consultarPorMatrícula($matrícula) {
        $sql = "SELECT * FROM aluno WHERE matricula = :matrícula";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute([':matrícula' => $matricula]);
        
        $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        
        if ($row = $stmt->fetch()) {
            $aluno = new AlunoDTO();
            $aluno->matrícula = $row['matrícula'];
            $aluno->nome = $row['nome'];
            $aluno->telefone = $row['telefone'];
            $aluno->endereco = $row['endereco'];
            $aluno->email = $row['email'];
            $aluno->curso = $row['curso'];
            return $aluno;
        }
        return null;
    } 

    public function alterar(AlunoDTO $aluno) {
        $sql = "UPDATE aluno SET nome=:nome, telefone=:telefone, endereco=:endereco, email=:email, curso=:curso WHERE matricula=:matricula";
        $stmt = $this->conexao->prepare($sql);
        
        return $stmt->execute([
            ':nome' => $aluno->nome,
            ':telefone' => $aluno->telefone,
            ':endereco' => $aluno->endereco,
            ':email' => $aluno->email,
            ':curso' => $aluno->curso,
            ':matrícula' => $aluno->matrícula 
        ]);
    } 

    public function excluir($matrícula) {
        $sql = "DELETE FROM aluno WHERE matrícula = :matr´tcula";
        $stmt = $this->conexao->prepare($sql);
        return $stmt->execute([':matrícula' => $matrícula]);
    }
    
} 
?>