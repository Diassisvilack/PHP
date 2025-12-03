<?php
require_once '../model/alunoDTO.php'; 
require_once '../model/alunoDAO.php';

$alunoDAO = new AlunoDAO();
// A variável $listaAlunos é crucial para a view/consultarAluno.php
$listaAlunos = $alunoDAO->consultar(); 
?>