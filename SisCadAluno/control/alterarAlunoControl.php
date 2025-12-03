<?php

    require_once '../model/DTO/AlunoDTO.php';
    require_once '../model/DAO/AlunoDAO.php';
    require_once '../model/DAO/conexao.php'; 

    if (!empty($_POST['idAlterar'])){

        $id = $_POST['idAlterar'];

        $AlunoDTO = new AlunoDTO();
        
        $AlunoDTO->__setNome($_POST['Nome']);
        $AlunoDTO->__setMatricula($_POST['Matricula']); 
        $AlunoDTO->__setTelefone($_POST['Telefone']);
        $AlunoDTO->__setEmail($_POST['Email']);
        $AlunoDTO->__setCurso($_POST['Curso']); 
    
        $AlunoDAO = new AlunoDAO($conexao);
        
        $AlunoDAO->alterarAluno($AlunoDTO, $id);
    }
    
    header("Location: ../view/consultarAluno.php");
    exit; 
?>