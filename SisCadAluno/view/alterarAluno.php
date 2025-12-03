<?php
    // 1. Alterar includes para AlunoDAO
    include_once '../model/DAO/AlunoDAO.php'; 
    include_once '../model/DAO/conexao.php';
    
    // Verifica se o ID foi passado via GET
    if (!empty($_GET['id'])){
        $id = $_GET['id'];

        // 2. Instancia o DAO de Aluno
        $AlunoDAO = new AlunoDAO($conexao);
        
        // Consulta os dados do Aluno pelo ID
        // O resultado da consulta será armazenado na variável $aluno
        $aluno = $AlunoDAO->consultarId($id); 
    } else {
        // Trata o caso de ID ausente
        header("Location: consultarAluno.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Aluno</title> <link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="cadastrarAluno.php">Cadastrar</a></li> <li><a href="consultarAluno.php">Consultar</a></li>   </ul>
    </nav>


<h1>Alterar Aluno</h1> <form method="POST" action="../control/alterarAlunoControl.php"> <input type="hidden" name="idAlterar" value="<?= $id; ?>" />
    
    <label>Nome do Aluno: </label>     
    <input type="text" name="Nome" value="<?= $aluno->__getNome() ?>"/> 
    <br><br>
    
    <label>Matrícula do Aluno: </label>      
    <input type="text" name="Matricula" value="<?= $aluno->__getMatricula() ?>"/> 
    <br><br>

    <label>Telefone do Aluno: </label>       
    <input type="text" name="Telefone" value="<?= $aluno->__getTelefone() ?>"/> 
    <br><br>

    <label>Email do Aluno: </label>      
    <input type="text" name="Email" value="<?= $aluno->__getEmail() ?>"/> 
    <br><br>
    
    <label>Curso: </label>      
    <input type="text" name="Curso" value="<?= $aluno->__getCurso() ?>"/> 
    <br><br>

    <input type="submit" value="Alterar" name="btnAlterar"/> 
</form>

</body>
</html>