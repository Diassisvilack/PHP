<?php
    require_once '../model/DTO/AlunoDTO.php';
    require_once '../model/DAO/AlunoDAO.php';
    require_once '../model/DAO/conexao.php'; 
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['btnCadastrar'])){

            $AlunoDTO = new AlunoDTO();
            
            $AlunoDTO->__setNome($_POST['Nome']);
            $AlunoDTO->__setMatricula($_POST['Matricula']); 
            $AlunoDTO->__setTelefone($_POST['Telefone']);
            $AlunoDTO->__setEmail($_POST['Email']);
            $AlunoDTO->__setCurso($_POST['Curso']); 
            
            $AlunoDAO = new AlunoDAO($conexao);
            
            $AlunoDAO->cadastrarAluno($AlunoDTO);
        }

        header("Location: ../view/consultarAluno.php");
        exit; 
    }
?>