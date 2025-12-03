<?php
    require_once '../model/DTO/AlunoDTO.php';
    require_once '../model/DAO/AlunoDAO.php';
    require_once '../model/DAO/conexao.php'; 
    
    if (!empty($_GET['idExcluir'])){  

        $id = $_GET['idExcluir'];

        $AlunoDAO = new AlunoDAO($conexao);
        
        $AlunoDAO->excluirAluno($id); 
    }
    
    header("Location: ../view/consultarAluno.php");
    exit; 
?>